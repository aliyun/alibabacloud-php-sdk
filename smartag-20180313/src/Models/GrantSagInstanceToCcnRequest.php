<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Tea\Model;

class GrantSagInstanceToCcnRequest extends Model
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
     * @var string
     */
    public $smartAGId;

    /**
     * @var string
     */
    public $ccnInstanceId;

    /**
     * @var int
     */
    public $ccnUid;

    /**
     * @var bool
     */
    public $grantTrafficService;
    protected $_name = [
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'regionId'             => 'RegionId',
        'smartAGId'            => 'SmartAGId',
        'ccnInstanceId'        => 'CcnInstanceId',
        'ccnUid'               => 'CcnUid',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->smartAGId) {
            $res['SmartAGId'] = $this->smartAGId;
        }
        if (null !== $this->ccnInstanceId) {
            $res['CcnInstanceId'] = $this->ccnInstanceId;
        }
        if (null !== $this->ccnUid) {
            $res['CcnUid'] = $this->ccnUid;
        }
        if (null !== $this->grantTrafficService) {
            $res['GrantTrafficService'] = $this->grantTrafficService;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GrantSagInstanceToCcnRequest
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
        if (isset($map['SmartAGId'])) {
            $model->smartAGId = $map['SmartAGId'];
        }
        if (isset($map['CcnInstanceId'])) {
            $model->ccnInstanceId = $map['CcnInstanceId'];
        }
        if (isset($map['CcnUid'])) {
            $model->ccnUid = $map['CcnUid'];
        }
        if (isset($map['GrantTrafficService'])) {
            $model->grantTrafficService = $map['GrantTrafficService'];
        }

        return $model;
    }
}
