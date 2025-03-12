<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListAgentlessTaskRequest extends Model
{
    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The end timestamp of the task.
     *
     * @example 1635575219000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The public IP address of the asset that you want to query.
     *
     * @example 1.1.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The private IP address of the asset that you want to query.
     *
     * @example 172.26.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description The language type. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The name of the instance.
     *
     * @example oracle-win-001****
     *
     * @var string
     */
    public $machineName;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Specifies whether to query main tasks. Valid values:
     *
     *   **true**: queries main tasks.
     *   **false**: queries subtasks.
     *
     * @example false
     *
     * @var bool
     */
    public $rootTask;

    /**
     * @description The ID of the main task.
     *
     * @example 12c27343861610c5db3f7a2573b4****
     *
     * @var string
     */
    public $rootTaskId;

    /**
     * @description The start timestamp of the task.
     *
     * @example 1651290987000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The status of the detection task.
     *
     *   **1**: The detection task is in progress.
     *   **2**: The detection task is complete.
     *   **3**: The detection task fails.
     *   **4**: The detection task times out.
     *
     * @example 2
     *
     * @var int
     */
    public $status;

    /**
     * @description The name of the asset that you want to detect.
     *
     * @example source-test-obj-0****
     *
     * @var string
     */
    public $targetName;

    /**
     * @description The type of the asset that you want to detect. Valid values:
     *
     *   **1**: snapshot
     *   **2**: image
     *
     * @example 1
     *
     * @var int
     */
    public $targetType;

    /**
     * @description The ID of the main task. If you want to query subtasks of a main task, you must specify this parameter.
     *
     * @example d7b2acf8d362742123e4a84e1bf8****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The UUID of the server.
     *
     * @example e4af3620-6895-4e2f-a641-a9d8fb53****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'endTime'     => 'EndTime',
        'internetIp'  => 'InternetIp',
        'intranetIp'  => 'IntranetIp',
        'lang'        => 'Lang',
        'machineName' => 'MachineName',
        'pageSize'    => 'PageSize',
        'rootTask'    => 'RootTask',
        'rootTaskId'  => 'RootTaskId',
        'startTime'   => 'StartTime',
        'status'      => 'Status',
        'targetName'  => 'TargetName',
        'targetType'  => 'TargetType',
        'taskId'      => 'TaskId',
        'uuid'        => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->machineName) {
            $res['MachineName'] = $this->machineName;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->rootTask) {
            $res['RootTask'] = $this->rootTask;
        }
        if (null !== $this->rootTaskId) {
            $res['RootTaskId'] = $this->rootTaskId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->targetName) {
            $res['TargetName'] = $this->targetName;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAgentlessTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['MachineName'])) {
            $model->machineName = $map['MachineName'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RootTask'])) {
            $model->rootTask = $map['RootTask'];
        }
        if (isset($map['RootTaskId'])) {
            $model->rootTaskId = $map['RootTaskId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TargetName'])) {
            $model->targetName = $map['TargetName'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
