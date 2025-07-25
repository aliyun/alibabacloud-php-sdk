<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models;

use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamPoolsRequest\tags;
use AlibabaCloud\Tea\Model;

class ListIpamPoolsRequest extends Model
{
    /**
     * @var string
     */
    public $ipVersion;

    /**
     * @description The IDs of IPAM pools. Valid values of N: 1 to 100. A maximum of 100 IPAM pools can be queried at a time.
     *
     * @var string[]
     */
    public $ipamPoolIds;

    /**
     * @description The name of the IPAM pool. You can enter at most 20 names.
     *
     * It must be 1 to 128 characters in length and cannot start with `http://` or `https://`.
     *
     * @example test
     *
     * @var string
     */
    public $ipamPoolName;

    /**
     * @description The ID of the IPAM scope.
     *
     * @example ipam-scope-glfmcyldpm8lsy****
     *
     * @var string
     */
    public $ipamScopeId;

    /**
     * @var string
     */
    public $ipv6Isp;

    /**
     * @description Whether it is a shared pool.
     *
     * @example true
     *
     * @var bool
     */
    public $isShared;

    /**
     * @description The number of entries per page. Valid values: 1 to 100. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. Valid values:
     *
     *   If NextToken is empty, no next page exists.
     *   You must specify the token that is obtained from the previous query as the value of NextToken.
     *
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The effective region of the IPAM pool.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $poolRegionId;

    /**
     * @description The ID of the region where the IPAM instance is hosted. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/36063.html) operation to query the most recent region list.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the IPAM pool belongs.
     *
     * @example rg-aek2sermdd6****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The ID of the source IPAM pool.
     *
     * @example ipam-pool-lfnwi4jok1ss0g****
     *
     * @var string
     */
    public $sourceIpamPoolId;

    /**
     * @description The tag information.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'ipVersion' => 'IpVersion',
        'ipamPoolIds' => 'IpamPoolIds',
        'ipamPoolName' => 'IpamPoolName',
        'ipamScopeId' => 'IpamScopeId',
        'ipv6Isp' => 'Ipv6Isp',
        'isShared' => 'IsShared',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'poolRegionId' => 'PoolRegionId',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'sourceIpamPoolId' => 'SourceIpamPoolId',
        'tags' => 'Tags',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }
        if (null !== $this->ipamPoolIds) {
            $res['IpamPoolIds'] = $this->ipamPoolIds;
        }
        if (null !== $this->ipamPoolName) {
            $res['IpamPoolName'] = $this->ipamPoolName;
        }
        if (null !== $this->ipamScopeId) {
            $res['IpamScopeId'] = $this->ipamScopeId;
        }
        if (null !== $this->ipv6Isp) {
            $res['Ipv6Isp'] = $this->ipv6Isp;
        }
        if (null !== $this->isShared) {
            $res['IsShared'] = $this->isShared;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->poolRegionId) {
            $res['PoolRegionId'] = $this->poolRegionId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->sourceIpamPoolId) {
            $res['SourceIpamPoolId'] = $this->sourceIpamPoolId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIpamPoolsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['IpamPoolIds'])) {
            if (!empty($map['IpamPoolIds'])) {
                $model->ipamPoolIds = $map['IpamPoolIds'];
            }
        }
        if (isset($map['IpamPoolName'])) {
            $model->ipamPoolName = $map['IpamPoolName'];
        }
        if (isset($map['IpamScopeId'])) {
            $model->ipamScopeId = $map['IpamScopeId'];
        }
        if (isset($map['Ipv6Isp'])) {
            $model->ipv6Isp = $map['Ipv6Isp'];
        }
        if (isset($map['IsShared'])) {
            $model->isShared = $map['IsShared'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PoolRegionId'])) {
            $model->poolRegionId = $map['PoolRegionId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SourceIpamPoolId'])) {
            $model->sourceIpamPoolId = $map['SourceIpamPoolId'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
