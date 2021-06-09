<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\SDK\Alb\V20200616\Models\ListLoadBalancersRequest\tag;
use AlibabaCloud\Tea\Model;

class ListLoadBalancersRequest extends Model
{
    /**
     * @description 用来标记当前开始读取的位置，置空表示从头开始。
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 本次读取的最大数据记录数量，此参数为可选参数，取值1-100，用户传入为空时，默认为20。
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description 可用区ID
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description 实例状态
     *
     * @var string
     */
    public $loadBalancerStatus;

    /**
     * @description 实例业务状态
     *
     * @var string
     */
    public $loadBalancerBussinessStatus;

    /**
     * @description 实例ID列表，N最大支持20
     *
     * @var string[]
     */
    public $loadBalancerIds;

    /**
     * @description 实例Name列表，N最大支持10
     *
     * @var string[]
     */
    public $loadBalancerNames;

    /**
     * @description vpcId列表
     *
     * @var string[]
     */
    public $vpcIds;

    /**
     * @description tag列表
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description 负载均衡的地址类型
     *
     * @var string
     */
    public $addressType;

    /**
     * @description 付费类型
     *
     * @var string
     */
    public $payType;

    /**
     * @description 资源组ID
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'nextToken'                   => 'NextToken',
        'maxResults'                  => 'MaxResults',
        'zoneId'                      => 'ZoneId',
        'loadBalancerStatus'          => 'LoadBalancerStatus',
        'loadBalancerBussinessStatus' => 'LoadBalancerBussinessStatus',
        'loadBalancerIds'             => 'LoadBalancerIds',
        'loadBalancerNames'           => 'LoadBalancerNames',
        'vpcIds'                      => 'VpcIds',
        'tag'                         => 'Tag',
        'addressType'                 => 'AddressType',
        'payType'                     => 'PayType',
        'resourceGroupId'             => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->loadBalancerStatus) {
            $res['LoadBalancerStatus'] = $this->loadBalancerStatus;
        }
        if (null !== $this->loadBalancerBussinessStatus) {
            $res['LoadBalancerBussinessStatus'] = $this->loadBalancerBussinessStatus;
        }
        if (null !== $this->loadBalancerIds) {
            $res['LoadBalancerIds'] = $this->loadBalancerIds;
        }
        if (null !== $this->loadBalancerNames) {
            $res['LoadBalancerNames'] = $this->loadBalancerNames;
        }
        if (null !== $this->vpcIds) {
            $res['VpcIds'] = $this->vpcIds;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->addressType) {
            $res['AddressType'] = $this->addressType;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLoadBalancersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['LoadBalancerStatus'])) {
            $model->loadBalancerStatus = $map['LoadBalancerStatus'];
        }
        if (isset($map['LoadBalancerBussinessStatus'])) {
            $model->loadBalancerBussinessStatus = $map['LoadBalancerBussinessStatus'];
        }
        if (isset($map['LoadBalancerIds'])) {
            if (!empty($map['LoadBalancerIds'])) {
                $model->loadBalancerIds = $map['LoadBalancerIds'];
            }
        }
        if (isset($map['LoadBalancerNames'])) {
            if (!empty($map['LoadBalancerNames'])) {
                $model->loadBalancerNames = $map['LoadBalancerNames'];
            }
        }
        if (isset($map['VpcIds'])) {
            if (!empty($map['VpcIds'])) {
                $model->vpcIds = $map['VpcIds'];
            }
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AddressType'])) {
            $model->addressType = $map['AddressType'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
