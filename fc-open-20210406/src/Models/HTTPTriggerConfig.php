<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class HTTPTriggerConfig extends Model
{
    /**
     * @var string
     */
    public $authConfig;

    /**
     * @example anonymous, function, jwt
     *
     * @var string
     */
    public $authType;

    /**
     * @description 禁用默认公网域名访问的开关，设置为true 时，访问函数默认提供的公网URL地址会返回403错误。设置为 false 则不会有任何影响。
     *
     * @var bool
     */
    public $disableURLInternet;

    /**
     * @var string[]
     */
    public $methods;
    protected $_name = [
        'authConfig'         => 'authConfig',
        'authType'           => 'authType',
        'disableURLInternet' => 'disableURLInternet',
        'methods'            => 'methods',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authConfig) {
            $res['authConfig'] = $this->authConfig;
        }
        if (null !== $this->authType) {
            $res['authType'] = $this->authType;
        }
        if (null !== $this->disableURLInternet) {
            $res['disableURLInternet'] = $this->disableURLInternet;
        }
        if (null !== $this->methods) {
            $res['methods'] = $this->methods;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HTTPTriggerConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['authConfig'])) {
            $model->authConfig = $map['authConfig'];
        }
        if (isset($map['authType'])) {
            $model->authType = $map['authType'];
        }
        if (isset($map['disableURLInternet'])) {
            $model->disableURLInternet = $map['disableURLInternet'];
        }
        if (isset($map['methods'])) {
            if (!empty($map['methods'])) {
                $model->methods = $map['methods'];
            }
        }

        return $model;
    }
}
