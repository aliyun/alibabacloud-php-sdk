<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayRouteOnAuthResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListGatewayRouteOnAuthResponseBody\data\routePredicates;

class data extends Model
{
    /**
     * @var int
     */
    public $domainId;

    /**
     * @var int[]
     */
    public $domainIdList;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string[]
     */
    public $domainNameList;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var routePredicates
     */
    public $routePredicates;
    protected $_name = [
        'domainId' => 'DomainId',
        'domainIdList' => 'DomainIdList',
        'domainName' => 'DomainName',
        'domainNameList' => 'DomainNameList',
        'gatewayId' => 'GatewayId',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'id' => 'Id',
        'name' => 'Name',
        'routePredicates' => 'RoutePredicates',
    ];

    public function validate()
    {
        if (\is_array($this->domainIdList)) {
            Model::validateArray($this->domainIdList);
        }
        if (\is_array($this->domainNameList)) {
            Model::validateArray($this->domainNameList);
        }
        if (null !== $this->routePredicates) {
            $this->routePredicates->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainId) {
            $res['DomainId'] = $this->domainId;
        }

        if (null !== $this->domainIdList) {
            if (\is_array($this->domainIdList)) {
                $res['DomainIdList'] = [];
                $n1 = 0;
                foreach ($this->domainIdList as $item1) {
                    $res['DomainIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->domainNameList) {
            if (\is_array($this->domainNameList)) {
                $res['DomainNameList'] = [];
                $n1 = 0;
                foreach ($this->domainNameList as $item1) {
                    $res['DomainNameList'][$n1++] = $item1;
                }
            }
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
            $res['RoutePredicates'] = null !== $this->routePredicates ? $this->routePredicates->toArray($noStream) : $this->routePredicates;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainId'])) {
            $model->domainId = $map['DomainId'];
        }

        if (isset($map['DomainIdList'])) {
            if (!empty($map['DomainIdList'])) {
                $model->domainIdList = [];
                $n1 = 0;
                foreach ($map['DomainIdList'] as $item1) {
                    $model->domainIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['DomainNameList'])) {
            if (!empty($map['DomainNameList'])) {
                $model->domainNameList = [];
                $n1 = 0;
                foreach ($map['DomainNameList'] as $item1) {
                    $model->domainNameList[$n1++] = $item1;
                }
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
