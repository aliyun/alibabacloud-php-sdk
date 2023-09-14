<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\CreateRulesRequest\rules\ruleActions;

use AlibabaCloud\Tea\Model;

class corsConfig extends Model
{
    /**
     * @description The key of the header.
     *
     *   The key must be 1 to 40 characters in length.
     *   It can contain letters, digits, hyphens (-), and underscores (\_).
     *   You cannot set Cookie or Host.
     *
     * @example on
     *
     * @var string
     */
    public $allowCredentials;

    /**
     * @var string[]
     */
    public $allowHeaders;

    /**
     * @var string[]
     */
    public $allowMethods;

    /**
     * @var string[]
     */
    public $allowOrigin;

    /**
     * @var string[]
     */
    public $exposeHeaders;

    /**
     * @description The value of the header. The header values within a forwarding rule must be unique.
     *
     *   The value must be 1 to 128 characters in length.
     *   It can contain printable characters whose ASCII values are `greater than or equal to 32 and lower than 127`. You can use asterisks (\*) and question marks (?) as wildcard characters.
     *   The value cannot start or end with a space character.
     *
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
