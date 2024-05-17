<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class DisableCenVbrHealthCheckRequest extends Model
{
    /**
     * @description The ID of the Cloud Enterprise Network (CEN) instance.
     *
     * This parameter is required.
     * @example cen-sjfoejfghhjgghjghkg****
     *
     * @var string
     */
    public $cenId;

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
     * @description The ID of the VBR.
     *
     * This parameter is required.
     * @example vbr-wz95o9aylj181n5****
     *
     * @var string
     */
    public $vbrInstanceId;

    /**
     * @description The ID of the Alibaba Cloud account to which the VBR belongs.
     *
     * > This parameter is required if the VBR and the CEN instance belong to different Alibaba Cloud accounts.
     * @example 1250123456123456
     *
     * @var int
     */
    public $vbrInstanceOwnerId;

    /**
     * @description The ID of the region where the VBR is deployed.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $vbrInstanceRegionId;
    protected $_name = [
        'cenId'                => 'CenId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'vbrInstanceId'        => 'VbrInstanceId',
        'vbrInstanceOwnerId'   => 'VbrInstanceOwnerId',
        'vbrInstanceRegionId'  => 'VbrInstanceRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
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
        if (null !== $this->vbrInstanceId) {
            $res['VbrInstanceId'] = $this->vbrInstanceId;
        }
        if (null !== $this->vbrInstanceOwnerId) {
            $res['VbrInstanceOwnerId'] = $this->vbrInstanceOwnerId;
        }
        if (null !== $this->vbrInstanceRegionId) {
            $res['VbrInstanceRegionId'] = $this->vbrInstanceRegionId;
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
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
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
        if (isset($map['VbrInstanceId'])) {
            $model->vbrInstanceId = $map['VbrInstanceId'];
        }
        if (isset($map['VbrInstanceOwnerId'])) {
            $model->vbrInstanceOwnerId = $map['VbrInstanceOwnerId'];
        }
        if (isset($map['VbrInstanceRegionId'])) {
            $model->vbrInstanceRegionId = $map['VbrInstanceRegionId'];
        }

        return $model;
    }
}
