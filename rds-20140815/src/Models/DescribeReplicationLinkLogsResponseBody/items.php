<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeReplicationLinkLogsResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $detail;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $replicationInfo;

    /**
     * @var string
     */
    public $replicationState;

    /**
     * @var string
     */
    public $replicatorAccount;

    /**
     * @var string
     */
    public $replicatorPassword;

    /**
     * @var string
     */
    public $sourceAddress;

    /**
     * @var string
     */
    public $sourceCategory;

    /**
     * @var int
     */
    public $sourcePort;

    /**
     * @var string
     */
    public $targetInstanceId;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $taskStage;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var string
     */
    public $taskType;
    protected $_name = [
        'detail' => 'Detail',
        'gmtCreated' => 'GmtCreated',
        'gmtModified' => 'GmtModified',
        'replicationInfo' => 'ReplicationInfo',
        'replicationState' => 'ReplicationState',
        'replicatorAccount' => 'ReplicatorAccount',
        'replicatorPassword' => 'ReplicatorPassword',
        'sourceAddress' => 'SourceAddress',
        'sourceCategory' => 'SourceCategory',
        'sourcePort' => 'SourcePort',
        'targetInstanceId' => 'TargetInstanceId',
        'taskId' => 'TaskId',
        'taskName' => 'TaskName',
        'taskStage' => 'TaskStage',
        'taskStatus' => 'TaskStatus',
        'taskType' => 'TaskType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
