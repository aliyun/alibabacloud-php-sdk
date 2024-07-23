<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyPrefixListRequest\addEntry;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyPrefixListRequest\removeEntry;
use AlibabaCloud\Tea\Model;

class ModifyPrefixListRequest extends Model
{
    /**
     * @description The entries to be added to the prefix list.
     *
     * @var addEntry[]
     */
    public $addEntry;

    /**
     * @description The description of the prefix list. The description must be 2 to 256 characters in length and cannot start with `http://` or `https://`.
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
     * @description The ID of the prefix list.
     *
     * This parameter is required.
     * @example pl-x1j1k5ykzqlixdcy****
     *
     * @var string
     */
    public $prefixListId;

    /**
     * @description The name of the prefix list. The name must be 2 to 128 characters in length. It must start with a letter and cannot start with `http://`, `https://`, `com.aliyun`, or `com.alibabacloud`. The name can contain letters, digits, colons (:), underscores (_), periods (.), and hyphens (-).
     *
     * @example PrefixListNameSample
     *
     * @var string
     */
    public $prefixListName;

    /**
     * @description The region ID of the prefix list. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/25609.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-chengdu
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The entries to be deleted from the prefix list.
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
        'addEntry'             => 'AddEntry',
        'description'          => 'Description',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'prefixListId'         => 'PrefixListId',
        'prefixListName'       => 'PrefixListName',
        'regionId'             => 'RegionId',
        'removeEntry'          => 'RemoveEntry',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->prefixListId) {
            $res['PrefixListId'] = $this->prefixListId;
        }
        if (null !== $this->prefixListName) {
            $res['PrefixListName'] = $this->prefixListName;
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
     * @return ModifyPrefixListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddEntry'])) {
            if (!empty($map['AddEntry'])) {
                $model->addEntry = [];
                $n               = 0;
                foreach ($map['AddEntry'] as $item) {
                    $model->addEntry[$n++] = null !== $item ? addEntry::fromMap($item) : $item;
                }
            }
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
        if (isset($map['PrefixListId'])) {
            $model->prefixListId = $map['PrefixListId'];
        }
        if (isset($map['PrefixListName'])) {
            $model->prefixListName = $map['PrefixListName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RemoveEntry'])) {
            if (!empty($map['RemoveEntry'])) {
                $model->removeEntry = [];
                $n                  = 0;
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
