<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\UpdateGatewayLoadBalancerResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateGatewayLoadBalancerResponseBody\data\virtualServiceList;

class data extends Model
{
    /**
     * @var bool
     */
    public $editEnable;

    /**
     * @var string
     */
    public $loadBalancerAddress;

    /**
     * @var string
     */
    public $loadBalancerId;

    /**
     * @var string
     */
    public $loadBalancerName;

    /**
     * @var string
     */
    public $loadBalancerType;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var int[]
     */
    public $ports;

    /**
     * @var int
     */
    public $serviceWeight;

    /**
     * @var string
     */
    public $statusDescription;

    /**
     * @var virtualServiceList[]
     */
    public $virtualServiceList;
    protected $_name = [
        'editEnable' => 'editEnable',
        'loadBalancerAddress' => 'loadBalancerAddress',
        'loadBalancerId' => 'loadBalancerId',
        'loadBalancerName' => 'loadBalancerName',
        'loadBalancerType' => 'loadBalancerType',
        'networkType' => 'networkType',
        'ports' => 'ports',
        'serviceWeight' => 'serviceWeight',
        'statusDescription' => 'statusDescription',
        'virtualServiceList' => 'virtualServiceList',
    ];

    public function validate()
    {
        if (\is_array($this->ports)) {
            Model::validateArray($this->ports);
        }
        if (\is_array($this->virtualServiceList)) {
            Model::validateArray($this->virtualServiceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->editEnable) {
            $res['editEnable'] = $this->editEnable;
        }

        if (null !== $this->loadBalancerAddress) {
            $res['loadBalancerAddress'] = $this->loadBalancerAddress;
        }

        if (null !== $this->loadBalancerId) {
            $res['loadBalancerId'] = $this->loadBalancerId;
        }

        if (null !== $this->loadBalancerName) {
            $res['loadBalancerName'] = $this->loadBalancerName;
        }

        if (null !== $this->loadBalancerType) {
            $res['loadBalancerType'] = $this->loadBalancerType;
        }

        if (null !== $this->networkType) {
            $res['networkType'] = $this->networkType;
        }

        if (null !== $this->ports) {
            if (\is_array($this->ports)) {
                $res['ports'] = [];
                $n1 = 0;
                foreach ($this->ports as $item1) {
                    $res['ports'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->serviceWeight) {
            $res['serviceWeight'] = $this->serviceWeight;
        }

        if (null !== $this->statusDescription) {
            $res['statusDescription'] = $this->statusDescription;
        }

        if (null !== $this->virtualServiceList) {
            if (\is_array($this->virtualServiceList)) {
                $res['virtualServiceList'] = [];
                $n1 = 0;
                foreach ($this->virtualServiceList as $item1) {
                    $res['virtualServiceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['editEnable'])) {
            $model->editEnable = $map['editEnable'];
        }

        if (isset($map['loadBalancerAddress'])) {
            $model->loadBalancerAddress = $map['loadBalancerAddress'];
        }

        if (isset($map['loadBalancerId'])) {
            $model->loadBalancerId = $map['loadBalancerId'];
        }

        if (isset($map['loadBalancerName'])) {
            $model->loadBalancerName = $map['loadBalancerName'];
        }

        if (isset($map['loadBalancerType'])) {
            $model->loadBalancerType = $map['loadBalancerType'];
        }

        if (isset($map['networkType'])) {
            $model->networkType = $map['networkType'];
        }

        if (isset($map['ports'])) {
            if (!empty($map['ports'])) {
                $model->ports = [];
                $n1 = 0;
                foreach ($map['ports'] as $item1) {
                    $model->ports[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['serviceWeight'])) {
            $model->serviceWeight = $map['serviceWeight'];
        }

        if (isset($map['statusDescription'])) {
            $model->statusDescription = $map['statusDescription'];
        }

        if (isset($map['virtualServiceList'])) {
            if (!empty($map['virtualServiceList'])) {
                $model->virtualServiceList = [];
                $n1 = 0;
                foreach ($map['virtualServiceList'] as $item1) {
                    $model->virtualServiceList[$n1] = virtualServiceList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
