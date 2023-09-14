<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ListRulesResponseBody\rules\ruleActions;

use AlibabaCloud\Tea\Model;

class corsConfig extends Model
{
    /**
     * @description Indicates whether credentials can be carried in CORS requests. Valid values:
     *
     *   **on**
     *   **off**
     *
     * @example on
     *
     * @var string
     */
    public $allowCredentials;

    /**
     * @description The allowed headers for CORS requests.
     *
     * @var string[]
     */
    public $allowHeaders;

    /**
     * @description The allowed HTTP methods for CORS requests.
     *
     * @var string[]
     */
    public $allowMethods;

    /**
     * @description The allowed origins of CORS requests.
     *
     * @var string[]
     */
    public $allowOrigin;

    /**
     * @description The headers that can be exposed.
     *
     * @var string[]
     */
    public $exposeHeaders;

    /**
     * @description The maximum cache time of dry run requests in the browser. Unit: seconds.
     *
     * Valid values: **-1** to **172800**.
     * @example 1000
     *
     * @var int
     */
    public $maxAge;
    protected $_name = [
        'allowCredentials' => 'AllowCredentials',
        'allowHeaders'     => 'AllowHeaders',
        'allowMethods'     => 'AllowMethods',
        'allowOrigin'      => 'AllowOrigin',
        'exposeHeaders'    => 'ExposeHeaders',
        'maxAge'           => 'MaxAge',
    ];

    public function validate()
    {
    }

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
            if (!empty($map['AllowHeaders'])) {
                $model->allowHeaders = $map['AllowHeaders'];
            }
        }
        if (isset($map['AllowMethods'])) {
            if (!empty($map['AllowMethods'])) {
                $model->allowMethods = $map['AllowMethods'];
            }
        }
        if (isset($map['AllowOrigin'])) {
            if (!empty($map['AllowOrigin'])) {
                $model->allowOrigin = $map['AllowOrigin'];
            }
        }
        if (isset($map['ExposeHeaders'])) {
            if (!empty($map['ExposeHeaders'])) {
                $model->exposeHeaders = $map['ExposeHeaders'];
            }
        }
        if (isset($map['MaxAge'])) {
            $model->maxAge = $map['MaxAge'];
        }

        return $model;
    }
}
