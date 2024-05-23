<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class RecoveryDBInstanceRequest extends Model
{
    /**
     * @description The backup set ID. You can call the DescribeBackups operation to query the backup set ID.
     *
     * If you specify this parameter, you do not need to specify **DBInstanceId**.
     *
     * >  You must specify at least one of the **BackupId** or **RestoreTime** parameters.
     * @example 29304****
     *
     * @var string
     */
    public $backupId;

    /**
     * @description The instance type of the new instance. For more information, see [Instance types](https://help.aliyun.com/document_detail/26312.html).
     *
     * @example rds.mysql.s2.large
     *
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @description The ID of the original instance.
     *
     * > *   If you specify BackupId, you do not need to specify this parameter.
     * > *   If you specify RestoreTime, you must also specify this parameter.
     * @example rm-xxxxxxxx1
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The storage capacity of the new instance. Unit: GB. For more information, see [Instance types](https://help.aliyun.com/document_detail/26312.html).
     *
     * >  You must set this parameter to a value that is greater than or equal to the storage capacity of the original instance.
     * @example 5
     *
     * @var int
     */
    public $DBInstanceStorage;

    /**
     * @description The storage type of the new instance. Valid values:
     *
     *   **local_ssd/ephemeral_ssd**: local SSD
     *   **cloud_ssd**: standard SSD.
     *   **cloud_essd**: enhanced SSD (ESSD)
     *
     * @example local_ssd
     *
     * @var string
     */
    public $DBInstanceStorageType;

    /**
     * @description The name of the database.
     *
     *   If you want to restore databases to a new instance, the value is in the format of `Original database name 1,New database name 2`.
     *   If you want to restore databases to an existing instance, the value is in the format of `{"Original database name 1":"New database name 1","Original database name 2":"New database name 2"`.
     *
     * This parameter is required.
     * @example Restore databases to a new instance: test1,test2. Restore databases to an existing instance: {"test1":"newtest1","test2":"newtest2"}
     *
     * @var string
     */
    public $dbNames;

    /**
     * @description The network type of the new instance. Valid values:
     *
     *   **Classic**
     *   **VPC**
     *
     * By default, the new instance uses the same network type as the original instance.
     * @example VPC
     *
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @description The billing method of the new instance. Valid values:
     *
     *   **Postpaid**: pay-as-you-go.
     *   **Prepaid**: subscription.
     *
     * @example Postpaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The unit that is used to calculate the billing cycle of the new instance. This parameter takes effect only when you select the subscription billing method for the new instance. Valid values:
     *
     *   **Year**
     *   **Month**
     *
     * > This parameter must be specified when **PayType** is set to **Prepaid**.
     * @example Month
     *
     * @var string
     */
    public $period;

    /**
     * @description The internal IP address of the new instance. The internal IP address must be within the CIDR block that is supported by the specified vSwitch. The system automatically assigns an internal IP address based on the values of the **VPCId** and **VSwitchId** parameters.
     *
     * @example 172.XXX.XXX.69
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The point in time to which you want to restore data. The point in time must fall within the specified log backup retention period. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * If you specify this parameter, you must also specify **DBInstanceId**.
     *
     * > You must specify at least one of **BackupId** and **RestoreTime**.
     * @example 2011-06-11T16:00:00Z
     *
     * @var string
     */
    public $restoreTime;

    /**
     * @description The ID of the destination instance.
     *
     * @example rm-uf6wjk5xxxxxxx
     *
     * @var string
     */
    public $targetDBInstanceId;

    /**
     * @description The subscription duration of the instance. Valid values:
     *
     *   Valid values when **Period** is set to **Year**: **1 to 3**.****
     *   Valid values when **Period** is set to **Month**: **1 to 9**.****
     *
     * > This parameter must be specified when PayType is set to **Prepaid**.
     * @example 1
     *
     * @var string
     */
    public $usedTime;

    /**
     * @description The VPC ID of the new instance.
     *
     * @example vpc-xxxxxxxxxxx
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description The vSwitch ID of the new instance. If you specify more than one vSwitch ID, you must separate the IDs with commas (,).
     *
     * @example vsw-xxxxxxxxxxx
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'backupId'              => 'BackupId',
        'DBInstanceClass'       => 'DBInstanceClass',
        'DBInstanceId'          => 'DBInstanceId',
        'DBInstanceStorage'     => 'DBInstanceStorage',
        'DBInstanceStorageType' => 'DBInstanceStorageType',
        'dbNames'               => 'DbNames',
        'instanceNetworkType'   => 'InstanceNetworkType',
        'payType'               => 'PayType',
        'period'                => 'Period',
        'privateIpAddress'      => 'PrivateIpAddress',
        'resourceOwnerId'       => 'ResourceOwnerId',
        'restoreTime'           => 'RestoreTime',
        'targetDBInstanceId'    => 'TargetDBInstanceId',
        'usedTime'              => 'UsedTime',
        'VPCId'                 => 'VPCId',
        'vSwitchId'             => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }
        if (null !== $this->DBInstanceClass) {
            $res['DBInstanceClass'] = $this->DBInstanceClass;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBInstanceStorage) {
            $res['DBInstanceStorage'] = $this->DBInstanceStorage;
        }
        if (null !== $this->DBInstanceStorageType) {
            $res['DBInstanceStorageType'] = $this->DBInstanceStorageType;
        }
        if (null !== $this->dbNames) {
            $res['DbNames'] = $this->dbNames;
        }
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->restoreTime) {
            $res['RestoreTime'] = $this->restoreTime;
        }
        if (null !== $this->targetDBInstanceId) {
            $res['TargetDBInstanceId'] = $this->targetDBInstanceId;
        }
        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecoveryDBInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['DBInstanceClass'])) {
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBInstanceStorage'])) {
            $model->DBInstanceStorage = $map['DBInstanceStorage'];
        }
        if (isset($map['DBInstanceStorageType'])) {
            $model->DBInstanceStorageType = $map['DBInstanceStorageType'];
        }
        if (isset($map['DbNames'])) {
            $model->dbNames = $map['DbNames'];
        }
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RestoreTime'])) {
            $model->restoreTime = $map['RestoreTime'];
        }
        if (isset($map['TargetDBInstanceId'])) {
            $model->targetDBInstanceId = $map['TargetDBInstanceId'];
        }
        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
