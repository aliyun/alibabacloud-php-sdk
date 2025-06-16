<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpcPrefixListRequest\addPrefixListEntry;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpcPrefixListRequest\removePrefixListEntry;

class ModifyVpcPrefixListRequest extends Model
{
    /**
     * @var addPrefixListEntry[]
     */
    public $addPrefixListEntry;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $dryRun;

    /**
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
     * @var string
     */
    public $prefixListDescription;

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
    public $regionId;

    /**
     * @var removePrefixListEntry[]
     */
    public $removePrefixListEntry;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'addPrefixListEntry' => 'AddPrefixListEntry',
        'clientToken' => 'ClientToken',
        'dryRun' => 'DryRun',
        'maxEntries' => 'MaxEntries',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'prefixListDescription' => 'PrefixListDescription',
        'prefixListId' => 'PrefixListId',
        'prefixListName' => 'PrefixListName',
        'regionId' => 'RegionId',
        'removePrefixListEntry' => 'RemovePrefixListEntry',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate()
    {
        if (\is_array($this->addPrefixListEntry)) {
            Model::validateArray($this->addPrefixListEntry);
        }
        if (\is_array($this->removePrefixListEntry)) {
            Model::validateArray($this->removePrefixListEntry);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addPrefixListEntry) {
            if (\is_array($this->addPrefixListEntry)) {
                $res['AddPrefixListEntry'] = [];
                $n1 = 0;
                foreach ($this->addPrefixListEntry as $item1) {
                    $res['AddPrefixListEntry'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
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

        if (null !== $this->prefixListDescription) {
            $res['PrefixListDescription'] = $this->prefixListDescription;
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

        if (null !== $this->removePrefixListEntry) {
            if (\is_array($this->removePrefixListEntry)) {
                $res['RemovePrefixListEntry'] = [];
                $n1 = 0;
                foreach ($this->removePrefixListEntry as $item1) {
                    $res['RemovePrefixListEntry'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['AddPrefixListEntry'])) {
            if (!empty($map['AddPrefixListEntry'])) {
                $model->addPrefixListEntry = [];
                $n1 = 0;
                foreach ($map['AddPrefixListEntry'] as $item1) {
                    $model->addPrefixListEntry[$n1] = addPrefixListEntry::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
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

        if (isset($map['PrefixListDescription'])) {
            $model->prefixListDescription = $map['PrefixListDescription'];
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

        if (isset($map['RemovePrefixListEntry'])) {
            if (!empty($map['RemovePrefixListEntry'])) {
                $model->removePrefixListEntry = [];
                $n1 = 0;
                foreach ($map['RemovePrefixListEntry'] as $item1) {
                    $model->removePrefixListEntry[$n1] = removePrefixListEntry::fromMap($item1);
                    ++$n1;
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
