<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewayLoadBalancersResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewayLoadBalancersResponseBody\data\items\loadBalancerZoneMappings;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewayLoadBalancersResponseBody\data\items\ports;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewayLoadBalancersResponseBody\data\items\virtualServerGroupList;

class items extends Model
{
    /**
     * @var bool
     */
    public $defaultGatewayIngress;

    /**
     * @var bool
     */
    public $editEnable;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $loadBalancerAddress;

    /**
     * @var string
     */
    public $loadBalancerAddressIpVersion;

    /**
     * @var string
     */
    public $loadBalancerAddressType;

    /**
     * @var string
     */
    public $loadBalancerAvailableStatus;

    /**
     * @var string
     */
    public $loadBalancerId;

    /**
     * @var string
     */
    public $loadBalancerMode;

    /**
     * @var string
     */
    public $loadBalancerName;

    /**
     * @var string
     */
    public $loadBalancerSpec;

    /**
     * @var string
     */
    public $loadBalancerStatus;

    /**
     * @var string
     */
    public $loadBalancerType;

    /**
     * @var loadBalancerZoneMappings[]
     */
    public $loadBalancerZoneMappings;

    /**
     * @var ports[]
     */
    public $ports;

    /**
     * @var int
     */
    public $serviceWeight;

    /**
     * @var string
     */
    public $vServerGroupMetaInfo;

    /**
     * @var virtualServerGroupList[]
     */
    public $virtualServerGroupList;
    protected $_name = [
        'defaultGatewayIngress' => 'defaultGatewayIngress',
        'editEnable' => 'editEnable',
        'gatewayId' => 'gatewayId',
        'loadBalancerAddress' => 'loadBalancerAddress',
        'loadBalancerAddressIpVersion' => 'loadBalancerAddressIpVersion',
        'loadBalancerAddressType' => 'loadBalancerAddressType',
        'loadBalancerAvailableStatus' => 'loadBalancerAvailableStatus',
        'loadBalancerId' => 'loadBalancerId',
        'loadBalancerMode' => 'loadBalancerMode',
        'loadBalancerName' => 'loadBalancerName',
        'loadBalancerSpec' => 'loadBalancerSpec',
        'loadBalancerStatus' => 'loadBalancerStatus',
        'loadBalancerType' => 'loadBalancerType',
        'loadBalancerZoneMappings' => 'loadBalancerZoneMappings',
        'ports' => 'ports',
        'serviceWeight' => 'serviceWeight',
        'vServerGroupMetaInfo' => 'vServerGroupMetaInfo',
        'virtualServerGroupList' => 'virtualServerGroupList',
    ];

