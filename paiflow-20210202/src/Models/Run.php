<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIFlow\V20210202\Models;

use AlibabaCloud\Tea\Model;

class Run extends Model
{
    /**
     * @example PUBLIC
     *
     * @var string
     */
    public $accessibility;

    /**
     * @example 100
     *
     * @var int
     */
    public $duration;

    /**
     * @example experiment-ybpy***
     *
     * @var string
     */
    public $experimentId;

    /**
     * @example 1638430932100
     *
     * @var int
     */
    public $finishedAt;

    /**
     * @example 2021-01-30T12:51:33.028Z
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example 2021-01-30T12:51:33.028Z
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @example error message
     *
     * @var string
     */
    public $message;

    /**
     * @example MyName
     *
     * @var string
     */
    public $name;

    /**
     * @example node-sdk**********uhrf
     *
     * @var string
     */
    public $nodeId;

    /**
     * @example 155**********904
     *
     * @var string
     */
    public $parentUserId;

    /**
     * @example flow-r2b034bh**********
     *
     * @var string
     */
    public $runId;

    /**
     * @example PaiStudio
     *
     * @var string
     */
    public $source;

    /**
     * @example 1638430932001
     *
     * @var int
     */
    public $startedAt;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @example 155**********904
     *
     * @var string
     */
    public $userId;

    /**
     * @example 78***
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accessibility'   => 'Accessibility',
        'duration'        => 'Duration',
        'experimentId'    => 'ExperimentId',
        'finishedAt'      => 'FinishedAt',
        'gmtCreateTime'   => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'message'         => 'Message',
        'name'            => 'Name',
        'nodeId'          => 'NodeId',
        'parentUserId'    => 'ParentUserId',
        'runId'           => 'RunId',
        'source'          => 'Source',
        'startedAt'       => 'StartedAt',
        'status'          => 'Status',
        'userId'          => 'UserId',
        'workspaceId'     => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->experimentId) {
            $res['ExperimentId'] = $this->experimentId;
        }
        if (null !== $this->finishedAt) {
            $res['FinishedAt'] = $this->finishedAt;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->parentUserId) {
            $res['ParentUserId'] = $this->parentUserId;
        }
        if (null !== $this->runId) {
            $res['RunId'] = $this->runId;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->startedAt) {
            $res['StartedAt'] = $this->startedAt;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Run
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['ExperimentId'])) {
            $model->experimentId = $map['ExperimentId'];
        }
        if (isset($map['FinishedAt'])) {
            $model->finishedAt = $map['FinishedAt'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['ParentUserId'])) {
            $model->parentUserId = $map['ParentUserId'];
        }
        if (isset($map['RunId'])) {
            $model->runId = $map['RunId'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['StartedAt'])) {
            $model->startedAt = $map['StartedAt'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
