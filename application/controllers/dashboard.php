<?php
	class dashboard extends controller{
		public function index(){
			$dashboard = new dashboardModel();
			$dashboard_lista = $dashboard->select();
			$data['dashboard'] = $dashboard_lista;
			$this->loadView('index',$data);
			
		}
	}
?>