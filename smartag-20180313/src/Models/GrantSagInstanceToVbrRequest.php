<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Tea\Model;

class GrantSagInstanceToVbrRequest extends Model
{
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
    public $regionId;

    /**
     * @var int
     */
    public $vbrUid;

    /**
     * @var string
     */
    public $vbrInstanceId;

    /**
     * @var string
     */
    public $vbrRegionId;

    /**
     * @var string
     */
    public $smartAGId;
    protected $_name = [
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'regionId'             => 'RegionId',
        'vbrUid'               => 'VbrUid',
        'vbrInstanceId'        => 'VbrInstanceId',
        'vbrRegionId'          => 'VbrRegionId',
        'smartAGId'            => 'SmartAGId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->vbrUid) {
            $res['VbrUid'] = $this->vbrUid;
        }
        if (null !== $this->vbrInstanceId) {
            $res['VbrInstanceId'] = $this->vbrInstanceId;
        }
        if (null !== $this->vbrRegionId) {
            $res['VbrRegionId'] = $this->vbrRegionId;
        }
        if (null !== $this->smartAGId) {
            $res['SmartAGId'] = $this->smartAGId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GrantSagInstanceToVbrRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VbrUid'])) {
            $model->vbrUid = $map['VbrUid'];
        }
        if (isset($map['VbrInstanceId'])) {
            $model->vbrInstanceId = $map['VbrInstanceId'];
        }
        if (isset($map['VbrRegionId'])) {
            $model->vbrRegionId = $map['VbrRegionId'];
        }
        if (isset($map['SmartAGId'])) {
            $model->smartAGId = $map['SmartAGId'];
        }

        return $model;
    }
}
