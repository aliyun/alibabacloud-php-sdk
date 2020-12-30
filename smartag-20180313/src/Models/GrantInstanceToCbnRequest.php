<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Tea\Model;

class GrantInstanceToCbnRequest extends Model
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
     * @var int
     */
    public $cenUid;

    /**
     * @var string
     */
    public $ccnInstanceId;

    /**
     * @var string
     */
    public $cenInstanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $grantTrafficService;
    protected $_name = [
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'cenUid'               => 'CenUid',
        'ccnInstanceId'        => 'CcnInstanceId',
        'cenInstanceId'        => 'CenInstanceId',
        'regionId'             => 'RegionId',
        'grantTrafficService'  => 'GrantTrafficService',
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
        if (null !== $this->cenUid) {
            $res['CenUid'] = $this->cenUid;
        }
        if (null !== $this->ccnInstanceId) {
            $res['CcnInstanceId'] = $this->ccnInstanceId;
        }
        if (null !== $this->cenInstanceId) {
            $res['CenInstanceId'] = $this->cenInstanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->grantTrafficService) {
            $res['GrantTrafficService'] = $this->grantTrafficService;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GrantInstanceToCbnRequest
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
        if (isset($map['CenUid'])) {
            $model->cenUid = $map['CenUid'];
        }
        if (isset($map['CcnInstanceId'])) {
            $model->ccnInstanceId = $map['CcnInstanceId'];
        }
        if (isset($map['CenInstanceId'])) {
            $model->cenInstanceId = $map['CenInstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['GrantTrafficService'])) {
            $model->grantTrafficService = $map['GrantTrafficService'];
        }

        return $model;
    }
}
