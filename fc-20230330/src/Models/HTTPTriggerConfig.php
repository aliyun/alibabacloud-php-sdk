<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class HTTPTriggerConfig extends Model
{
    /**
     * @example {"JWKS":{"foo":"bar"},"TokenLookup":"header:Authorization:Bearer,cookie:AuthorizationCookie","ClaimPassBy":"query:uid:uid,header:name:name"}
     *
     * @var string
     */
    public $authConfig;

    /**
     * @example anonymous
     *
     * @var string
     */
    public $authType;

    /**
     * @example true
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
