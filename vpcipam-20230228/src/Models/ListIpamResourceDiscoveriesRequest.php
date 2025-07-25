<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models;

use AlibabaCloud\SDK\VpcIpam\V20230228\Models\ListIpamResourceDiscoveriesRequest\tags;
use AlibabaCloud\Tea\Model;

class ListIpamResourceDiscoveriesRequest extends Model
{
    /**
     * @description The IDs of resource discovery instances. Valid values of N: 1 to 100. A maximum of 100 resource discoveries can be queried at a time.
     *
     * @var string[]
     */
    public $ipamResourceDiscoveryIds;

    /**
     * @description The name of the resource discovery.
     *
     * The name must be 1 to 128 characters in length and cannot start with http:// or https://.
     *
     * @example test
     *
     * @var string
     */
    public $ipamResourceDiscoveryName;

    /**
     * @description Whether it is a shared resource discovery.
     *
     * @example true
     *
     * @var bool
     */
    public $isShared;

    /**
     * @description The maximum number of entries on each page. Valid values: 1 to 100. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. Valid values:
     *
     *   If **NextToken** is empty, there is no next page.
     *   If a value of **NextToken** is returned, it indicates the token that is used for the next query.
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
     * @description The ID of the region where you want to query resource discovery. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/36063.html) operation to query the region list.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group that resource discovery belongs.
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
     * @description The tag.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The type of resource discovery.
     *
     * > Supported types:
     * > - system: default resource discovery created by the system.
     * > - custom: custom resource discovery created by users.
     *
     * @example system
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'ipamResourceDiscoveryIds' => 'IpamResourceDiscoveryIds',
        'ipamResourceDiscoveryName' => 'IpamResourceDiscoveryName',
        'isShared' => 'IsShared',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'tags' => 'Tags',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipamResourceDiscoveryIds) {
            $res['IpamResourceDiscoveryIds'] = $this->ipamResourceDiscoveryIds;
        }
        if (null !== $this->ipamResourceDiscoveryName) {
            $res['IpamResourceDiscoveryName'] = $this->ipamResourceDiscoveryName;
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
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIpamResourceDiscoveriesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpamResourceDiscoveryIds'])) {
            if (!empty($map['IpamResourceDiscoveryIds'])) {
                $model->ipamResourceDiscoveryIds = $map['IpamResourceDiscoveryIds'];
            }
        }
        if (isset($map['IpamResourceDiscoveryName'])) {
            $model->ipamResourceDiscoveryName = $map['IpamResourceDiscoveryName'];
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
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
