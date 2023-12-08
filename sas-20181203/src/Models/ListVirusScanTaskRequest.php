<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListVirusScanTaskRequest extends Model
{
    /**
     * @description The page number. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The timestamp when the virus scan task ended. Unit: milliseconds.
     *
     * @example 1680919232999
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The public IP address of the server.
     *
     * @example 120.27.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The private IP address of the server.
     *
     * @example 172.26.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
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
     * @description The name of the server.
     *
     * @example oracle-win-001****
     *
     * @var string
     */
    public $machineName;

    /**
     * @description The number of entries per page. Default value: **20**.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Specifies whether the virus scan task is the root task.
     *
     * @example true
     *
     * @var bool
     */
    public $rootTask;

    /**
     * @description The ID of the root task.
     *
     * >  You can call the [GetVirusScanLatestTaskStatistic](~~GetVirusScanLatestTaskStatistic~~) operation to query the ID.
     * @example 89f5d7813bd59dd237580a8664b3xxxx
     *
     * @var string
     */
    public $rootTaskId;

    /**
     * @description The type of the virus scan task. Valid values:
     *
     *   **system**: automatic scan task
     *   **user**: custom scan task
     *
     * @example user
     *
     * @var string
     */
    public $scanType;

    /**
     * @description The timestamp when the virus scan task started. Unit: milliseconds.
     *
     * @example 1680919232000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The status of the virus scan task. Valid values:
     *
     *   **1**: running
     *   **2**: complete
     *   **3**: failed
     *   **4**: timed out
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The statuses of virus scan tasks.
     *
     * @var int[]
     */
    public $statusList;

    /**
     * @description The ID of the virus scan task.
     *
     * >  You can call the [ListVirusScanTask](~~ListVirusScanTask~~) operation to query the ID.
     * @example 1471d8ebb96795b41ede090b9758****
     *
     * @var string
     */
    public $taskId;
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
        'scanType'    => 'ScanType',
        'startTime'   => 'StartTime',
        'status'      => 'Status',
        'statusList'  => 'StatusList',
        'taskId'      => 'TaskId',
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
        if (null !== $this->scanType) {
            $res['ScanType'] = $this->scanType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusList) {
            $res['StatusList'] = $this->statusList;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVirusScanTaskRequest
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
        if (isset($map['ScanType'])) {
            $model->scanType = $map['ScanType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusList'])) {
            if (!empty($map['StatusList'])) {
                $model->statusList = $map['StatusList'];
            }
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
