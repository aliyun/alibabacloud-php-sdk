<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreatePrefixListRequest\entry;

class CreatePrefixListRequest extends Model
{
    /**
     * @var string
     */
    public $addressFamily;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $description;

    /**
     * @var entry[]
     */
    public $entry;

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
    public $prefixListName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'addressFamily' => 'AddressFamily',
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'entry' => 'Entry',
        'maxEntries' => 'MaxEntries',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'prefixListName' => 'PrefixListName',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate()
    {
        if (\is_array($this->entry)) {
            Model::validateArray($this->entry);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addressFamily) {
            $res['AddressFamily'] = $this->addressFamily;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->entry) {
            if (\is_array($this->entry)) {
                $res['Entry'] = [];
                $n1 = 0;
                foreach ($this->entry as $item1) {
                    $res['Entry'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (null !== $this->prefixListName) {
            $res['PrefixListName'] = $this->prefixListName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['AddressFamily'])) {
            $model->addressFamily = $map['AddressFamily'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Entry'])) {
            if (!empty($map['Entry'])) {
                $model->entry = [];
                $n1 = 0;
                foreach ($map['Entry'] as $item1) {
                    $model->entry[$n1++] = entry::fromMap($item1);
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

        if (isset($map['PrefixListName'])) {
            $model->prefixListName = $map['PrefixListName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
