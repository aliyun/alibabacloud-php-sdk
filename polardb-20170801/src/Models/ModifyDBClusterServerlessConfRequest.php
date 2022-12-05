<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBClusterServerlessConfRequest extends Model
{
    /**
     * @var string
     */
    public $allowShutDown;

    /**
     * @var string
     */
    public $DBClusterId;

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
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $scaleMax;

    /**
     * @var string
     */
    public $scaleMin;

    /**
     * @var string
     */
    public $scaleRoNumMax;

    /**
     * @var string
     */
    public $scaleRoNumMin;

    /**
     * @var string
     */
    public $secondsUntilAutoPause;
    protected $_name = [
        'allowShutDown'         => 'AllowShutDown',
        'DBClusterId'           => 'DBClusterId',
        'ownerAccount'          => 'OwnerAccount',
        'ownerId'               => 'OwnerId',
        'resourceOwnerAccount'  => 'ResourceOwnerAccount',
        'resourceOwnerId'       => 'ResourceOwnerId',
        'scaleMax'              => 'ScaleMax',
        'scaleMin'              => 'ScaleMin',
        'scaleRoNumMax'         => 'ScaleRoNumMax',
        'scaleRoNumMin'         => 'ScaleRoNumMin',
        'secondsUntilAutoPause' => 'SecondsUntilAutoPause',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowShutDown) {
            $res['AllowShutDown'] = $this->allowShutDown;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->scaleMax) {
            $res['ScaleMax'] = $this->scaleMax;
        }
        if (null !== $this->scaleMin) {
            $res['ScaleMin'] = $this->scaleMin;
        }
        if (null !== $this->scaleRoNumMax) {
            $res['ScaleRoNumMax'] = $this->scaleRoNumMax;
        }
        if (null !== $this->scaleRoNumMin) {
            $res['ScaleRoNumMin'] = $this->scaleRoNumMin;
        }
        if (null !== $this->secondsUntilAutoPause) {
            $res['SecondsUntilAutoPause'] = $this->secondsUntilAutoPause;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBClusterServerlessConfRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowShutDown'])) {
            $model->allowShutDown = $map['AllowShutDown'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ScaleMax'])) {
            $model->scaleMax = $map['ScaleMax'];
        }
        if (isset($map['ScaleMin'])) {
            $model->scaleMin = $map['ScaleMin'];
        }
        if (isset($map['ScaleRoNumMax'])) {
            $model->scaleRoNumMax = $map['ScaleRoNumMax'];
        }
        if (isset($map['ScaleRoNumMin'])) {
            $model->scaleRoNumMin = $map['ScaleRoNumMin'];
        }
        if (isset($map['SecondsUntilAutoPause'])) {
            $model->secondsUntilAutoPause = $map['SecondsUntilAutoPause'];
        }

        return $model;
    }
}
