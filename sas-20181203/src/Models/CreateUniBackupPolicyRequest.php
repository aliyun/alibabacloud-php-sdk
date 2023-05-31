<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateUniBackupPolicyRequest extends Model
{
    /**
     * @description The name of the database account.
     *
     * @example admin
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The password of the database account.
     *
     * @example Pass****
     *
     * @var string
     */
    public $accountPassword;

    /**
     * @description Specifies whether the database is manually added. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var string
     */
    public $databaseAddByUser;

    /**
     * @description The type of the database. Valid values:
     *
     *   **MYSQL**
     *   **ORACLE**
     *   **MSSQL**
     *
     * @example MYSQL
     *
     * @var string
     */
    public $databaseType;

    /**
     * @description The policy for full backup. The value of this parameter is a JSON string that contains the following fields:
     *
     *   **start**: the start time of a backup task
     *   **interval**: the interval of backup tasks
     *   **type**: the unit of the interval
     *   **days**: the days of a week on which a backup task is performed
     *
     * @example {"days":[4],"interval":1,"planType":"weekly","startTime":"22:00:00"}
     *
     * @var mixed[]
     */
    public $fullPlan;

    /**
     * @description The policy for incremental backup. The value of this parameter is a JSON string that contains the following fields:
     *
     *   **start**: the start time of a backup task
     *   **interval**: the interval of backup tasks
     *   **type**: the unit of the interval
     *   **days**: the days of a week on which a backup task is performed
     *
     * @example {"interval":1,"planType":"daily","startTime":"23:30:00"}
     *
     * @var mixed[]
     */
    public $incPlan;

    /**
     * @description The ID of the Elastic Compute Service (ECS) instance.
     *
     * >  You can call the [DescribeUniBackupDatabase](~~DescribeUniBackupDatabase~~) operation to query the IDs of ECS instances.
     * @example i-bp1fu4aqltf1huhc****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the anti-ransomware policy.
     *
     * @example mysql-policy
     *
     * @var string
     */
    public $policyName;

    /**
     * @description The retention period of backup data.
     *
     * @example 7
     *
     * @var int
     */
    public $retention;

    /**
     * @description The maximum network bandwidth that is allowed during data backup. Unit: bytes.
     *
     * @example 5242880
     *
     * @var int
     */
    public $speedLimiter;

    /**
     * @description The region in which the server resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $uniRegionId;

    /**
     * @description The UUID of the server whose data is backed up based on the anti-ransomware policy.
     *
     * >  You can call the [DescribeCloudCenterInstances](~~141932~~) operation to query the UUIDs of servers.
     * @example 045cad48-eb08-4047-a70c-713aec7b****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'accountName'       => 'AccountName',
        'accountPassword'   => 'AccountPassword',
        'databaseAddByUser' => 'DatabaseAddByUser',
        'databaseType'      => 'DatabaseType',
        'fullPlan'          => 'FullPlan',
        'incPlan'           => 'IncPlan',
        'instanceId'        => 'InstanceId',
        'policyName'        => 'PolicyName',
        'retention'         => 'Retention',
        'speedLimiter'      => 'SpeedLimiter',
        'uniRegionId'       => 'UniRegionId',
        'uuid'              => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->accountPassword) {
            $res['AccountPassword'] = $this->accountPassword;
        }
        if (null !== $this->databaseAddByUser) {
            $res['DatabaseAddByUser'] = $this->databaseAddByUser;
        }
        if (null !== $this->databaseType) {
            $res['DatabaseType'] = $this->databaseType;
        }
        if (null !== $this->fullPlan) {
            $res['FullPlan'] = $this->fullPlan;
        }
        if (null !== $this->incPlan) {
            $res['IncPlan'] = $this->incPlan;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->retention) {
            $res['Retention'] = $this->retention;
        }
        if (null !== $this->speedLimiter) {
            $res['SpeedLimiter'] = $this->speedLimiter;
        }
        if (null !== $this->uniRegionId) {
            $res['UniRegionId'] = $this->uniRegionId;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUniBackupPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['AccountPassword'])) {
            $model->accountPassword = $map['AccountPassword'];
        }
        if (isset($map['DatabaseAddByUser'])) {
            $model->databaseAddByUser = $map['DatabaseAddByUser'];
        }
        if (isset($map['DatabaseType'])) {
            $model->databaseType = $map['DatabaseType'];
        }
        if (isset($map['FullPlan'])) {
            $model->fullPlan = $map['FullPlan'];
        }
        if (isset($map['IncPlan'])) {
            $model->incPlan = $map['IncPlan'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['Retention'])) {
            $model->retention = $map['Retention'];
        }
        if (isset($map['SpeedLimiter'])) {
            $model->speedLimiter = $map['SpeedLimiter'];
        }
        if (isset($map['UniRegionId'])) {
            $model->uniRegionId = $map['UniRegionId'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
