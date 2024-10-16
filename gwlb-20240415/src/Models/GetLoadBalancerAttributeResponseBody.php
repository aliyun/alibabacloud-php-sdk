<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gwlb\V20240415\Models;

use AlibabaCloud\SDK\Gwlb\V20240415\Models\GetLoadBalancerAttributeResponseBody\tags;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\GetLoadBalancerAttributeResponseBody\zoneMappings;
use AlibabaCloud\Tea\Model;

class GetLoadBalancerAttributeResponseBody extends Model
{
    /**
     * @example IPv4
     *
     * @var string
     */
    public $addressIpVersion;

    /**
     * @example 2024-07-08T10:12:58Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example Normal
     *
     * @var string
     */
    public $loadBalancerBusinessStatus;

    /**
     * @example gwlb-9njtjmqt7zfcqm****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @example gwlb
     *
     * @var string
     */
    public $loadBalancerName;

    /**
     * @example Active
     *
     * @var string
     */
    public $loadBalancerStatus;

    /**
     * @example B6DC5DDC-9560-59BF-80FA-ED1E5CB417DF
     *
     * @var string
     */
    public $requestId;

    /**
     * @example rg-acfmx7pmxcy****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @example vpc-k1aajsbwbaq4todet****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @var zoneMappings[]
     */
    public $zoneMappings;
    protected $_name = [
        'addressIpVersion'           => 'AddressIpVersion',
        'createTime'                 => 'CreateTime',
        'loadBalancerBusinessStatus' => 'LoadBalancerBusinessStatus',
        'loadBalancerId'             => 'LoadBalancerId',
        'loadBalancerName'           => 'LoadBalancerName',
        'loadBalancerStatus'         => 'LoadBalancerStatus',
        'requestId'                  => 'RequestId',
        'resourceGroupId'            => 'ResourceGroupId',
        'tags'                       => 'Tags',
        'vpcId'                      => 'VpcId',
        'zoneMappings'               => 'ZoneMappings',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneMappings) {
            $res['ZoneMappings'] = [];
            if (null !== $this->zoneMappings && \is_array($this->zoneMappings)) {
                $n = 0;
                foreach ($this->zoneMappings as $item) {
                    $res['ZoneMappings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLoadBalancerAttributeResponseBody
     */
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
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ZoneMappings'])) {
            if (!empty($map['ZoneMappings'])) {
                $model->zoneMappings = [];
                $n                   = 0;
                foreach ($map['ZoneMappings'] as $item) {
                    $model->zoneMappings[$n++] = null !== $item ? zoneMappings::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
