<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceSpecRequest\disk;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceSpecRequest\systemDisk;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceSpecRequest\temporary;

class ModifyInstanceSpecRequest extends Model
{
    /**
     * @var systemDisk
     */
    public $systemDisk;

    /**
     * @var temporary
     */
    public $temporary;

    /**
     * @var bool
     */
    public $allowMigrateAcrossZone;

    /**
     * @var bool
     */
    public $async;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var disk[]
     */
    public $disk;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var int
     */
    public $internetMaxBandwidthIn;

    /**
     * @var int
     */
    public $internetMaxBandwidthOut;

    /**
     * @var string
     */
    public $modifyMode;

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
    protected $_name = [
        'systemDisk' => 'SystemDisk',
        'temporary' => 'Temporary',
        'allowMigrateAcrossZone' => 'AllowMigrateAcrossZone',
        'async' => 'Async',
        'clientToken' => 'ClientToken',
        'disk' => 'Disk',
        'dryRun' => 'DryRun',
        'instanceId' => 'InstanceId',
        'instanceType' => 'InstanceType',
        'internetMaxBandwidthIn' => 'InternetMaxBandwidthIn',
        'internetMaxBandwidthOut' => 'InternetMaxBandwidthOut',
        'modifyMode' => 'ModifyMode',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate()
    {
        if (null !== $this->systemDisk) {
            $this->systemDisk->validate();
        }
        if (null !== $this->temporary) {
            $this->temporary->validate();
        }
        if (\is_array($this->disk)) {
            Model::validateArray($this->disk);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->systemDisk) {
            $res['SystemDisk'] = null !== $this->systemDisk ? $this->systemDisk->toArray($noStream) : $this->systemDisk;
        }

        if (null !== $this->temporary) {
            $res['Temporary'] = null !== $this->temporary ? $this->temporary->toArray($noStream) : $this->temporary;
        }

        if (null !== $this->allowMigrateAcrossZone) {
            $res['AllowMigrateAcrossZone'] = $this->allowMigrateAcrossZone;
        }

        if (null !== $this->async) {
            $res['Async'] = $this->async;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->disk) {
            if (\is_array($this->disk)) {
                $res['Disk'] = [];
                $n1 = 0;
                foreach ($this->disk as $item1) {
                    $res['Disk'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->internetMaxBandwidthIn) {
            $res['InternetMaxBandwidthIn'] = $this->internetMaxBandwidthIn;
        }

        if (null !== $this->internetMaxBandwidthOut) {
            $res['InternetMaxBandwidthOut'] = $this->internetMaxBandwidthOut;
        }

        if (null !== $this->modifyMode) {
            $res['ModifyMode'] = $this->modifyMode;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SystemDisk'])) {
            $model->systemDisk = systemDisk::fromMap($map['SystemDisk']);
        }

        if (isset($map['Temporary'])) {
            $model->temporary = temporary::fromMap($map['Temporary']);
        }

        if (isset($map['AllowMigrateAcrossZone'])) {
            $model->allowMigrateAcrossZone = $map['AllowMigrateAcrossZone'];
        }

        if (isset($map['Async'])) {
            $model->async = $map['Async'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Disk'])) {
            if (!empty($map['Disk'])) {
                $model->disk = [];
                $n1 = 0;
                foreach ($map['Disk'] as $item1) {
                    $model->disk[$n1] = disk::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['InternetMaxBandwidthIn'])) {
            $model->internetMaxBandwidthIn = $map['InternetMaxBandwidthIn'];
        }

        if (isset($map['InternetMaxBandwidthOut'])) {
            $model->internetMaxBandwidthOut = $map['InternetMaxBandwidthOut'];
        }

        if (isset($map['ModifyMode'])) {
            $model->modifyMode = $map['ModifyMode'];
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

        return $model;
    }
}
