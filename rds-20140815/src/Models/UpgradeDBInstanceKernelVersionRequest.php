<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class UpgradeDBInstanceKernelVersionRequest extends Model
{
    /**
     * @description The instance ID. You can call the DescribeDBInstances operation to query the instance ID.
     *
     * > *   If your instance runs PostgreSQL, you must make sure that the instance uses **cloud disks**. If the instance uses local disks, you must call the [RestartDBInstance](~~26230~~) operation to restart the instance. The system automatically updates the minor engine version of the instance to the latest version during the restart.
     * > *   If your instance runs SQL Server, you must make sure that the instance runs SQL Server 2019.
     * @example rm-bpxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

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
     * @description The update time. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * > This parameter takes effect only when you set **UpgradeTime** to **SpecifyTime**.
     * @example 2020-01-15T00:00:00Z
     *
     * @var string
     */
    public $switchTime;

    /**
     * @description The minor engine version to which you want to update. Format:
     *
     *   **PostgreSQL**: `rds_postgres_<Major engine version>00_<Minor engine version>`. Example: `rds_postgres_1200_20200830`.
     *
     *   **MySQL**: `<RDS edition and MySQL version>_<Minor engine version>`. Examples: `rds_20200229`, `xcluster_20200229`, and `xcluster80_20200229`. The following RDS editions and MySQL versions are supported:
     *
     *   **rds**: RDS Basic Edition or RDS High-availability Edition
     *   **xcluster**: MySQL 5.7 on RDS Enterprise Edition
     *   **xcluster80**: MySQL 8.0 on RDS Enterprise Edition
     *
     *   **SQLServer**: `<Minor engine version>`. Example: `15.0.4073.23`.
     *
     * >  For more information about minor engine versions, see [Release notes of AliPG](~~126002~~), [Release notes of AliSQL](~~96060~~), and [Release notes of minor engine versions of ApsaraDB RDS for SQL Server](~~213577~~).
     * @example xcluster80_20210305
     *
     * @var string
     */
    public $targetMinorVersion;

    /**
     * @description The time when the update takes effect. Valid values:
     *
     *   **Immediate** (default): The update takes effect immediately.
     *   **MaintainTime**: The update takes effect during the maintenance window that you specify. For more information about how to change the maintenance window, see ModifyDBInstanceMaintainTime.
     *   **SpecifyTime**: The update takes effect at the point in time you specify.
     *
     * @example Immediate
     *
     * @var string
     */
    public $upgradeTime;
    protected $_name = [
        'DBInstanceId'         => 'DBInstanceId',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'switchTime'           => 'SwitchTime',
        'targetMinorVersion'   => 'TargetMinorVersion',
        'upgradeTime'          => 'UpgradeTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
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
        if (null !== $this->switchTime) {
            $res['SwitchTime'] = $this->switchTime;
        }
        if (null !== $this->targetMinorVersion) {
            $res['TargetMinorVersion'] = $this->targetMinorVersion;
        }
        if (null !== $this->upgradeTime) {
            $res['UpgradeTime'] = $this->upgradeTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeDBInstanceKernelVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
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
        if (isset($map['SwitchTime'])) {
            $model->switchTime = $map['SwitchTime'];
        }
        if (isset($map['TargetMinorVersion'])) {
            $model->targetMinorVersion = $map['TargetMinorVersion'];
        }
        if (isset($map['UpgradeTime'])) {
            $model->upgradeTime = $map['UpgradeTime'];
        }

        return $model;
    }
}
