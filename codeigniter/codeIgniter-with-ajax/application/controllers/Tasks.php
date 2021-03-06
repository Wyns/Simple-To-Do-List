<?php

class Tasks extends CI_Controller {

	public function index(){
		$this->load->model('Tasks_modal');		
		$data['data'] = $this->Tasks_modal->dataIndex();
		$this->load->view('tasks/header');
		$this->load->view('tasks/index',$data);
		$this->load->view('tasks/footer');
	}
	public function getdata(){
		$this->load->model('Tasks_modal');		
		$data['data'] = $this->Tasks_modal->dataIndex();
		$this->load->view('tasks/data',$data);

	}
	public function create()
	{
		$data['title'] = 'create new task';
		$this->load->view('tasks/new');

	}

	public function save(){
		$this->load->model('Tasks_modal');
		$this->Tasks_modal->save();
	}

	public function done($id)
	{
		$this->load->model('Tasks_modal');
		$this->Tasks_modal->done($id);
			
	}	

	public function edit($id){
		$this->load->model('Tasks_modal');
		$data['row'] = $this->Tasks_modal->edit($id);
		$this->load->view('tasks/edit',$data);
	}
	public function find($id){
		$this->load->model('Tasks_modal');
		$data['row'] = $this->Tasks_modal->edit($id);
		echo $data['row']['task_name'];
	}
	public function update($id){
	$this->load->model('Tasks_modal');
	$this->Tasks_modal->update($id);			
	}

	public function delete($id){
		$this->load->model('Tasks_modal');
		$this->Tasks_modal->delete($id);
	}
}