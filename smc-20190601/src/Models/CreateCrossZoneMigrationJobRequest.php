<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smc\V20190601\Models\CreateCrossZoneMigrationJobRequest\disk;

class CreateCrossZoneMigrationJobRequest extends Model
{
    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var disk[]
     */
    public $disk;

    /**
     * @var string
     */
    public $instanceId;

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
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var string
     */
    public $targetInstanceType;

    /**
     * @var string
     */
    public $targetVSwitchId;

    /**
     * @var string
     */
    public $targetZoneId;
    protected $_name = [
        'autoPay' => 'AutoPay',
        'clientToken' => 'ClientToken',
        'disk' => 'Disk',
        'instanceId' => 'InstanceId',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'targetInstanceType' => 'TargetInstanceType',
        'targetVSwitchId' => 'TargetVSwitchId',
        'targetZoneId' => 'TargetZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->disk)) {
            Model::validateArray($this->disk);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->disk) {
            if (\is_array($this->disk)) {
                $res['Disk'] = [];
                $n1 = 0;
                foreach ($this->disk as $item1) {
                    $res['Disk'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->targetInstanceType) {
            $res['TargetInstanceType'] = $this->targetInstanceType;
        }

        if (null !== $this->targetVSwitchId) {
            $res['TargetVSwitchId'] = $this->targetVSwitchId;
        }

        if (null !== $this->targetZoneId) {
            $res['TargetZoneId'] = $this->targetZoneId;
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
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Disk'])) {
            if (!empty($map['Disk'])) {
                $model->disk = [];
                $n1 = 0;
                foreach ($map['Disk'] as $item1) {
                    $model->disk[$n1++] = disk::fromMap($item1);
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['TargetInstanceType'])) {
            $model->targetInstanceType = $map['TargetInstanceType'];
        }

        if (isset($map['TargetVSwitchId'])) {
            $model->targetVSwitchId = $map['TargetVSwitchId'];
        }

        if (isset($map['TargetZoneId'])) {
            $model->targetZoneId = $map['TargetZoneId'];
        }

        return $model;
    }
}
