<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeIngressResponseBody\data;

use AlibabaCloud\Tea\Model;

class corsConfig extends Model
{
    /**
     * @var string
     */
    public $allowCredentials;

    /**
     * @var string
     */
    public $allowHeaders;

    /**
     * @var string
     */
    public $allowMethods;

    /**
     * @var string
     */
    public $allowOrigin;

    /**
     * @var string
     */
    public $enable;

    /**
     * @var string
     */
    public $exposeHeaders;

    /**
     * @var string
     */
    public $maxAge;
    protected $_name = [
        'allowCredentials' => 'AllowCredentials',
        'allowHeaders' => 'AllowHeaders',
        'allowMethods' => 'AllowMethods',
        'allowOrigin' => 'AllowOrigin',
        'enable' => 'Enable',
        'exposeHeaders' => 'ExposeHeaders',
        'maxAge' => 'MaxAge',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowCredentials) {
            $res['AllowCredentials'] = $this->allowCredentials;
        }
        if (null !== $this->allowHeaders) {
            $res['AllowHeaders'] = $this->allowHeaders;
        }
        if (null !== $this->allowMethods) {
            $res['AllowMethods'] = $this->allowMethods;
        }
        if (null !== $this->allowOrigin) {
            $res['AllowOrigin'] = $this->allowOrigin;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->exposeHeaders) {
            $res['ExposeHeaders'] = $this->exposeHeaders;
        }
        if (null !== $this->maxAge) {
            $res['MaxAge'] = $this->maxAge;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return corsConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowCredentials'])) {
            $model->allowCredentials = $map['AllowCredentials'];
        }
        if (isset($map['AllowHeaders'])) {
            $model->allowHeaders = $map['AllowHeaders'];
        }
        if (isset($map['AllowMethods'])) {
            $model->allowMethods = $map['AllowMethods'];
        }
        if (isset($map['AllowOrigin'])) {
            $model->allowOrigin = $map['AllowOrigin'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['ExposeHeaders'])) {
            $model->exposeHeaders = $map['ExposeHeaders'];
        }
        if (isset($map['MaxAge'])) {
            $model->maxAge = $map['MaxAge'];
        }

        return $model;
    }
}
