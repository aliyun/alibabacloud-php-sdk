<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class DebuggerJob extends Model
{
    /**
     * @description debugger分析作业ID
     *
     * @var string
     */
    public $debuggerJobId;

    /**
     * @description 作业显示名
     *
     * @var string
     */
    public $displayName;

    /**
     * @description 作业运行的时长（单位秒）
     *
     * @var string
     */
    public $duration;

    /**
     * @description 创建时间（UTC）
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @description 失败时间（UTC）
     *
     * @var string
     */
    public $gmtFailedTime;

    /**
     * @description 任务完成时间（UTC）
     *
     * @var string
     */
    public $gmtFinishTime;

    /**
     * @description 运行开始时间（UTC）
     *
     * @var string
     */
    public $gmtRunningTime;

    /**
     * @description 结束时间（UTC）
     *
     * @var string
     */
    public $gmtStoppedTime;

    /**
     * @description 提交时间（UTC）
     *
     * @var string
     */
    public $gmtSubmittedTime;

    /**
     * @description 成功结束时间（UTC）
     *
     * @var string
     */
    public $gmtSucceedTime;

    /**
     * @description 作业运行状态
     *
     * @var string
     */
    public $status;

    /**
     * @description 用户ID
     *
     * @var string
     */
    public $userId;

    /**
     * @description 作业所属的运行工作空间
     *
     * @var string
     */
    public $workspaceId;

    /**
     * @description 作业所属的运行工作空间名称
     *
     * @var string
     */
    public $workspaceName;
    protected $_name = [
        'debuggerJobId'    => 'DebuggerJobId',
        'displayName'      => 'DisplayName',
        'duration'         => 'Duration',
        'gmtCreateTime'    => 'GmtCreateTime',
        'gmtFailedTime'    => 'GmtFailedTime',
        'gmtFinishTime'    => 'GmtFinishTime',
        'gmtRunningTime'   => 'GmtRunningTime',
        'gmtStoppedTime'   => 'GmtStoppedTime',
        'gmtSubmittedTime' => 'GmtSubmittedTime',
        'gmtSucceedTime'   => 'GmtSucceedTime',
        'status'           => 'Status',
        'userId'           => 'UserId',
        'workspaceId'      => 'WorkspaceId',
        'workspaceName'    => 'WorkspaceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->debuggerJobId) {
            $res['DebuggerJobId'] = $this->debuggerJobId;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtFailedTime) {
            $res['GmtFailedTime'] = $this->gmtFailedTime;
        }
        if (null !== $this->gmtFinishTime) {
            $res['GmtFinishTime'] = $this->gmtFinishTime;
        }
        if (null !== $this->gmtRunningTime) {
            $res['GmtRunningTime'] = $this->gmtRunningTime;
        }
        if (null !== $this->gmtStoppedTime) {
            $res['GmtStoppedTime'] = $this->gmtStoppedTime;
        }
        if (null !== $this->gmtSubmittedTime) {
            $res['GmtSubmittedTime'] = $this->gmtSubmittedTime;
        }
        if (null !== $this->gmtSucceedTime) {
            $res['GmtSucceedTime'] = $this->gmtSucceedTime;
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
        if (null !== $this->workspaceName) {
            $res['WorkspaceName'] = $this->workspaceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DebuggerJob
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DebuggerJobId'])) {
            $model->debuggerJobId = $map['DebuggerJobId'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtFailedTime'])) {
            $model->gmtFailedTime = $map['GmtFailedTime'];
        }
        if (isset($map['GmtFinishTime'])) {
            $model->gmtFinishTime = $map['GmtFinishTime'];
        }
        if (isset($map['GmtRunningTime'])) {
            $model->gmtRunningTime = $map['GmtRunningTime'];
        }
        if (isset($map['GmtStoppedTime'])) {
            $model->gmtStoppedTime = $map['GmtStoppedTime'];
        }
        if (isset($map['GmtSubmittedTime'])) {
            $model->gmtSubmittedTime = $map['GmtSubmittedTime'];
        }
        if (isset($map['GmtSucceedTime'])) {
            $model->gmtSucceedTime = $map['GmtSucceedTime'];
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
        if (isset($map['WorkspaceName'])) {
            $model->workspaceName = $map['WorkspaceName'];
        }

        return $model;
    }
}