    public function validate()
    {
        if (\is_array($this->loadBalancerZoneMappings)) {
            Model::validateArray($this->loadBalancerZoneMappings);
        }
        if (\is_array($this->ports)) {
            Model::validateArray($this->ports);
        }
        if (\is_array($this->virtualServerGroupList)) {
            Model::validateArray($this->virtualServerGroupList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultGatewayIngress) {
            $res['defaultGatewayIngress'] = $this->defaultGatewayIngress;
        }

        if (null !== $this->editEnable) {
            $res['editEnable'] = $this->editEnable;
        }

        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }

        if (null !== $this->loadBalancerAddress) {
            $res['loadBalancerAddress'] = $this->loadBalancerAddress;
        }

        if (null !== $this->loadBalancerAddressIpVersion) {
            $res['loadBalancerAddressIpVersion'] = $this->loadBalancerAddressIpVersion;
        }

        if (null !== $this->loadBalancerAddressType) {
            $res['loadBalancerAddressType'] = $this->loadBalancerAddressType;
        }

        if (null !== $this->loadBalancerAvailableStatus) {
            $res['loadBalancerAvailableStatus'] = $this->loadBalancerAvailableStatus;
        }

        if (null !== $this->loadBalancerId) {
            $res['loadBalancerId'] = $this->loadBalancerId;
        }

        if (null !== $this->loadBalancerMode) {
            $res['loadBalancerMode'] = $this->loadBalancerMode;
        }

        if (null !== $this->loadBalancerName) {
            $res['loadBalancerName'] = $this->loadBalancerName;
        }

        if (null !== $this->loadBalancerSpec) {
            $res['loadBalancerSpec'] = $this->loadBalancerSpec;
        }

        if (null !== $this->loadBalancerStatus) {
            $res['loadBalancerStatus'] = $this->loadBalancerStatus;
        }

        if (null !== $this->loadBalancerType) {
            $res['loadBalancerType'] = $this->loadBalancerType;
        }

        if (null !== $this->loadBalancerZoneMappings) {
            if (\is_array($this->loadBalancerZoneMappings)) {
                $res['loadBalancerZoneMappings'] = [];
                $n1 = 0;
                foreach ($this->loadBalancerZoneMappings as $item1) {
                    $res['loadBalancerZoneMappings'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ports) {
            if (\is_array($this->ports)) {
                $res['ports'] = [];
                $n1 = 0;
                foreach ($this->ports as $item1) {
                    $res['ports'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->serviceWeight) {
            $res['serviceWeight'] = $this->serviceWeight;
        }

        if (null !== $this->vServerGroupMetaInfo) {
            $res['vServerGroupMetaInfo'] = $this->vServerGroupMetaInfo;
        }

        if (null !== $this->virtualServerGroupList) {
            if (\is_array($this->virtualServerGroupList)) {
                $res['virtualServerGroupList'] = [];
                $n1 = 0;
                foreach ($this->virtualServerGroupList as $item1) {
                    $res['virtualServerGroupList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['defaultGatewayIngress'])) {
            $model->defaultGatewayIngress = $map['defaultGatewayIngress'];
        }

        if (isset($map['editEnable'])) {
            $model->editEnable = $map['editEnable'];
        }

        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        if (isset($map['loadBalancerAddress'])) {
            $model->loadBalancerAddress = $map['loadBalancerAddress'];
        }

        if (isset($map['loadBalancerAddressIpVersion'])) {
            $model->loadBalancerAddressIpVersion = $map['loadBalancerAddressIpVersion'];
        }

        if (isset($map['loadBalancerAddressType'])) {
            $model->loadBalancerAddressType = $map['loadBalancerAddressType'];
        }

        if (isset($map['loadBalancerAvailableStatus'])) {
            $model->loadBalancerAvailableStatus = $map['loadBalancerAvailableStatus'];
        }

        if (isset($map['loadBalancerId'])) {
            $model->loadBalancerId = $map['loadBalancerId'];
        }

        if (isset($map['loadBalancerMode'])) {
            $model->loadBalancerMode = $map['loadBalancerMode'];
        }

        if (isset($map['loadBalancerName'])) {
            $model->loadBalancerName = $map['loadBalancerName'];
        }

        if (isset($map['loadBalancerSpec'])) {
            $model->loadBalancerSpec = $map['loadBalancerSpec'];
        }

        if (isset($map['loadBalancerStatus'])) {
            $model->loadBalancerStatus = $map['loadBalancerStatus'];
        }

        if (isset($map['loadBalancerType'])) {
            $model->loadBalancerType = $map['loadBalancerType'];
        }

        if (isset($map['loadBalancerZoneMappings'])) {
            if (!empty($map['loadBalancerZoneMappings'])) {
                $model->loadBalancerZoneMappings = [];
                $n1 = 0;
                foreach ($map['loadBalancerZoneMappings'] as $item1) {
                    $model->loadBalancerZoneMappings[$n1] = loadBalancerZoneMappings::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ports'])) {
            if (!empty($map['ports'])) {
                $model->ports = [];
                $n1 = 0;
                foreach ($map['ports'] as $item1) {
                    $model->ports[$n1] = ports::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['serviceWeight'])) {
            $model->serviceWeight = $map['serviceWeight'];
        }

        if (isset($map['vServerGroupMetaInfo'])) {
            $model->vServerGroupMetaInfo = $map['vServerGroupMetaInfo'];
        }

        if (isset($map['virtualServerGroupList'])) {
            if (!empty($map['virtualServerGroupList'])) {
                $model->virtualServerGroupList = [];
                $n1 = 0;
                foreach ($map['virtualServerGroupList'] as $item1) {
                    $model->virtualServerGroupList[$n1] = virtualServerGroupList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
