<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\UpdateGatewayRouteWafStatusResponseBody\data;

use AlibabaCloud\Tea\Model;

class cors extends Model
{
    /**
     * @description The credentials allowed.
     *
     * @example true
     *
     * @var bool
     */
    public $allowCredentials;

    /**
     * @description The headers allowed.
     *
     * @example *
     *
     * @var string
     */
    public $allowHeaders;

    /**
     * @description The methods allowed.
     *
     * @example GET,POST,PUT,DELETE,HEAD,OPTIONS,PATCH
     *
     * @var string
     */
    public $allowMethods;

    /**
     * @description The origins allowed.
     *
     * @example *
     *
     * @var string
     */
    public $allowOrigins;

    /**
     * @description The response headers.
     *
     * @example *
     *
     * @var string
     */
    public $exposeHeaders;

    /**
     * @description The status.
     *
     * @example off
     *
     * @var string
     */
    public $status;

    /**
     * @description The time unit.
     *
     * @example s
     *
     * @var string
     */
    public $timeUnit;

    /**
     * @description The unit number.
     *
     * @example 1
     *
     * @var int
     */
    public $unitNum;
    protected $_name = [
        'allowCredentials' => 'AllowCredentials',
        'allowHeaders'     => 'AllowHeaders',
        'allowMethods'     => 'AllowMethods',
        'allowOrigins'     => 'AllowOrigins',
        'exposeHeaders'    => 'ExposeHeaders',
        'status'           => 'Status',
        'timeUnit'         => 'TimeUnit',
        'unitNum'          => 'UnitNum',
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
        if (null !== $this->allowOrigins) {
            $res['AllowOrigins'] = $this->allowOrigins;
        }
        if (null !== $this->exposeHeaders) {
            $res['ExposeHeaders'] = $this->exposeHeaders;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->timeUnit) {
            $res['TimeUnit'] = $this->timeUnit;
        }
        if (null !== $this->unitNum) {
            $res['UnitNum'] = $this->unitNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cors
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
        if (isset($map['AllowOrigins'])) {
            $model->allowOrigins = $map['AllowOrigins'];
        }
        if (isset($map['ExposeHeaders'])) {
            $model->exposeHeaders = $map['ExposeHeaders'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TimeUnit'])) {
            $model->timeUnit = $map['TimeUnit'];
        }
        if (isset($map['UnitNum'])) {
            $model->unitNum = $map['UnitNum'];
        }

        return $model;
    }
}
