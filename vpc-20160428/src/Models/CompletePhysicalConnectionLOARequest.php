<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;

class CompletePhysicalConnectionLOARequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var bool
     */
    public $finishWork;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $lineCode;
    /**
     * @var string
     */
    public $lineLabel;
    /**
     * @var string
     */
    public $lineSPContactInfo;
    /**
     * @var string
     */
    public $lineServiceProvider;
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
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'finishWork'           => 'FinishWork',
        'instanceId'           => 'InstanceId',
        'lineCode'             => 'LineCode',
        'lineLabel'            => 'LineLabel',
        'lineSPContactInfo'    => 'LineSPContactInfo',
        'lineServiceProvider'  => 'LineServiceProvider',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->finishWork) {
            $res['FinishWork'] = $this->finishWork;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->lineCode) {
            $res['LineCode'] = $this->lineCode;
        }

        if (null !== $this->lineLabel) {
            $res['LineLabel'] = $this->lineLabel;
        }

        if (null !== $this->lineSPContactInfo) {
            $res['LineSPContactInfo'] = $this->lineSPContactInfo;
        }

        if (null !== $this->lineServiceProvider) {
            $res['LineServiceProvider'] = $this->lineServiceProvider;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['FinishWork'])) {
            $model->finishWork = $map['FinishWork'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LineCode'])) {
            $model->lineCode = $map['LineCode'];
        }

        if (isset($map['LineLabel'])) {
            $model->lineLabel = $map['LineLabel'];
        }

        if (isset($map['LineSPContactInfo'])) {
            $model->lineSPContactInfo = $map['LineSPContactInfo'];
        }

        if (isset($map['LineServiceProvider'])) {
            $model->lineServiceProvider = $map['LineServiceProvider'];
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

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
