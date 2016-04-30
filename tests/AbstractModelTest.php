<?php

class AbstractModelTest extends PHPUnit_Framework_TestCase
{

    protected $model;
    protected $db;

    public function __construct()
    {
        $this->db    = $this->getMock('\MysqliDb');
        $this->model = new \App\Model\homeModel($this->db);
    }

    public function test_setter()
    {
        $this->model->set('test', '12345');
        $this->assertEquals($this->model->get('test'), '12345');
    }

    public function test_getter()
    {
        // some data
        $this->model->set('case1', '123451');
        $this->model->set('case3', '123452');

        // test
        $this->assertEquals($this->model->get('case1'), '123451');
        $this->assertEquals($this->model->get('case3'), '123452');

        $this->assertArraySubset(['case1' => '123451', 'case3' => '123452'], $this->model->get());
    }

    /**
     * @expectedException        Exception
     * @expectedExceptionMessage Key invalid
     */
    public function test_setter_exception()
    {
        $this->model->set('', '12345');
    }

    /**
     * @expectedException        Exception
     * @expectedExceptionMessage No value for key
     */
    public function test_getter_exception()
    {
        $this->model->set('case1', '12345');
        $this->model->set('case3', '12345');
        $this->model->get('case2');
    }

}
