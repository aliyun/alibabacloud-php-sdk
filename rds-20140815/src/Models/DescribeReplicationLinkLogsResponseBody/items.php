<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeReplicationLinkLogsResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example [Check rds empty]\\nCheck rds databases: success\\n[Check source connectivity]\\nCheck ip connectable: success\\nCheck port connectable: success\\nCheck database connectable: success\\nCheck account replication privilege: success\\nCheck account createrole privilege: success\\nCheck account monitor privilege: success\\n[Check source version]\\nCheck major version consistent: success\\n[Check source glibc version]\\nCheck source glibc version compatible: warning(warning:source glibc version is not compatible with rds pg)\\n[Check disk size]\\nCheck disk size enough: success\\n[Check wal keep size]\\nCheck wal keep size large enough: success\\n[Check spec params]\\nCheck if spec params too large: success\\n [Check triggers]\\nCheck triggers compatible: success\\n[Check user functions]\\nCheck user functions compatible: success\\n*Migrate check success*
     *
     * @var string
     */
    public $detail;

    /**
     * @example 2022-02-25T06:57:41Z
     *
     * @var string
     */
    public $gmtCreated;

    /**
     * @example 2022-03-01T06:39:51Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example None
     *
     * @var string
     */
    public $replicationInfo;

    /**
     * @example finish
     *
     * @var string
     */
    public $replicationState;

    /**
     * @example testdbuser
     *
     * @var string
     */
    public $replicatorAccount;

    /**
     * @example testpassword
     *
     * @var string
     */
    public $replicatorPassword;

    /**
     * @example pgm-****.pg.rds.aliyuncs.com
     *
     * @var string
     */
    public $sourceAddress;

    /**
     * @example aliyunRDS
     *
     * @var string
     */
    public $sourceCategory;

    /**
     * @example 5432
     *
     * @var int
     */
    public $sourcePort;

    /**
     * @example pgm-bp1l4dutw453****
     *
     * @var string
     */
    public $targetInstanceId;

    /**
     * @example 8413252
     *
     * @var int
     */
    public $taskId;

    /**
     * @example test01
     *
     * @var string
     */
    public $taskName;

    /**
     * @example increment
     *
     * @var string
     */
    public $taskStage;

    /**
     * @example success
     *
     * @var string
     */
    public $taskStatus;

    /**
     * @example create
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'detail'             => 'Detail',
        'gmtCreated'         => 'GmtCreated',
        'gmtModified'        => 'GmtModified',
        'replicationInfo'    => 'ReplicationInfo',
        'replicationState'   => 'ReplicationState',
        'replicatorAccount'  => 'ReplicatorAccount',
        'replicatorPassword' => 'ReplicatorPassword',
        'sourceAddress'      => 'SourceAddress',
        'sourceCategory'     => 'SourceCategory',
        'sourcePort'         => 'SourcePort',
        'targetInstanceId'   => 'TargetInstanceId',
        'taskId'             => 'TaskId',
        'taskName'           => 'TaskName',
        'taskStage'          => 'TaskStage',
        'taskStatus'         => 'TaskStatus',
        'taskType'           => 'TaskType',
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
        if (null !== $this->replicationInfo) {
            $res['ReplicationInfo'] = $this->replicationInfo;
        }
        if (null !== $this->replicationState) {
            $res['ReplicationState'] = $this->replicationState;
        }
        if (null !== $this->replicatorAccount) {
            $res['ReplicatorAccount'] = $this->replicatorAccount;
        }
        if (null !== $this->replicatorPassword) {
            $res['ReplicatorPassword'] = $this->replicatorPassword;
        }
        if (null !== $this->sourceAddress) {
            $res['SourceAddress'] = $this->sourceAddress;
        }
        if (null !== $this->sourceCategory) {
            $res['SourceCategory'] = $this->sourceCategory;
        }
        if (null !== $this->sourcePort) {
            $res['SourcePort'] = $this->sourcePort;
        }
        if (null !== $this->targetInstanceId) {
            $res['TargetInstanceId'] = $this->targetInstanceId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskStage) {
            $res['TaskStage'] = $this->taskStage;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
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
        if (isset($map['ReplicationInfo'])) {
            $model->replicationInfo = $map['ReplicationInfo'];
        }
        if (isset($map['ReplicationState'])) {
            $model->replicationState = $map['ReplicationState'];
        }
        if (isset($map['ReplicatorAccount'])) {
            $model->replicatorAccount = $map['ReplicatorAccount'];
        }
        if (isset($map['ReplicatorPassword'])) {
            $model->replicatorPassword = $map['ReplicatorPassword'];
        }
        if (isset($map['SourceAddress'])) {
            $model->sourceAddress = $map['SourceAddress'];
        }
        if (isset($map['SourceCategory'])) {
            $model->sourceCategory = $map['SourceCategory'];
        }
        if (isset($map['SourcePort'])) {
            $model->sourcePort = $map['SourcePort'];
        }
        if (isset($map['TargetInstanceId'])) {
            $model->targetInstanceId = $map['TargetInstanceId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskStage'])) {
            $model->taskStage = $map['TaskStage'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
