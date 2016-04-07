<?php

namespace H5\Controller;

use Think\Controller;
use Common\Common\Constant\NumberConstants;

/**
 * @author huang qisheng <huangqisheng@lezu360.cn>
 *活动控制器
 *
 */
class SignController extends H5Controller {

    private $weixinApi; //关注回调

    public function __construct() {
        parent::__construct();
        $this->weixinApi = A('Third/Weixin', 'Api');
    }

    //新浪分享合作页面
    public function SignProcess() {
        $config = $this->weixinApi->getJsConfig();
        $this->assign('config', $config);
        $this->display('SignProcess');
    }
}
