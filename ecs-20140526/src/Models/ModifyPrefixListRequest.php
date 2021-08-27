<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyPrefixListRequest\addEntry;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyPrefixListRequest\removeEntry;
use AlibabaCloud\Tea\Model;

class ModifyPrefixListRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var addEntry[]
     */
    public $addEntry;

    /**
     * @var removeEntry[]
     */
    public $removeEntry;

    /**
     * @var string
     */
    public $prefixListId;

    /**
     * @var string
     */
    public $prefixListName;

    /**
     * @var string
     */
    public $description;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'ownerAccount'         => 'OwnerAccount',
        'regionId'             => 'RegionId',
        'addEntry'             => 'AddEntry',
        'removeEntry'          => 'RemoveEntry',
        'prefixListId'         => 'PrefixListId',
        'prefixListName'       => 'PrefixListName',
        'description'          => 'Description',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->addEntry) {
            $res['AddEntry'] = [];
            if (null !== $this->addEntry && \is_array($this->addEntry)) {
                $n = 0;
                foreach ($this->addEntry as $item) {
                    $res['AddEntry'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->prefixListId) {
            $res['PrefixListId'] = $this->prefixListId;
        }
        if (null !== $this->prefixListName) {
            $res['PrefixListName'] = $this->prefixListName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['AddEntry'])) {
            if (!empty($map['AddEntry'])) {
                $model->addEntry = [];
                $n               = 0;
                foreach ($map['AddEntry'] as $item) {
                    $model->addEntry[$n++] = null !== $item ? addEntry::fromMap($item) : $item;
                }
            }
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
        if (isset($map['PrefixListId'])) {
            $model->prefixListId = $map['PrefixListId'];
        }
        if (isset($map['PrefixListName'])) {
            $model->prefixListName = $map['PrefixListName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
