<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Examples extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		$this->load->view('templates/header');
		$this->load->view('example.php',(array)$output);
	}

	public function offices()
	{
		$output = $this->grocery_crud->render();

		$this->_example_output($output);
	}

	public function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}

	public function offices_management()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('offices');
			$crud->set_subject('Office');
			$crud->required_fields('city');
			$crud->columns('city','country','phone','addressLine1','postalCode');

			$output = $crud->render();

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	public function employees_management()
	{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('employees');
			$crud->set_relation('officeCode','offices','city');
			$crud->display_as('officeCode','Office City');
			$crud->set_subject('Employee');

			$crud->required_fields('lastName');

			$crud->set_field_upload('file_url','assets/uploads/files');

			$output = $crud->render();

			$this->_example_output($output);
	}

	public function customers_management()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('customers');
			$crud->columns('customerName','contactLastName','phone','city','country','salesRepEmployeeNumber','creditLimit');
			$crud->display_as('salesRepEmployeeNumber','from Employeer')
				 ->display_as('customerName','Name')
				 ->display_as('contactLastName','Last Name');
			$crud->set_subject('Customer');
			$crud->set_relation('salesRepEmployeeNumber','employees','lastName');

			$output = $crud->render();

			$this->_example_output($output);
	}

	// Fungsi CRUD untuk bagian about
	public function about()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('about');
			$crud->columns('title','subtitle','description');
		
			$crud->set_subject('About');
			$output = $crud->render();

			$this->_example_output($output);
	}

	// Fungsi CRUD untuk bagian contact
	public function contact()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('contact');
			$crud->columns('name','email_address','phone_number','message');

			$crud	->display_as('name','Nama')
					->display_as('email_address','Alamat Email');
			$crud->set_subject('Contact');
			$output = $crud->render();

			$this->_example_output($output);
	}

	// Fungsi CRUD untuk bagian news
	public function news()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('news');
			$crud->columns('title','subtitle','slug','description','date','image');
			$crud->set_field_upload('image','assets/uploads/files');

			$crud->set_subject('News');
			$output = $crud->render();

			$this->_example_output($output);
	}

	// Fungsi CRUD untuk bagian biodata
	public function biodata()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('biodata');
			$crud->columns('nim','nama','jurusan','jenis_kelamin','tempat_lahir','tanggal_lahir','alamat','photo');
			$crud->set_field_upload('photo','assets/uploads/files');
			$crud->set_subject('Biodata');
			$output = $crud->render();

			$this->_example_output($output);
	}

	public function testimoni()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('testimonials');
			$crud->columns('nama','pekerjaan','deskripsi_testimoni','photo');
			$crud->set_field_upload('photo','assets/uploads/files');
			$crud->field_type('pekerjaan','dropdown', array('1' => 'Front-End Developer','2' => 'Back-End Developer','3' => 'Mobile Developer','4' => 'Software Engineer','5' => 'System Analyst','6' => 'System Admin','7' => 'Full-Stack Developer','8' => 'UI/UX Designer','9' => 'Game Developer','10' => 'Desktop Developer','11' => 'IT Support','12' => 'Data Analyst','13' => 'Typewriter','14' => 'Enterpreneur'));


			$crud->set_subject('Testimoni');
			$output = $crud->render();

			$this->_example_output($output);
	}

	// Bagian data barang
	public function data_barang()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('data_barang');
			$crud->columns('kode_barang','nama_kategori','nama_barang','jumlah','satuan','harga');
			$crud->set_subject('Data Barang');
			$crud->set_relation('nama_kategori','kategori_barang','nama_kategori');

			$crud->field_type('satuan','dropdown', array('1' => 'Pcs','2' => 'Kg','3' => 'ML','4' => 'Liter','5' => 'Unit','6' => 'Box','7' => 'Renceng','8' => 'Ons','9' => 'Gram','10' => 'Pack'));

			$output = $crud->render();

			$this->_example_output($output);
	}

	public function kategori_barang()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('kategori_barang');
			$crud->columns('kode_barang','nama_kategori');
			$crud->set_subject('Kategori Barang');

			$output = $crud->render();

			$this->_example_output($output);
	}

	public function data_pelanggan()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('data_pelanggan');
			$crud->columns('kode_pelanggan','nama_pelanggan','jk','kota_kab','kecamatan','kelurahan','kode_pos','no_hp');
			$crud->set_subject('Data Pelanggan');
			$crud	->display_as('jk','Jenis Kelamin')
						->display_as('kota_kab','Kota/Kabupaten');
			$crud->set_relation('kota_kab','data_alamat','kota_kab');
			$crud->set_relation('kecamatan','data_alamat','kecamatan');
			$crud->set_relation('kelurahan','data_alamat','kelurahan');
			$crud->set_relation('kode_pos','data_alamat','kode_pos');

			$output = $crud->render();

			$this->_example_output($output);
	}

	public function data_alamat()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('data_alamat');
			$crud->columns('kode_alamat','kota_kab','kecamatan','kelurahan','kode_pos');
			$crud->set_subject('Data Alamat');

			$output = $crud->render();

			$this->_example_output($output);
	}

	public function tenor_cicilan()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('tenor_cicilan');
			$crud->columns('kode_cicilan','tenor_cicil','besaran_cicilan');
			$crud->set_subject('Tenor Cicilan');
			$crud	->display_as('tenor_cicil','Tenor Cicilan/Bulan');

			$output = $crud->render();

			$this->_example_output($output);
	}

	public function data_kredit()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('data_kredit');
			$crud->columns('kode_transaksi','nama_pelanggan','kode_barang','tanggal_pengajuan','jumlah_beli','satuan','harga','dp','tenor_cicil','besaran_cicilan');
			$crud->set_subject('Data Kredit Pelanggan');
			$crud->set_relation('nama_pelanggan','data_pelanggan','nama_pelanggan');
			$crud->set_relation('kode_barang','data_barang','{kode_barang} - {nama_barang}');
			$crud->set_relation('tenor_cicil','tenor_cicilan','tenor_cicil');
			$crud->set_relation('besaran_cicilan','tenor_cicilan','besaran_cicilan');
			$crud->field_type('satuan','dropdown', array('1' => 'Pcs','2' => 'Kg','3' => 'ML','4' => 'Liter','5' => 'Unit','6' => 'Box','7' => 'Renceng','8' => 'Ons','9' => 'Gram','10' => 'Pack'));

			$crud->display_as('dp','Uang DP');
			$output = $crud->render();

			$this->_example_output($output);
	}

	public function users()
{
	$crud = new grocery_CRUD();
	$crud->set_table('crud_users');
	$crud->set_subject('Users');
	$crud->required_fields('username','password');
	$crud->columns('username','password','permissions');
	$crud->change_field_type('password', 'password');
	$crud->unset_read()->unset_export()->unset_print();
	$crud->callback_before_insert(array($this,'use_md5_password'));
	$crud->callback_before_update(array($this,'use_md5_password'));
	$output = $crud->render();
	$this->_example_output($output);
	//or if you don't use the _example_output() function you can comment above and uncomment below
	//$this->load->view('admin_page.php',$output);  
}
function use_md5_password($post_array) {
	$post_array['password'] = md5($post_array['password']);
	return $post_array;
}  

	public function orders_management()
	{
			$crud = new grocery_CRUD();

			$crud->set_relation('customerNumber','customers','{contactLastName} {contactFirstName}');
			$crud->display_as('customerNumber','Customer');
			$crud->set_table('orders');
			$crud->set_subject('Order');
			$crud->unset_add();
			$crud->unset_delete();

			$output = $crud->render();

			$this->_example_output($output);
	}

	public function products_management()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('products');
			$crud->set_subject('Product');
			$crud->unset_columns('productDescription');
			$crud->callback_column('buyPrice',array($this,'valueToEuro'));

			$output = $crud->render();

			$this->_example_output($output);
	}

	public function valueToEuro($value, $row)
	{
		return $value.' &euro;';
	}

	public function film_management()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('film');
		$crud->set_relation_n_n('actors', 'film_actor', 'actor', 'film_id', 'actor_id', 'fullname','priority');
		$crud->set_relation_n_n('category', 'film_category', 'category', 'film_id', 'category_id', 'name');
		$crud->unset_columns('special_features','description','actors');

		$crud->fields('title', 'description', 'actors' ,  'category' ,'release_year', 'rental_duration', 'rental_rate', 'length', 'replacement_cost', 'rating', 'special_features');

		$output = $crud->render();

		$this->_example_output($output);
	}

	public function film_management_twitter_bootstrap()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('twitter-bootstrap');
			$crud->set_table('film');
			$crud->set_relation_n_n('actors', 'film_actor', 'actor', 'film_id', 'actor_id', 'fullname','priority');
			$crud->set_relation_n_n('category', 'film_category', 'category', 'film_id', 'category_id', 'name');
			$crud->unset_columns('special_features','description','actors');

			$crud->fields('title', 'description', 'actors' ,  'category' ,'release_year', 'rental_duration', 'rental_rate', 'length', 'replacement_cost', 'rating', 'special_features');

			$output = $crud->render();
			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	function multigrids()
	{
		$this->config->load('grocery_crud');
		$this->config->set_item('grocery_crud_dialog_forms',true);
		$this->config->set_item('grocery_crud_default_per_page',10);

		$output1 = $this->offices_management2();

		$output2 = $this->employees_management2();

		$output3 = $this->customers_management2();

		$js_files = $output1->js_files + $output2->js_files + $output3->js_files;
		$css_files = $output1->css_files + $output2->css_files + $output3->css_files;
		$output = "<h1>List 1</h1>".$output1->output."<h1>List 2</h1>".$output2->output."<h1>List 3</h1>".$output3->output;

		$this->_example_output((object)array(
				'js_files' => $js_files,
				'css_files' => $css_files,
				'output'	=> $output
		));
	}

	public function offices_management2()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('offices');
		$crud->set_subject('Office');

		$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));

		$output = $crud->render();

		if($crud->getState() != 'list') {
			$this->_example_output($output);
		} else {
			return $output;
		}
	}

	public function employees_management2()
	{
		$crud = new grocery_CRUD();

		$crud->set_theme('datatables');
		$crud->set_table('employees');
		$crud->set_relation('officeCode','offices','city');
		$crud->display_as('officeCode','Office City');
		$crud->set_subject('Employee');

		$crud->required_fields('lastName');

		$crud->set_field_upload('file_url','assets/uploads/files');

		$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));

		$output = $crud->render();

		if($crud->getState() != 'list') {
			$this->_example_output($output);
		} else {
			return $output;
		}
	}

	public function customers_management2()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('customers');
		$crud->columns('customerName','contactLastName','phone','city','country','salesRepEmployeeNumber','creditLimit');
		$crud->display_as('salesRepEmployeeNumber','from Employeer')
			 ->display_as('customerName','Name')
			 ->display_as('contactLastName','Last Name');
		$crud->set_subject('Customer');
		$crud->set_relation('salesRepEmployeeNumber','employees','lastName');

		$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));

		$output = $crud->render();

		if($crud->getState() != 'list') {
			$this->_example_output($output);
		} else {
			return $output;
		}
	}

	// Fungsi untuk bagian about2
	public function about2()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('about');
		$crud->columns('title','subtitle','description');
		
		$crud->set_subject('About');
		$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));

		$output = $crud->render();

		if($crud->getState() != 'list') {
			$this->_example_output($output);
		} else {
			return $output;
		}
	}

	// Fungsi untuk bagian contact2
	public function contact2()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('contact');
		$crud->columns('name','email_address','phone_number','message');
		
		$crud	->display_as('name','Nama')
				->display_as('email_address','Alamat Email');
		$crud->set_subject('Contact');
		$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));

		$output = $crud->render();

		if($crud->getState() != 'list') {
			$this->_example_output($output);
		} else {
			return $output;
		}
	}

	// Fungsi untuk bagian news2
	public function news2()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('news');
		$crud->columns('title','subtitle','slug','description','date','image');
		$crud->set_field_upload('image','assets/uploads/files');
		$crud->set_subject('News');
		$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));

		$output = $crud->render();

		if($crud->getState() != 'list') {
			$this->_example_output($output);
		} else {
			return $output;
		}
	}

		// Fungsi untuk bagian biodata2
		public function biodata2()
		{
			$crud = new grocery_CRUD();
	
			$crud->set_table('biodata');
			$crud->columns('nim','nama','jurusan','jenis_kelamin','tempat_lahir','tanggal_lahir','alamat','photo');
			$crud->set_field_upload('photo','assets/uploads/files');
			$crud->set_subject('Biodata');
			$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));
	
			$output = $crud->render();
	
			if($crud->getState() != 'list') {
				$this->_example_output($output);
			} else {
				return $output;
			}
		}

		public function testimoni2()
		{
			$crud = new grocery_CRUD();
	
			$crud->set_table('testimonials');
			$crud->columns('nama','pekerjaan','deskripsi_testimoni','photo');
			$crud->set_field_upload('photo','assets/uploads/files');
			$crud->set_subject('Testimoni');
			$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));
	
			$output = $crud->render();
	
			if($crud->getState() != 'list') {
				$this->_example_output($output);
			} else {
				return $output;
			}
		}

		public function data_barang2()
		{
			$crud = new grocery_CRUD();
	
			$crud->set_table('data_barang');
			$crud->columns('kode_barang','nama_kategori','nama_barang','jumlah','satuan','harga');
			$crud->set_subject('Data Barang');
			$crud->set_relation('nama_kategori','kategori_barang','nama_kategori');
			$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));
	
			$output = $crud->render();
	
			if($crud->getState() != 'list') {
				$this->_example_output($output);
			} else {
				return $output;
			}
		}

}
