<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/19
 * Time: 14:04
 */

namespace H5\Controller;

use Think\Controller;
use Common\Common\Constant\NumberConstants;

/**
 * @author huang qisheng <huangqisheng@lezu360.cn>
 *活动控制器
 *
 */
class TestController extends H5Controller {

    private $weixinApi; //关注回调

    public function __construct() {
        parent::__construct();
        $this->weixinApi = A('Third/Weixin', 'Api');
    }

    public function createPact(){
        $order_id = '16031814043511';
        $res = A('Trade/Pact','Api')->createPact($order_id,false);
        var_dump($res);
    }
}