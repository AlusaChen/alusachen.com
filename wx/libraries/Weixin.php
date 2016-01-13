<?php
class Weixin
{
    protected $CI;

    protected $config;

    public function __construct()
    {
        $this->CI =& get_instance();

        //load config
        $this->CI->config->load('weixin', true);
        $this->config = config_item('weixin');
        if(!$this->config) show_error('缺少配置');
    }


    public function print_config()
    {
        print_r($this->config);
    }
}