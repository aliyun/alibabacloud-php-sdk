<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models;

use AlibabaCloud\Dara\Model;

class UpdateAssociatedResourceRuleRequest extends Model
{
    /**
     * @var string
     */
    public $existingStatus;

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
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var string
     */
    public $settingName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $tagKeys;
    protected $_name = [
        'existingStatus' => 'ExistingStatus',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'settingName' => 'SettingName',
        'status' => 'Status',
        'tagKeys' => 'TagKeys',
    ];

    public function validate()
    {
        if (\is_array($this->tagKeys)) {
            Model::validateArray($this->tagKeys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->existingStatus) {
            $res['ExistingStatus'] = $this->existingStatus;
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

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->settingName) {
            $res['SettingName'] = $this->settingName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tagKeys) {
            if (\is_array($this->tagKeys)) {
                $res['TagKeys'] = [];
                $n1 = 0;
                foreach ($this->tagKeys as $item1) {
                    $res['TagKeys'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ExistingStatus'])) {
            $model->existingStatus = $map['ExistingStatus'];
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

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['SettingName'])) {
            $model->settingName = $map['SettingName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TagKeys'])) {
            if (!empty($map['TagKeys'])) {
                $model->tagKeys = [];
                $n1 = 0;
                foreach ($map['TagKeys'] as $item1) {
                    $model->tagKeys[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
