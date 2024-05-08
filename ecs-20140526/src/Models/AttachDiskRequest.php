<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class AttachDiskRequest extends Model
{
    /**
     * @description Specifies whether to attach the disk as a system disk.
     *
     * > If you set `Bootable` to true, the instance must be in the No System Disk state.
     * @example false
     *
     * @var bool
     */
    public $bootable;

    /**
     * @description Specifies whether to release the disk when the instance is released. Valid values:
     *
     *   true: releases the disk when the instance is released.
     *   false: does not release the data disk when the instance is released. The disk is retained as a pay-as-you-go data disk.
     *
     * When you specify this parameter, take note of the following items:
     *
     *   If `OperationLocks` in the DescribeInstances response contains `"LockReason" : "security"` for the instance to which the disk is attached, the instance is locked for security reasons. Regardless of whether you set `DeleteWithInstance` to `false`, the DeleteWithInstance parameter is ignored, and the disk is released when the instance is released.
     *   You cannot specify this parameter for disks for which the multi-attach feature is enabled.
     *
     * @example false
     *
     * @var bool
     */
    public $deleteWithInstance;

    /**
     * @description The device name of the disk.
     *
     * > This parameter will be removed in the future. We recommend that you use other parameters to ensure compatibility.
     * @example testDeviceName
     *
     * @var string
     */
    public $device;

    /**
     * @description The ID of the disk. The disk specified by the `DiskId` parameter and the instance specified by the `InstanceId` parameter must reside in the same zone.
     *
     * > For more information about the limits on attaching a data disk and a system disk, see the "Usage notes" section of this topic.
     * @example d-bp1j4l5axzdy6ftk****
     *
     * @var string
     */
    public $diskId;

    /**
     * @var bool
     */
    public $force;

    /**
     * @description The ID of the instance to which you want to attach the disk.
     *
     * @example i-bp1dq5lozx5f4pmd****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the SSH key pair that you bind to the Linux instance when you attach the system disk.
     *
     *   Windows instances do not support logons based on SSH key pairs. The `Password` parameter takes effect even if the KeyPairName parameter is specified.
     *   For Linux instances, the username and password-based logon method is disabled by default.
     *
     * @example KeyPairTestName
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The password that is set when you attach the system disk. The password is applicable only to the administrator and root users. The password must be 8 to 30 characters in length and must contain at least three of the following character types: uppercase letters, lowercase letters, digits, and special characters. The following special characters are supported:
     *
     * ()`~!@#$%^&*-_+=|{}[]:;\"<>,.?/
     *
     * > If `Password` is configured, we recommend that you send requests over HTTPS to prevent password leaks.
     * @example EcsV587!
     *
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'bootable'             => 'Bootable',
        'deleteWithInstance'   => 'DeleteWithInstance',
        'device'               => 'Device',
        'diskId'               => 'DiskId',
        'force'                => 'Force',
        'instanceId'           => 'InstanceId',
        'keyPairName'          => 'KeyPairName',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'password'             => 'Password',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bootable) {
            $res['Bootable'] = $this->bootable;
        }
        if (null !== $this->deleteWithInstance) {
            $res['DeleteWithInstance'] = $this->deleteWithInstance;
        }
        if (null !== $this->device) {
            $res['Device'] = $this->device;
        }
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachDiskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bootable'])) {
            $model->bootable = $map['Bootable'];
        }
        if (isset($map['DeleteWithInstance'])) {
            $model->deleteWithInstance = $map['DeleteWithInstance'];
        }
        if (isset($map['Device'])) {
            $model->device = $map['Device'];
        }
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
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
