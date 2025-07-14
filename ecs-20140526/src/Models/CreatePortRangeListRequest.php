<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\CreatePortRangeListRequest\entry;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreatePortRangeListRequest\tag;
use AlibabaCloud\Tea\Model;

class CreatePortRangeListRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The **token** can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure idempotence](https://help.aliyun.com/document_detail/25693.html).
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the port list. The description must be 2 to 256 characters in length and cannot start with http:// or https://.
     *
     * @example Description information of PortRangeList
     *
     * @var string
     */
    public $description;

    /**
     * @description The port list entries.
     *
     * @var entry[]
     */
    public $entry;

    /**
     * @description The maximum number of entries in the port list. The value cannot be changed after you create the port list. Valid values: 1 to 2000.
     *
     * >  When you reference a port list in a resource, such as a security group, the maximum number of entries (instead of the actual number of entries) in the port list counts against the rule quota for the resource. Set a proper value for MaxEntries.
     *
     * This parameter is required.
     *
     * @example 10
     *
     * @var int
     */
    public $maxEntries;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The name of the port list. The name must be 2 to 128 characters in length. It must start with a letter and cannot start with http://, https://, com.aliyun, or com.alibabacloud. The name can contain letters, digits, colons (:), underscores (_), periods (.), and hyphens (-).
     *
     * This parameter is required.
     *
     * @example PortRangeListNameSample
     *
     * @var string
     */
    public $portRangeListName;

    /**
     * @description The region ID of the port list. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/25609.html) operation to query the most recent region list.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the port list belongs.
     *
     * @example rg-aek3b6jzp66****
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
     * @description The tags to add to the port list. You can add 0 to 20 tags to the port list.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'entry' => 'Entry',
        'maxEntries' => 'MaxEntries',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'portRangeListName' => 'PortRangeListName',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'tag' => 'Tag',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->entry) {
            $res['Entry'] = [];
            if (null !== $this->entry && \is_array($this->entry)) {
                $n = 0;
                foreach ($this->entry as $item) {
                    $res['Entry'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxEntries) {
            $res['MaxEntries'] = $this->maxEntries;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->portRangeListName) {
            $res['PortRangeListName'] = $this->portRangeListName;
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
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePortRangeListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Entry'])) {
            if (!empty($map['Entry'])) {
                $model->entry = [];
                $n = 0;
                foreach ($map['Entry'] as $item) {
                    $model->entry[$n++] = null !== $item ? entry::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxEntries'])) {
            $model->maxEntries = $map['MaxEntries'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PortRangeListName'])) {
            $model->portRangeListName = $map['PortRangeListName'];
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
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
