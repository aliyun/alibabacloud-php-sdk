<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Tea\Model;

class AddPipelineRequest extends Model
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
    public $name;

    /**
     * @var string
     */
    public $speed;

    /**
     * @var int
     */
    public $speedLevel;

    /**
     * @var string
     */
    public $notifyConfig;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $ownerAccount;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'name'                 => 'Name',
        'speed'                => 'Speed',
        'speedLevel'           => 'SpeedLevel',
        'notifyConfig'         => 'NotifyConfig',
        'role'                 => 'Role',
        'ownerAccount'         => 'OwnerAccount',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->speed) {
            $res['Speed'] = $this->speed;
        }
        if (null !== $this->speedLevel) {
            $res['SpeedLevel'] = $this->speedLevel;
        }
        if (null !== $this->notifyConfig) {
            $res['NotifyConfig'] = $this->notifyConfig;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddPipelineRequest
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Speed'])) {
            $model->speed = $map['Speed'];
        }
        if (isset($map['SpeedLevel'])) {
            $model->speedLevel = $map['SpeedLevel'];
        }
        if (isset($map['NotifyConfig'])) {
            $model->notifyConfig = $map['NotifyConfig'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        return $model;
    }
}
