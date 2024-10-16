<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gwlb\V20240415\Models;

use AlibabaCloud\SDK\Gwlb\V20240415\Models\ListLoadBalancersRequest\tag;
use AlibabaCloud\Tea\Model;

class ListLoadBalancersRequest extends Model
{
    /**
     * @example IPv4
     *
     * @var string
     */
    public $addressIpVersion;

    /**
     * @example Normal
     *
     * @var string
     */
    public $loadBalancerBusinessStatus;

    /**
     * @var string[]
     */
    public $loadBalancerIds;

    /**
     * @var string[]
     */
    public $loadBalancerNames;

    /**
     * @example Active
     *
     * @var string
     */
    public $loadBalancerStatus;

    /**
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example WyJyb290IiwibiIsIm4iLDEsMCwxNjg1MDY1NTgyNzYwLCI2NDcwMGY2ZTc2Zjc0MWFiZGEyZjQyNzc4ZDk2MmJkOTk3ZGZmM2Nm****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example rg-aek2htf5qsyrn****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example 1
     *
     * @var int
     */
    public $skip;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string[]
     */
    public $vpcIds;

    /**
     * @var string[]
     */
    public $zoneIds;
    protected $_name = [
        'addressIpVersion'           => 'AddressIpVersion',
        'loadBalancerBusinessStatus' => 'LoadBalancerBusinessStatus',
        'loadBalancerIds'            => 'LoadBalancerIds',
        'loadBalancerNames'          => 'LoadBalancerNames',
        'loadBalancerStatus'         => 'LoadBalancerStatus',
        'maxResults'                 => 'MaxResults',
        'nextToken'                  => 'NextToken',
        'resourceGroupId'            => 'ResourceGroupId',
        'skip'                       => 'Skip',
        'tag'                        => 'Tag',
        'vpcIds'                     => 'VpcIds',
        'zoneIds'                    => 'ZoneIds',
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
        if (null !== $this->loadBalancerBusinessStatus) {
            $res['LoadBalancerBusinessStatus'] = $this->loadBalancerBusinessStatus;
        }
        if (null !== $this->loadBalancerIds) {
            $res['LoadBalancerIds'] = $this->loadBalancerIds;
        }
        if (null !== $this->loadBalancerNames) {
            $res['LoadBalancerNames'] = $this->loadBalancerNames;
        }
        if (null !== $this->loadBalancerStatus) {
            $res['LoadBalancerStatus'] = $this->loadBalancerStatus;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->skip) {
            $res['Skip'] = $this->skip;
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
        if (null !== $this->vpcIds) {
            $res['VpcIds'] = $this->vpcIds;
        }
        if (null !== $this->zoneIds) {
            $res['ZoneIds'] = $this->zoneIds;
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
        if (isset($map['AddressIpVersion'])) {
            $model->addressIpVersion = $map['AddressIpVersion'];
        }
        if (isset($map['LoadBalancerBusinessStatus'])) {
            $model->loadBalancerBusinessStatus = $map['LoadBalancerBusinessStatus'];
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
        if (isset($map['LoadBalancerStatus'])) {
            $model->loadBalancerStatus = $map['LoadBalancerStatus'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Skip'])) {
            $model->skip = $map['Skip'];
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
        if (isset($map['VpcIds'])) {
            if (!empty($map['VpcIds'])) {
                $model->vpcIds = $map['VpcIds'];
            }
        }
        if (isset($map['ZoneIds'])) {
            if (!empty($map['ZoneIds'])) {
                $model->zoneIds = $map['ZoneIds'];
            }
        }

        return $model;
    }
}
