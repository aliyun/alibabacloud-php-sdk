<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyPortRangeListRequest\addEntry;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyPortRangeListRequest\removeEntry;

class ModifyPortRangeListRequest extends Model
{
    /**
     * @var addEntry[]
     */
    public $addEntry;

    /**
     * @var string
     */
    public $clientToken;

    /**
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
     * @var string
     */
    public $portRangeListId;

    /**
     * @var string
     */
    public $portRangeListName;

    /**
     * @var string
     */
    public $regionId;

    /**
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

    public function validate()
    {
        if (\is_array($this->addEntry)) {
            Model::validateArray($this->addEntry);
        }
        if (\is_array($this->removeEntry)) {
            Model::validateArray($this->removeEntry);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addEntry) {
            if (\is_array($this->addEntry)) {
                $res['AddEntry'] = [];
                $n1 = 0;
                foreach ($this->addEntry as $item1) {
                    $res['AddEntry'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->removeEntry)) {
                $res['RemoveEntry'] = [];
                $n1 = 0;
                foreach ($this->removeEntry as $item1) {
                    $res['RemoveEntry'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddEntry'])) {
            if (!empty($map['AddEntry'])) {
                $model->addEntry = [];
                $n1 = 0;
                foreach ($map['AddEntry'] as $item1) {
                    $model->addEntry[$n1++] = addEntry::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['RemoveEntry'] as $item1) {
                    $model->removeEntry[$n1++] = removeEntry::fromMap($item1);
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
