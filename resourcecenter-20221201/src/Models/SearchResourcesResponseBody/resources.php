<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models\SearchResourcesResponseBody;

use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\SearchResourcesResponseBody\resources\ipAddressAttributes;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\SearchResourcesResponseBody\resources\tags;
use AlibabaCloud\Tea\Model;

class resources extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example 151266687691****
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The time when the resource was created.
     *
     * >  Whether this parameter is returned is determined by the Alibaba Cloud service to which the resource belongs.
     * @example 2021-06-30T09:20:08Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The time when the resource expires.
     *
     * @example 2021-07-30T09:20:08Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The attributes of the IP address.
     *
     * @var ipAddressAttributes[]
     */
    public $ipAddressAttributes;

    /**
     * @description The IP addresses.
     *
     * >  Whether this parameter is returned is determined by the Alibaba Cloud service to which the resource belongs.
     * @var string[]
     */
    public $ipAddresses;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource group ID.
     *
     * @example rg-acfmzawhxxc****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The resource ID.
     *
     * @example vtb-bp11lbh452fr8940s****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The resource name.
     *
     * @example group1
     *
     * @var string
     */
    public $resourceName;

    /**
     * @description The resource type.
     *
     * @example ACS::VPC::RouteTable
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The zone ID.
     *
     * >  Whether this parameter is returned is determined by the Alibaba Cloud service to which the resource belongs.
     * @example cn-hangzhou-k
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'accountId'           => 'AccountId',
        'createTime'          => 'CreateTime',
        'expireTime'          => 'ExpireTime',
        'ipAddressAttributes' => 'IpAddressAttributes',
        'ipAddresses'         => 'IpAddresses',
        'regionId'            => 'RegionId',
        'resourceGroupId'     => 'ResourceGroupId',
        'resourceId'          => 'ResourceId',
        'resourceName'        => 'ResourceName',
        'resourceType'        => 'ResourceType',
        'tags'                => 'Tags',
        'zoneId'              => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->ipAddressAttributes) {
            $res['IpAddressAttributes'] = [];
            if (null !== $this->ipAddressAttributes && \is_array($this->ipAddressAttributes)) {
                $n = 0;
                foreach ($this->ipAddressAttributes as $item) {
                    $res['IpAddressAttributes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ipAddresses) {
            $res['IpAddresses'] = $this->ipAddresses;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
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
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['IpAddressAttributes'])) {
            if (!empty($map['IpAddressAttributes'])) {
                $model->ipAddressAttributes = [];
                $n                          = 0;
                foreach ($map['IpAddressAttributes'] as $item) {
                    $model->ipAddressAttributes[$n++] = null !== $item ? ipAddressAttributes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IpAddresses'])) {
            if (!empty($map['IpAddresses'])) {
                $model->ipAddresses = $map['IpAddresses'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
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
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
