<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCloudMigrationResultResponseBody;

use AlibabaCloud\Tea\Model;

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
    public $migrateStage;

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
    public $sourceAccount;

    /**
     * @var string
     */
    public $sourceCategory;

    /**
     * @var string
     */
    public $sourceIpAddress;

    /**
     * @var string
     */
    public $sourcePassword;

    /**
     * @var int
     */
    public $sourcePort;

    /**
     * @var string
     */
    public $switchTime;

    /**
     * @var string
     */
    public $targetEip;

    /**
     * @var string
     */
    public $targetInstanceName;

    /**
     * @var int
     */
    public $taskId;

    /**
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
