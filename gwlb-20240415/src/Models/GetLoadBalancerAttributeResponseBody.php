<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gwlb\V20240415\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\GetLoadBalancerAttributeResponseBody\tags;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\GetLoadBalancerAttributeResponseBody\zoneMappings;

class GetLoadBalancerAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $addressIpVersion;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $loadBalancerBusinessStatus;

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
    public $loadBalancerStatus;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $trafficMode;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var zoneMappings[]
     */
    public $zoneMappings;
    protected $_name = [
        'addressIpVersion' => 'AddressIpVersion',
        'createTime' => 'CreateTime',
        'loadBalancerBusinessStatus' => 'LoadBalancerBusinessStatus',
        'loadBalancerId' => 'LoadBalancerId',
        'loadBalancerName' => 'LoadBalancerName',
        'loadBalancerStatus' => 'LoadBalancerStatus',
        'requestId' => 'RequestId',
        'resourceGroupId' => 'ResourceGroupId',
        'tags' => 'Tags',
        'trafficMode' => 'TrafficMode',
        'vpcId' => 'VpcId',
        'zoneMappings' => 'ZoneMappings',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (\is_array($this->zoneMappings)) {
            Model::validateArray($this->zoneMappings);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addressIpVersion) {
            $res['AddressIpVersion'] = $this->addressIpVersion;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->loadBalancerBusinessStatus) {
            $res['LoadBalancerBusinessStatus'] = $this->loadBalancerBusinessStatus;
        }

        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }

        if (null !== $this->loadBalancerName) {
            $res['LoadBalancerName'] = $this->loadBalancerName;
        }

        if (null !== $this->loadBalancerStatus) {
            $res['LoadBalancerStatus'] = $this->loadBalancerStatus;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->trafficMode) {
            $res['TrafficMode'] = $this->trafficMode;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->zoneMappings) {
            if (\is_array($this->zoneMappings)) {
                $res['ZoneMappings'] = [];
                $n1 = 0;
                foreach ($this->zoneMappings as $item1) {
                    $res['ZoneMappings'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AddressIpVersion'])) {
            $model->addressIpVersion = $map['AddressIpVersion'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['LoadBalancerBusinessStatus'])) {
            $model->loadBalancerBusinessStatus = $map['LoadBalancerBusinessStatus'];
        }

        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }

        if (isset($map['LoadBalancerName'])) {
            $model->loadBalancerName = $map['LoadBalancerName'];
        }

        if (isset($map['LoadBalancerStatus'])) {
            $model->loadBalancerStatus = $map['LoadBalancerStatus'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TrafficMode'])) {
            $model->trafficMode = $map['TrafficMode'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['ZoneMappings'])) {
            if (!empty($map['ZoneMappings'])) {
                $model->zoneMappings = [];
                $n1 = 0;
                foreach ($map['ZoneMappings'] as $item1) {
                    $model->zoneMappings[$n1] = zoneMappings::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
