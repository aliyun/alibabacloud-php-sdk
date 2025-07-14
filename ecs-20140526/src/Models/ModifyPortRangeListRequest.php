<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyPortRangeListRequest\addEntry;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyPortRangeListRequest\removeEntry;
use AlibabaCloud\Tea\Model;

class ModifyPortRangeListRequest extends Model
{
    /**
     * @description The entries that you want to add or modify for the port list.
     *
     * @var addEntry[]
     */
    public $addEntry;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the port list. The description must be 2 to 256 characters in length and cannot start with http:// or https://.
     *
     * @example This is description.
     *
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the port list.
     *
     * This parameter is required.
     *
     * @example prl-2ze9743****
     *
     * @var string
     */
    public $portRangeListId;

    /**
     * @description The name of the port list. The name must be 2 to 128 characters in length. It must start with a letter and cannot start with http://, https://, com.aliyun, or com.alibabacloud. The name can contain letters, digits, colons (:), underscores (_), periods (.), and hyphens (-).
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
     * @description The entries that you want to remove from the port list.
     *
     * @var removeEntry[]
     */
    public $removeEntry;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'addEntry' => 'AddEntry',
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'portRangeListId' => 'PortRangeListId',
        'portRangeListName' => 'PortRangeListName',
        'regionId' => 'RegionId',
        'removeEntry' => 'RemoveEntry',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->addEntry) {
            $res['AddEntry'] = [];
            if (null !== $this->addEntry && \is_array($this->addEntry)) {
                $n = 0;
                foreach ($this->addEntry as $item) {
                    $res['AddEntry'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->portRangeListId) {
            $res['PortRangeListId'] = $this->portRangeListId;
        }
        if (null !== $this->portRangeListName) {
            $res['PortRangeListName'] = $this->portRangeListName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->removeEntry) {
            $res['RemoveEntry'] = [];
            if (null !== $this->removeEntry && \is_array($this->removeEntry)) {
                $n = 0;
                foreach ($this->removeEntry as $item) {
                    $res['RemoveEntry'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyPortRangeListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddEntry'])) {
            if (!empty($map['AddEntry'])) {
                $model->addEntry = [];
                $n = 0;
                foreach ($map['AddEntry'] as $item) {
                    $model->addEntry[$n++] = null !== $item ? addEntry::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PortRangeListId'])) {
            $model->portRangeListId = $map['PortRangeListId'];
        }
        if (isset($map['PortRangeListName'])) {
            $model->portRangeListName = $map['PortRangeListName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RemoveEntry'])) {
            if (!empty($map['RemoveEntry'])) {
                $model->removeEntry = [];
                $n = 0;
                foreach ($map['RemoveEntry'] as $item) {
                    $model->removeEntry[$n++] = null !== $item ? removeEntry::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
