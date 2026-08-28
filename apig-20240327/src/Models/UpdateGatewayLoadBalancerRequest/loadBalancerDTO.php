<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\UpdateGatewayLoadBalancerRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateGatewayLoadBalancerRequest\loadBalancerDTO\virtualServiceList;

class loadBalancerDTO extends Model
{
    /**
     * @var string
     */
    public $loadBalancerId;

    /**
     * @var string
     */
    public $loadBalancerType;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var int
     */
    public $serviceWeight;

    /**
     * @var virtualServiceList[]
     */
    public $virtualServiceList;
    protected $_name = [
        'loadBalancerId' => 'loadBalancerId',
        'loadBalancerType' => 'loadBalancerType',
        'networkType' => 'networkType',
        'serviceWeight' => 'serviceWeight',
        'virtualServiceList' => 'virtualServiceList',
    ];

    public function validate()
    {
        if (\is_array($this->virtualServiceList)) {
            Model::validateArray($this->virtualServiceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->loadBalancerId) {
            $res['loadBalancerId'] = $this->loadBalancerId;
        }

        if (null !== $this->loadBalancerType) {
            $res['loadBalancerType'] = $this->loadBalancerType;
        }

        if (null !== $this->networkType) {
            $res['networkType'] = $this->networkType;
        }

        if (null !== $this->serviceWeight) {
            $res['serviceWeight'] = $this->serviceWeight;
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
        if (isset($map['loadBalancerId'])) {
            $model->loadBalancerId = $map['loadBalancerId'];
        }

        if (isset($map['loadBalancerType'])) {
            $model->loadBalancerType = $map['loadBalancerType'];
        }

        if (isset($map['networkType'])) {
            $model->networkType = $map['networkType'];
        }

        if (isset($map['serviceWeight'])) {
            $model->serviceWeight = $map['serviceWeight'];
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
