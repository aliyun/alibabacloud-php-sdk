<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCloudMigrationPrecheckResultResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The content of the assessment report.
     *
     * @example [Check rds empty]\nCheck rds databases: success\n[Check source connectivity]\nCheck ip connectable: success\nCheck port connectable: success\nCheck database connectable: success\nCheck account replication privilege: success\nCheck account createrole privilege: success\nCheck account monitor privilege: success\n[Check source version]\nCheck major version consistent: success\n[Check source glibc version]\nCheck source glibc version compatible: warning(warning:source glibc version is not compatible with rds pg)\n[Check disk size]\nCheck disk size enough: success\n[Check wal keep size]\nCheck wal keep size large enough: success\n[Check spec params]\nCheck if spec params too large: success\n [Check triggers]\nCheck triggers compatible: success\n[Check user functions]\nCheck user functions compatible: success\n*Migrate check success*
     *
     * @var string
     */
    public $detail;

    /**
     * @description The time when the task was created.
     *
     * @example 2022-02-25T06:57:41Z
     *
     * @var string
     */
    public $gmtCreated;

    /**
     * @description The time when the task was modified.
     *
     * @example 2022-02-25T06:58:00Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The username of the account.
     *
     * @example migratetest
     *
     * @var string
     */
    public $sourceAccount;

    /**
     * @description The environment in which the self-managed PostgreSQL instance runs.
     *
     *   **idcOnVpc**: The self-managed PostgreSQL instance resides in a data center. The data center can communicate with the VPC to which the ApsaraDB RDS for PostgreSQL instance belongs.
     *   **ecsOnVpc**: The self-managed PostgreSQL instance resides on an ECS instance.
     *
     * @example ecsonvpc
     *
     * @var string
     */
    public $sourceCategory;

    /**
     * @description The private IP address that is used to connect to the self-managed PostgreSQL instance.
     *
     * @example 172.2.XX.XX
     *
     * @var string
     */
    public $sourceIpAddress;

    /**
     * @description The password of the account.
     *
     * @example 123456
     *
     * @var string
     */
    public $sourcePassword;

    /**
     * @description The port number that is used to connect to the self-managed PostgreSQL instance.
     *
     * @example 5432
     *
     * @var int
     */
    public $sourcePort;

    /**
     * @description A reserved parameter. The return value of this parameter is null.
     *
     * @example null
     *
     * @var string
     */
    public $targetEip;

    /**
     * @description The ID of the destination instance.
     *
     * @example pgm-bp102g323jd4****
     *
     * @var string
     */
    public $targetInstanceName;

    /**
     * @description The ID of the task.
     *
     * @example 440420798
     *
     * @var int
     */
    public $taskId;

    /**
     * @description The name of the task.
     *
     * @example lxbv6rtxno8
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'detail'             => 'Detail',
        'gmtCreated'         => 'GmtCreated',
        'gmtModified'        => 'GmtModified',
        'sourceAccount'      => 'SourceAccount',
        'sourceCategory'     => 'SourceCategory',
        'sourceIpAddress'    => 'SourceIpAddress',
        'sourcePassword'     => 'SourcePassword',
        'sourcePort'         => 'SourcePort',
        'targetEip'          => 'TargetEip',
        'targetInstanceName' => 'TargetInstanceName',
        'taskId'             => 'TaskId',
        'taskName'           => 'TaskName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->sourceAccount) {
            $res['SourceAccount'] = $this->sourceAccount;
        }
        if (null !== $this->sourceCategory) {
            $res['SourceCategory'] = $this->sourceCategory;
        }
        if (null !== $this->sourceIpAddress) {
            $res['SourceIpAddress'] = $this->sourceIpAddress;
        }
        if (null !== $this->sourcePassword) {
            $res['SourcePassword'] = $this->sourcePassword;
        }
        if (null !== $this->sourcePort) {
            $res['SourcePort'] = $this->sourcePort;
        }
        if (null !== $this->targetEip) {
            $res['TargetEip'] = $this->targetEip;
        }
        if (null !== $this->targetInstanceName) {
            $res['TargetInstanceName'] = $this->targetInstanceName;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['SourceAccount'])) {
            $model->sourceAccount = $map['SourceAccount'];
        }
        if (isset($map['SourceCategory'])) {
            $model->sourceCategory = $map['SourceCategory'];
        }
        if (isset($map['SourceIpAddress'])) {
            $model->sourceIpAddress = $map['SourceIpAddress'];
        }
        if (isset($map['SourcePassword'])) {
            $model->sourcePassword = $map['SourcePassword'];
        }
        if (isset($map['SourcePort'])) {
            $model->sourcePort = $map['SourcePort'];
        }
        if (isset($map['TargetEip'])) {
            $model->targetEip = $map['TargetEip'];
        }
        if (isset($map['TargetInstanceName'])) {
            $model->targetInstanceName = $map['TargetInstanceName'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
