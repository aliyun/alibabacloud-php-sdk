<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayRouteOnAuthResponseBody;

use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayRouteOnAuthResponseBody\data\routePredicates;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 235
     *
     * @var int
     */
    public $domainId;

    /**
     * @var int[]
     */
    public $domainIdList;

    /**
     * @example 123.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @var string[]
     */
    public $domainNameList;

    /**
     * @example 399
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @example gw-7ea3da97b96543e19f6c597c****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @example 12
     *
     * @var int
     */
    public $id;

    /**
     * @example ceshi
     *
     * @var string
     */
    public $name;

    /**
     * @var routePredicates
     */
    public $routePredicates;
    protected $_name = [
        'domainId'        => 'DomainId',
        'domainIdList'    => 'DomainIdList',
        'domainName'      => 'DomainName',
        'domainNameList'  => 'DomainNameList',
        'gatewayId'       => 'GatewayId',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'id'              => 'Id',
        'name'            => 'Name',
        'routePredicates' => 'RoutePredicates',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainId) {
            $res['DomainId'] = $this->domainId;
        }
        if (null !== $this->domainIdList) {
            $res['DomainIdList'] = $this->domainIdList;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->domainNameList) {
            $res['DomainNameList'] = $this->domainNameList;
        }
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->routePredicates) {
            $res['RoutePredicates'] = null !== $this->routePredicates ? $this->routePredicates->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainId'])) {
            $model->domainId = $map['DomainId'];
        }
        if (isset($map['DomainIdList'])) {
            if (!empty($map['DomainIdList'])) {
                $model->domainIdList = $map['DomainIdList'];
            }
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DomainNameList'])) {
            if (!empty($map['DomainNameList'])) {
                $model->domainNameList = $map['DomainNameList'];
            }
        }
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RoutePredicates'])) {
            $model->routePredicates = routePredicates::fromMap($map['RoutePredicates']);
        }

        return $model;
    }
}
