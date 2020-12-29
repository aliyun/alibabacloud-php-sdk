<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class DisableCenVbrHealthCheckRequest extends Model
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
    public $cenId;

    /**
     * @var string
     */
    public $vbrInstanceRegionId;

    /**
     * @var string
     */
    public $vbrInstanceId;

    /**
     * @var int
     */
    public $vbrInstanceOwnerId;
    protected $_name = [
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'cenId'                => 'CenId',
        'vbrInstanceRegionId'  => 'VbrInstanceRegionId',
        'vbrInstanceId'        => 'VbrInstanceId',
        'vbrInstanceOwnerId'   => 'VbrInstanceOwnerId',
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
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->vbrInstanceRegionId) {
            $res['VbrInstanceRegionId'] = $this->vbrInstanceRegionId;
        }
        if (null !== $this->vbrInstanceId) {
            $res['VbrInstanceId'] = $this->vbrInstanceId;
        }
        if (null !== $this->vbrInstanceOwnerId) {
            $res['VbrInstanceOwnerId'] = $this->vbrInstanceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DisableCenVbrHealthCheckRequest
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
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['VbrInstanceRegionId'])) {
            $model->vbrInstanceRegionId = $map['VbrInstanceRegionId'];
        }
        if (isset($map['VbrInstanceId'])) {
            $model->vbrInstanceId = $map['VbrInstanceId'];
        }
        if (isset($map['VbrInstanceOwnerId'])) {
            $model->vbrInstanceOwnerId = $map['VbrInstanceOwnerId'];
        }

        return $model;
    }
}
