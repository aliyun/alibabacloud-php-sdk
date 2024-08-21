<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateReplicationLinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example pgm-bp1trqb4p1xd****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description This parameter is required.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

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
     * @example testInstance
     *
     * @var string
     */
    public $sourceInstanceName;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $sourceInstanceRegionId;

    /**
     * @example 5432
     *
     * @var int
     */
    public $sourcePort;

    /**
     * @example 439946016
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CreateReplicationLinkRequest
     */
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
