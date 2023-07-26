<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20210101\Models;

use AlibabaCloud\Tea\Model;

class CreateSandboxInstanceRequest extends Model
{
    /**
     * @description The ID of the backup schedule. You can call the [DescribeBackupPlanList](~~437215~~) operation to obtain the ID of the backup schedule.
     *
     * > If your instance is an ApsaraDB RDS for MySQL instance, you can [configure automatic access to a data source](~~193091~~) to automatically add the instance to DBS and obtain the ID of the backup schedule.
     * @example 1hxxxx8xxxxxa
     *
     * @var string
     */
    public $backupPlanId;

    /**
     * @description The ID of the backup set to be restored, which is the point in time when a snapshot was created. You can call the [DescribeSandboxBackupSets](~~437256~~) operation to obtain the ID.
     *
     * > You need to specify only one of the **BackupSetId** and **RestoreTime** parameters.
     * @example 1hxxxx8xxxxxa_20210829064228
     *
     * @var string
     */
    public $backupSetId;

    /**
     * @description The point in time of the sandbox instance to be restored. You can call the [DescribeSandboxRecoveryTime](~~437258~~) operation to view the recoverable time range. Specify the time in the format of *yyyy-MM-ddTHH:mm:ssZ*. The time must be in UTC.
     *
     * @example 2021-08-01T12:01:01Z
     *
     * @var string
     */
    public $restoreTime;

    /**
     * @description The custom name of the sandbox instance.
     *
     * @example test_sandbox
     *
     * @var string
     */
    public $sandboxInstanceName;

    /**
     * @description The password of the privileged account created in the sandbox instance.
     *
     * @example password123
     *
     * @var string
     */
    public $sandboxPassword;

    /**
     * @description The specifications of the sandbox instance. Valid values:
     *
     *   **MYSQL\_1C\_1M_SD**: 1 CPU core and 1 GB of memory.
     *   **MYSQL\_1C\_2M_SD**: 1 CPU core and 2 GB of memory.
     *   **MYSQL\_2C\_4M_SD**: 2 CPU cores and 4 GB of memory.
     *   **MYSQL\_2C\_8M_SD**: 2 CPU cores and 8 GB of memory.
     *   **MYSQL\_4C\_8M_SD**: 4 CPU cores and 8 GB of memory.
     *   **MYSQL\_4C\_16M_SD**: 4 CPU cores and 16 GB of memory.
     *   **MYSQL\_8C\_16M_SD**: 8 CPU cores and 16 GB of memory.
     *   **MYSQL\_8C\_32M_SD**: 8 CPU cores and 32 GB of memory.
     *
     * > Different specifications have little impact on the recovery speed. High-specification instances provide better performance after restoration. For more information, see [DBS sandbox fees](~~201466~~).
     * @example MYSQL_1C_1M_SD
     *
     * @var string
     */
    public $sandboxSpecification;

    /**
     * @description The type of the sandbox instance. You can call this operation only to create an instance of the **Sandbox** type. After the sandbox instance is created, the MySQL endpoint of the instance is provided.
     *
     * @example Sandbox
     *
     * @var string
     */
    public $sandboxType;

    /**
     * @description The privileged account created in the sandbox instance.
     *
     *   After you specify this parameter, the system creates a privileged account in the sandbox instance. The account is granted the permissions on all databases in the instance.
     *
     * The account of the source database is retained in the sandbox instance.
     *
     *   If you do not specify this parameter, the database account is the same as that of the source database.
     *
     * @example root_test
     *
     * @var string
     */
    public $sandboxUser;

    /**
     * @description The ID of the virtual private cloud (VPC) that is used to connect to the sandbox instance. If you want to connect to the sandbox instance by using Elastic Compute Service (ECS) instances, you must set this parameter to the VPC in which the ECS instances reside.
     *
     * > You can set this parameter if you want to use it in a recovery drill scenario.
     * @example vpc-bp1dxxxxxjy0xxxxx1xxp
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The ID of the VSwitch that is used to connect to the sandbox instance.
     *
     * @example vsw-bp1bxxxxxumxxxxxwxxx9
     *
     * @var string
     */
    public $vpcSwitchId;
    protected $_name = [
        'backupPlanId'         => 'BackupPlanId',
        'backupSetId'          => 'BackupSetId',
        'restoreTime'          => 'RestoreTime',
        'sandboxInstanceName'  => 'SandboxInstanceName',
        'sandboxPassword'      => 'SandboxPassword',
        'sandboxSpecification' => 'SandboxSpecification',
        'sandboxType'          => 'SandboxType',
        'sandboxUser'          => 'SandboxUser',
        'vpcId'                => 'VpcId',
        'vpcSwitchId'          => 'VpcSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupPlanId) {
            $res['BackupPlanId'] = $this->backupPlanId;
        }
        if (null !== $this->backupSetId) {
            $res['BackupSetId'] = $this->backupSetId;
        }
        if (null !== $this->restoreTime) {
            $res['RestoreTime'] = $this->restoreTime;
        }
        if (null !== $this->sandboxInstanceName) {
            $res['SandboxInstanceName'] = $this->sandboxInstanceName;
        }
        if (null !== $this->sandboxPassword) {
            $res['SandboxPassword'] = $this->sandboxPassword;
        }
        if (null !== $this->sandboxSpecification) {
            $res['SandboxSpecification'] = $this->sandboxSpecification;
        }
        if (null !== $this->sandboxType) {
            $res['SandboxType'] = $this->sandboxType;
        }
        if (null !== $this->sandboxUser) {
            $res['SandboxUser'] = $this->sandboxUser;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpcSwitchId) {
            $res['VpcSwitchId'] = $this->vpcSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSandboxInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupPlanId'])) {
            $model->backupPlanId = $map['BackupPlanId'];
        }
        if (isset($map['BackupSetId'])) {
            $model->backupSetId = $map['BackupSetId'];
        }
        if (isset($map['RestoreTime'])) {
            $model->restoreTime = $map['RestoreTime'];
        }
        if (isset($map['SandboxInstanceName'])) {
            $model->sandboxInstanceName = $map['SandboxInstanceName'];
        }
        if (isset($map['SandboxPassword'])) {
            $model->sandboxPassword = $map['SandboxPassword'];
        }
        if (isset($map['SandboxSpecification'])) {
            $model->sandboxSpecification = $map['SandboxSpecification'];
        }
        if (isset($map['SandboxType'])) {
            $model->sandboxType = $map['SandboxType'];
        }
        if (isset($map['SandboxUser'])) {
            $model->sandboxUser = $map['SandboxUser'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpcSwitchId'])) {
            $model->vpcSwitchId = $map['VpcSwitchId'];
        }

        return $model;
    }
}
