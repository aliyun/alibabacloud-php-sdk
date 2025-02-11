<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListLoadBalancersRequest\tag;

class ListLoadBalancersRequest extends Model
{
    /**
     * @var string
     */
    public $addressIpVersion;
    /**
     * @var string
     */
    public $addressType;
    /**
     * @var string
     */
    public $DNSName;
    /**
     * @var string
     */
    public $ipv6AddressType;
    /**
     * @var string
     */
    public $loadBalancerBussinessStatus;
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
    public $payType;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var tag[]
     */
    public $tag;
    /**
     * @var string[]
     */
    public $vpcIds;
    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'addressIpVersion'            => 'AddressIpVersion',
        'addressType'                 => 'AddressType',
        'DNSName'                     => 'DNSName',
        'ipv6AddressType'             => 'Ipv6AddressType',
        'loadBalancerBussinessStatus' => 'LoadBalancerBussinessStatus',
        'loadBalancerIds'             => 'LoadBalancerIds',
        'loadBalancerNames'           => 'LoadBalancerNames',
        'loadBalancerStatus'          => 'LoadBalancerStatus',
        'maxResults'                  => 'MaxResults',
        'nextToken'                   => 'NextToken',
        'payType'                     => 'PayType',
        'resourceGroupId'             => 'ResourceGroupId',
        'tag'                         => 'Tag',
        'vpcIds'                      => 'VpcIds',
        'zoneId'                      => 'ZoneId',
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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addressIpVersion) {
            $res['AddressIpVersion'] = $this->addressIpVersion;
        }

        if (null !== $this->addressType) {
            $res['AddressType'] = $this->addressType;
        }

        if (null !== $this->DNSName) {
            $res['DNSName'] = $this->DNSName;
        }

        if (null !== $this->ipv6AddressType) {
            $res['Ipv6AddressType'] = $this->ipv6AddressType;
        }

        if (null !== $this->loadBalancerBussinessStatus) {
            $res['LoadBalancerBussinessStatus'] = $this->loadBalancerBussinessStatus;
        }

        if (null !== $this->loadBalancerIds) {
            if (\is_array($this->loadBalancerIds)) {
                $res['LoadBalancerIds'] = [];
                $n1                     = 0;
                foreach ($this->loadBalancerIds as $item1) {
                    $res['LoadBalancerIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->loadBalancerNames) {
            if (\is_array($this->loadBalancerNames)) {
                $res['LoadBalancerNames'] = [];
                $n1                       = 0;
                foreach ($this->loadBalancerNames as $item1) {
                    $res['LoadBalancerNames'][$n1++] = $item1;
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

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1         = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->vpcIds) {
            if (\is_array($this->vpcIds)) {
                $res['VpcIds'] = [];
                $n1            = 0;
                foreach ($this->vpcIds as $item1) {
                    $res['VpcIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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

        if (isset($map['AddressType'])) {
            $model->addressType = $map['AddressType'];
        }

        if (isset($map['DNSName'])) {
            $model->DNSName = $map['DNSName'];
        }

        if (isset($map['Ipv6AddressType'])) {
            $model->ipv6AddressType = $map['Ipv6AddressType'];
        }

        if (isset($map['LoadBalancerBussinessStatus'])) {
            $model->loadBalancerBussinessStatus = $map['LoadBalancerBussinessStatus'];
        }

        if (isset($map['LoadBalancerIds'])) {
            if (!empty($map['LoadBalancerIds'])) {
                $model->loadBalancerIds = [];
                $n1                     = 0;
                foreach ($map['LoadBalancerIds'] as $item1) {
                    $model->loadBalancerIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['LoadBalancerNames'])) {
            if (!empty($map['LoadBalancerNames'])) {
                $model->loadBalancerNames = [];
                $n1                       = 0;
                foreach ($map['LoadBalancerNames'] as $item1) {
                    $model->loadBalancerNames[$n1++] = $item1;
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

        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1         = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        if (isset($map['VpcIds'])) {
            if (!empty($map['VpcIds'])) {
                $model->vpcIds = [];
                $n1            = 0;
                foreach ($map['VpcIds'] as $item1) {
                    $model->vpcIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
