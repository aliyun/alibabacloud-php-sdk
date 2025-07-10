<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gwlb\V20240415\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\ListLoadBalancersRequest\tag;

class ListLoadBalancersRequest extends Model
{
    /**
     * @var string
     */
    public $addressIpVersion;

    /**
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
     * @var string
     */
    public $loadBalancerStatus;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var int
     */
    public $skip;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $trafficMode;

    /**
     * @var string[]
     */
    public $vpcIds;

    /**
     * @var string[]
     */
    public $zoneIds;
    protected $_name = [
        'addressIpVersion' => 'AddressIpVersion',
        'loadBalancerBusinessStatus' => 'LoadBalancerBusinessStatus',
        'loadBalancerIds' => 'LoadBalancerIds',
        'loadBalancerNames' => 'LoadBalancerNames',
        'loadBalancerStatus' => 'LoadBalancerStatus',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'resourceGroupId' => 'ResourceGroupId',
        'skip' => 'Skip',
        'tag' => 'Tag',
        'trafficMode' => 'TrafficMode',
        'vpcIds' => 'VpcIds',
        'zoneIds' => 'ZoneIds',
    ];

    public function validate()
    {
        if (\is_array($this->loadBalancerIds)) {
            Model::validateArray($this->loadBalancerIds);
        }
        if (\is_array($this->loadBalancerNames)) {
            Model::validateArray($this->loadBalancerNames);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        if (\is_array($this->vpcIds)) {
            Model::validateArray($this->vpcIds);
        }
        if (\is_array($this->zoneIds)) {
            Model::validateArray($this->zoneIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addressIpVersion) {
            $res['AddressIpVersion'] = $this->addressIpVersion;
        }

        if (null !== $this->loadBalancerBusinessStatus) {
            $res['LoadBalancerBusinessStatus'] = $this->loadBalancerBusinessStatus;
        }

        if (null !== $this->loadBalancerIds) {
            if (\is_array($this->loadBalancerIds)) {
                $res['LoadBalancerIds'] = [];
                $n1 = 0;
                foreach ($this->loadBalancerIds as $item1) {
                    $res['LoadBalancerIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->loadBalancerNames) {
            if (\is_array($this->loadBalancerNames)) {
                $res['LoadBalancerNames'] = [];
                $n1 = 0;
                foreach ($this->loadBalancerNames as $item1) {
                    $res['LoadBalancerNames'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->trafficMode) {
            $res['TrafficMode'] = $this->trafficMode;
        }

        if (null !== $this->vpcIds) {
            if (\is_array($this->vpcIds)) {
                $res['VpcIds'] = [];
                $n1 = 0;
                foreach ($this->vpcIds as $item1) {
                    $res['VpcIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->zoneIds) {
            if (\is_array($this->zoneIds)) {
                $res['ZoneIds'] = [];
                $n1 = 0;
                foreach ($this->zoneIds as $item1) {
                    $res['ZoneIds'][$n1] = $item1;
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

        if (isset($map['LoadBalancerBusinessStatus'])) {
            $model->loadBalancerBusinessStatus = $map['LoadBalancerBusinessStatus'];
        }

        if (isset($map['LoadBalancerIds'])) {
            if (!empty($map['LoadBalancerIds'])) {
                $model->loadBalancerIds = [];
                $n1 = 0;
                foreach ($map['LoadBalancerIds'] as $item1) {
                    $model->loadBalancerIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['LoadBalancerNames'])) {
            if (!empty($map['LoadBalancerNames'])) {
                $model->loadBalancerNames = [];
                $n1 = 0;
                foreach ($map['LoadBalancerNames'] as $item1) {
                    $model->loadBalancerNames[$n1] = $item1;
                    ++$n1;
                }
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
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TrafficMode'])) {
            $model->trafficMode = $map['TrafficMode'];
        }

        if (isset($map['VpcIds'])) {
            if (!empty($map['VpcIds'])) {
                $model->vpcIds = [];
                $n1 = 0;
                foreach ($map['VpcIds'] as $item1) {
                    $model->vpcIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ZoneIds'])) {
            if (!empty($map['ZoneIds'])) {
                $model->zoneIds = [];
                $n1 = 0;
                foreach ($map['ZoneIds'] as $item1) {
                    $model->zoneIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
