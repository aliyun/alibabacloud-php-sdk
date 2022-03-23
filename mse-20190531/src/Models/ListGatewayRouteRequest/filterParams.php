<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayRouteRequest;

use AlibabaCloud\Tea\Model;

class filterParams extends Model
{
    /**
     * @var int
     */
    public $defaultServiceId;

    /**
     * @var int
     */
    public $domainId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $routeOrder;

    /**
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
        if (isset($map['RouteOrder'])) {
            $model->routeOrder = $map['RouteOrder'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
