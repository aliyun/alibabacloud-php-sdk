<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models;

use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetMultiAccountResourceConfigurationResponseBody\ipAddressAttributes;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetMultiAccountResourceConfigurationResponseBody\tags;
use AlibabaCloud\Tea\Model;

class GetMultiAccountResourceConfigurationResponseBody extends Model
{
    /**
     * @description The ID of the management account or member of the resource directory.
     *
     * @example 1619302****
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The configurations of the resource.
     *
     * @var mixed[]
     */
    public $configuration;

    /**
     * @description The time when the resource was created.
     *
     * @example 2023-02-14T03:12:11Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The time when the resource expires.
     *
     * @example 2023-09-18T07:04:21Z
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
     * > Whether this parameter is returned is determined by the Alibaba Cloud service to which the resource belongs.
     * @var string[]
     */
    public $ipAddresses;

    /**
     * @description The region ID of the resource.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the request.
     *
     * @example B2DCC08B-C12A-5705-879C-5A1450016156
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the resource group to which the resource belongs.
     *
     * @example rg-acfmzy6d****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the resource.
     *
     * @example m-eb3hji****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The name of the resource.
     *
     * @example test_resource
     *
     * @var string
     */
    public $resourceName;

    /**
     * @description The type of the resource.
     *
     * @example ACS::VPC::RouteTable
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The tags of the resource.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The zone ID of the resource.
     *
     * @example cn-shanghai-a
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'accountId'           => 'AccountId',
        'configuration'       => 'Configuration',
        'createTime'          => 'CreateTime',
        'expireTime'          => 'ExpireTime',
        'ipAddressAttributes' => 'IpAddressAttributes',
        'ipAddresses'         => 'IpAddresses',
        'regionId'            => 'RegionId',
        'requestId'           => 'RequestId',
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
        if (null !== $this->configuration) {
            $res['Configuration'] = $this->configuration;
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
     * @return GetMultiAccountResourceConfigurationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['Configuration'])) {
            $model->configuration = $map['Configuration'];
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
