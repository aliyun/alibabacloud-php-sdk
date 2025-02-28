<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class CreateReplicationLinkRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;
    /**
     * @var bool
     */
    public $dryRun;
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
     * @var string
     */
    public $sourceInstanceName;
    /**
     * @var string
     */
    public $sourceInstanceRegionId;
    /**
     * @var int
     */
    public $sourcePort;
    /**
     * @var int
     */
    public $taskId;
    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'DBInstanceId'           => 'DBInstanceId',
        'dryRun'                 => 'DryRun',
        'replicatorAccount'      => 'ReplicatorAccount',
        'replicatorPassword'     => 'ReplicatorPassword',
        'sourceAddress'          => 'SourceAddress',
        'sourceCategory'         => 'SourceCategory',
        'sourceInstanceName'     => 'SourceInstanceName',
        'sourceInstanceRegionId' => 'SourceInstanceRegionId',
        'sourcePort'             => 'SourcePort',
        'taskId'                 => 'TaskId',
        'taskName'               => 'TaskName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
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

        if (null !== $this->sourceInstanceName) {
            $res['SourceInstanceName'] = $this->sourceInstanceName;
        }

        if (null !== $this->sourceInstanceRegionId) {
            $res['SourceInstanceRegionId'] = $this->sourceInstanceRegionId;
        }

        if (null !== $this->sourcePort) {
            $res['SourcePort'] = $this->sourcePort;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
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
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
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

        if (isset($map['SourceInstanceName'])) {
            $model->sourceInstanceName = $map['SourceInstanceName'];
        }

        if (isset($map['SourceInstanceRegionId'])) {
            $model->sourceInstanceRegionId = $map['SourceInstanceRegionId'];
        }

        if (isset($map['SourcePort'])) {
            $model->sourcePort = $map['SourcePort'];
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
