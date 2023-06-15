<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCloudMigrationResultResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The details of the task.
     *
     * @example [Check rds empty]\nCheck rds databases: success\n[Check source connectivity]\nCheck ip connectable: success\nCheck port connectable: success\nCheck database connectable: success\nCheck account replication privilege: success\nCheck account createrole privilege: success\nCheck account monitor privilege: success\n[Check source version]\nCheck major version consistent: success\n[Check source glibc version]\nCheck source glibc version compatible: warning(warning:source glibc version is not compatible with rds pg)\n[Check disk size]\nCheck disk size enough: success\n[Check wal keep size]\nCheck wal keep size large enough: success\n[Check spec params]\nCheck if spec params too large: success\n[Start RDS instance]\n2022-02-25 17:00:29 --- Start RDS instance as slave for data replication\n[Synchronize data]\n2022-02-25 17:01:05 --- Synchronize data from source to RDS by streaming replication \n
     *
     * @var string
     */
    public $detail;

    /**
     * @description The time when the task was created.
     *
     * @example 2022-02-25T08:53:13Z
     *
     * @var string
     */
    public $gmtCreated;

    /**
     * @description The time when the task was modified.
     *
     * @example 2022-03-01T06:39:51Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The migration phase in which the task stays.
     *
     *   **precheck**: precheck
     *   **basebackup**: full data backup
     *   **startup**: link establishment
     *   **increment**: incremental data synchronization
     *   **switch**: cloud migration-triggered switchover
     *   **success**: cloud migration completed
     *
     * @example switch
     *
     * @var string
     */
    public $migrateStage;

    /**
     * @description The information about the replication link.
     *
     * @example {\"Status\":\"streaming\",\"ReceiveStartLsn\":\"0/3000000\",\"ReceivedTli\":\"1\",\"LatestEndTime\":\"2022-02-25 17:03:59.3344+08\",\"Synced\":\"true\",\"IsSlave\":\"true\",\"ReplayTimestamp\":\"null\",\"LastMsgSendTime\":\"2022-03-01 14:42:57.967537+08\",\"Conninfo\":\"user=migratetest password=******** channel_binding=prefer dbname=replication host=172.16.254.203 port=5432 application_name=rds_db_instance fallback_application_name=walreceiver sslmode=prefer sslcompression=1 sslsni=1 ssl_min_protocol_version=TLSv1.2 gssencmode=prefer krbsrvname=postgres target_session_attrs=any\",\"LastMsgReceiptTime\":\"2022-03-01 14:42:57.96727+08\",\"LatestEndLsn\":\"0/3000148\",\"ReceivedLsn\":\"0/3000148\",\"ReplayLsn\":\"0/3000148\",\"ReceiveStartTli\":\"1\",\"ReplayLag\":\"0\"}
     *
     * @var string
     */
    public $replicationInfo;

    /**
     * @description The status of data replication.
     *
     *   **unstarted**
     *   **catchup**
     *   **streaming**
     *   **disconnect**
     *   **finish**
     *
     * @example streaming
     *
     * @var string
     */
    public $replicationState;

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
     * @example 172.16.XX.XX
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
     * @description The time when a switchover was performed.
     *
     * @example 2022-03-01T06:40:51Z
     *
     * @var string
     */
    public $switchTime;

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
     * @example 440437220
     *
     * @var int
     */
    public $taskId;

    /**
     * @description The name of the task.
     *
     * @example 362c6c7a-4d20-4eac-898c-1495ceab374c
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'detail'             => 'Detail',
        'gmtCreated'         => 'GmtCreated',
        'gmtModified'        => 'GmtModified',
        'migrateStage'       => 'MigrateStage',
        'replicationInfo'    => 'ReplicationInfo',
        'replicationState'   => 'ReplicationState',
        'sourceAccount'      => 'SourceAccount',
        'sourceCategory'     => 'SourceCategory',
        'sourceIpAddress'    => 'SourceIpAddress',
        'sourcePassword'     => 'SourcePassword',
        'sourcePort'         => 'SourcePort',
        'switchTime'         => 'SwitchTime',
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
        if (null !== $this->migrateStage) {
            $res['MigrateStage'] = $this->migrateStage;
        }
        if (null !== $this->replicationInfo) {
            $res['ReplicationInfo'] = $this->replicationInfo;
        }
        if (null !== $this->replicationState) {
            $res['ReplicationState'] = $this->replicationState;
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
        if (null !== $this->switchTime) {
            $res['SwitchTime'] = $this->switchTime;
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
        if (isset($map['MigrateStage'])) {
            $model->migrateStage = $map['MigrateStage'];
        }
        if (isset($map['ReplicationInfo'])) {
            $model->replicationInfo = $map['ReplicationInfo'];
        }
        if (isset($map['ReplicationState'])) {
            $model->replicationState = $map['ReplicationState'];
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
        if (isset($map['SwitchTime'])) {
            $model->switchTime = $map['SwitchTime'];
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
