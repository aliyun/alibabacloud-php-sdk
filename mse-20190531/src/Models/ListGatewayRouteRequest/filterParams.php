<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayRouteRequest;

use AlibabaCloud\Tea\Model;

class filterParams extends Model
{
    /**
     * @description The default service ID.
     *
     * @example 1
     *
     * @deprecated
     *
     * @var int
     */
    public $defaultServiceId;

    /**
     * @description The domain ID.
     *
     * @example 284
     *
     * @var int
     */
    public $domainId;

    /**
     * @description The associated domain name.
     *
     * @example *.alites.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The ID of the gateway.
     *
     * @example 81
     *
     * @var int
     */
    public $gatewayId;

    /**
     * @description The unique ID of the gateway.
     *
     * @example gw-30a0106924c94bca8712ec4e79fc5acc
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description The name of the gateway.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example /test
     *
     * @var string
     */
    public $path;

    /**
     * @description The order.
     *
     * @example 1
     *
     * @var int
     */
    public $routeOrder;

    /**
     * @description The status.
     *
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'defaultServiceId' => 'DefaultServiceId',
        'domainId'         => 'DomainId',
        'domainName'       => 'DomainName',
        'gatewayId'        => 'GatewayId',
        'gatewayUniqueId'  => 'GatewayUniqueId',
        'name'             => 'Name',
        'path'             => 'Path',
        'routeOrder'       => 'RouteOrder',
        'status'           => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultServiceId) {
            $res['DefaultServiceId'] = $this->defaultServiceId;
        }
        if (null !== $this->domainId) {
            $res['DomainId'] = $this->domainId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->routeOrder) {
            $res['RouteOrder'] = $this->routeOrder;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filterParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultServiceId'])) {
            $model->defaultServiceId = $map['DefaultServiceId'];
        }
        if (isset($map['DomainId'])) {
            $model->domainId = $map['DomainId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['RouteOrder'])) {
            $model->routeOrder = $map['RouteOrder'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
