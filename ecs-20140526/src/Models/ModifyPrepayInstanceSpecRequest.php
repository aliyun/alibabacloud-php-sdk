<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyPrepayInstanceSpecRequest\disk;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyPrepayInstanceSpecRequest\systemDisk;
use AlibabaCloud\Tea\Model;

class ModifyPrepayInstanceSpecRequest extends Model
{
    /**
     * @var systemDisk
     */
    public $systemDisk;

    /**
     * @description Specifies whether to enable automatic payment when you upgrade the instance type. Valid values:
     *
     *   true: enables automatic payment.
     *
     **
     *
     **Note** Make sure that your account balance is sufficient. Otherwise, your order becomes invalid and must be canceled. If your account balance is insufficient, you can set `AutoPay` to `false` to generate an unpaid order. Then, you can log on to the ECS console to pay for the order.
     *
     *   false: disables automatic payment. An order is generated but no payment is made.
     *
     * When `OperatorType` is set to `downgrade`, `AutoPay` is ignored.
     * @example true
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description The client token that you want to use to ensure the idempotency of the request. You can use the client to generate the value, but make sure that the value is unique among different requests. This value allows only ASCII characters and is up to 64 characters in length. For more information, see [How do I ensure the idempotence of a request?](https://help.aliyun.com/document_detail/25693.html)
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description >  This parameter is not publicly available.
     *
     * @var disk[]
     */
    public $disk;

    /**
     * @description The end time of the temporary change. The time follows the [ISO 8601](https://help.aliyun.com/document_detail/25696.html) standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example 2018-01-01T12:05Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example i-bp67acfmxazb4ph****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The new instance type. For information about available instance types, see [Instance families](https://help.aliyun.com/document_detail/25378.html) or call the [DescribeInstanceTypes](https://help.aliyun.com/document_detail/25620.html) operation.
     *
     * This parameter is required.
     * @example ecs.g5.xlarge
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description Specifies whether cross-cluster instance type upgrades are supported. Valid values:
     *
     *   true
     *   false
     *
     * Instance that resides in the classic network:
     *
     *   For [retired instance types](https://help.aliyun.com/document_detail/55263.html), when a non-I/O optimized instance is upgraded to an I/O optimized instance, the private IP address, disk device names, and software authorization codes of the instance change. For a Linux instance, basic disks (cloud) are identified as xvd\\* such as xvda and xvdb, and ultra disks (cloud_efficiency) and standard SSDs (cloud_ssd) are identified as vd\\* such as vda and vdb.
     *   For [instance families available for purchase](https://help.aliyun.com/document_detail/25378.html), the private IP address of the instance changes.
     *
     * Instance that resides in a virtual private cloud (VPC): For retired instance types, when a non-I/O optimized instance is upgraded to an I/O optimized instance, the disk device names and software authorization codes of the instance change. For a Linux instance, basic disks (cloud) are identified as xvd\\* such as xvda and xvdb, and ultra disks (cloud_efficiency) and standard SSDs (cloud_ssd) are identified as vd\\* such as vda and vdb.
     * @example false
     *
     * @var bool
     */
    public $migrateAcrossZone;

    /**
     * @description >  This parameter is not publicly available.
     *
     * @example null
     *
     * @var string
     */
    public $modifyMode;

    /**
     * @description The type of the change to the instance. Valid values:
     *
     * >  This parameter is optional. The system can automatically determine whether the instance change is an upgrade or a downgrade. If you want to specify this parameter, refer to the following valid values of the parameter.
     *
     *   upgrade: upgrades the instance type. Make sure that the balance in your account is sufficient.
     *   downgrade: downgrades the instance type. When the new instance type specified by the `InstanceType` parameter has lower specifications than the current instance type, set `OperatorType` to downgrade.
     *
     * >  You can refer to the preceding usage notes on how to upgrade or downgrade the instance type.
     * @example upgrade
     *
     * @var string
     */
    public $operatorType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The restart time of the instance. The time follows the [ISO 8601](https://help.aliyun.com/document_detail/25696.html) standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example 2018-01-01T12:05Z
     *
     * @var string
     */
    public $rebootTime;

    /**
     * @description Specifies whether to restart the instance immediately after the instance type is changed. Valid values:
     *
     *   true: restart the instance immediately after the instance type is changed.
     *   false: does not restart the instance immediately after the instance type is changed.
     *
     * Default value: false.
     *
     * >  If the instance is in the **Stopping** state, the instance status remains unchanged and no operations are performed after the instance type is change regardless of whether you set the `RebootWhenFinished` parameter to true.
     * @example false
     *
     * @var bool
     */
    public $rebootWhenFinished;

    /**
     * @description The region ID of the instance. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/25609.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
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
        'systemDisk'           => 'SystemDisk',
        'autoPay'              => 'AutoPay',
        'clientToken'          => 'ClientToken',
        'disk'                 => 'Disk',
        'endTime'              => 'EndTime',
        'instanceId'           => 'InstanceId',
        'instanceType'         => 'InstanceType',
        'migrateAcrossZone'    => 'MigrateAcrossZone',
        'modifyMode'           => 'ModifyMode',
        'operatorType'         => 'OperatorType',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'rebootTime'           => 'RebootTime',
        'rebootWhenFinished'   => 'RebootWhenFinished',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->systemDisk) {
            $res['SystemDisk'] = null !== $this->systemDisk ? $this->systemDisk->toMap() : null;
        }
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->disk) {
            $res['Disk'] = [];
            if (null !== $this->disk && \is_array($this->disk)) {
                $n = 0;
                foreach ($this->disk as $item) {
                    $res['Disk'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->migrateAcrossZone) {
            $res['MigrateAcrossZone'] = $this->migrateAcrossZone;
        }
        if (null !== $this->modifyMode) {
            $res['ModifyMode'] = $this->modifyMode;
        }
        if (null !== $this->operatorType) {
            $res['OperatorType'] = $this->operatorType;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->rebootTime) {
            $res['RebootTime'] = $this->rebootTime;
        }
        if (null !== $this->rebootWhenFinished) {
            $res['RebootWhenFinished'] = $this->rebootWhenFinished;
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

    /**
     * @param array $map
     *
     * @return ModifyPrepayInstanceSpecRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SystemDisk'])) {
            $model->systemDisk = systemDisk::fromMap($map['SystemDisk']);
        }
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Disk'])) {
            if (!empty($map['Disk'])) {
                $model->disk = [];
                $n           = 0;
                foreach ($map['Disk'] as $item) {
                    $model->disk[$n++] = null !== $item ? disk::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['MigrateAcrossZone'])) {
            $model->migrateAcrossZone = $map['MigrateAcrossZone'];
        }
        if (isset($map['ModifyMode'])) {
            $model->modifyMode = $map['ModifyMode'];
        }
        if (isset($map['OperatorType'])) {
            $model->operatorType = $map['OperatorType'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RebootTime'])) {
            $model->rebootTime = $map['RebootTime'];
        }
        if (isset($map['RebootWhenFinished'])) {
            $model->rebootWhenFinished = $map['RebootWhenFinished'];
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
