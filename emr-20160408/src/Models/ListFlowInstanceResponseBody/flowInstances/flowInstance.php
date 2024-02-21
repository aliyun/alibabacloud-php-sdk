<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowInstanceResponseBody\flowInstances;

use AlibabaCloud\Tea\Model;

class flowInstance extends Model
{
    /**
     * @example C-F32FB31D8295****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example 12000
     *
     * @var int
     */
    public $duration;

    /**
     * @example 1540796248000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example F-35683D0E4573****
     *
     * @var string
     */
    public $flowId;

    /**
     * @example flow-hive
     *
     * @var string
     */
    public $flowName;

    /**
     * @example 1540796248000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 1540796248000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @example false
     *
     * @var bool
     */
    public $hasNodeFailed;

    /**
     * @example FI-7CAF9709CD32****
     *
     * @var string
     */
    public $id;

    /**
     * @example ****
     *
     * @var string
     */
    public $owner;

    /**
     * @example FP-7A1018ADE917****
     *
     * @var string
     */
    public $projectId;

    /**
     * @example 1554110977000
     *
     * @var int
     */
    public $scheduleTime;

    /**
     * @example 1540796236000
     *
     * @var int
     */
    public $startTime;

    /**
     * @example SUCCEEDED
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'clusterId'     => 'ClusterId',
        'duration'      => 'Duration',
        'endTime'       => 'EndTime',
        'flowId'        => 'FlowId',
        'flowName'      => 'FlowName',
        'gmtCreate'     => 'GmtCreate',
        'gmtModified'   => 'GmtModified',
        'hasNodeFailed' => 'HasNodeFailed',
        'id'            => 'Id',
        'owner'         => 'Owner',
        'projectId'     => 'ProjectId',
        'scheduleTime'  => 'ScheduleTime',
        'startTime'     => 'StartTime',
        'status'        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }
        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->hasNodeFailed) {
            $res['HasNodeFailed'] = $this->hasNodeFailed;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->scheduleTime) {
            $res['ScheduleTime'] = $this->scheduleTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flowInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }
        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['HasNodeFailed'])) {
            $model->hasNodeFailed = $map['HasNodeFailed'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ScheduleTime'])) {
            $model->scheduleTime = $map['ScheduleTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
