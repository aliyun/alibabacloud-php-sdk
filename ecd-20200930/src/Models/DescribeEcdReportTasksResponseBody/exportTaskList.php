<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeEcdReportTasksResponseBody;

use AlibabaCloud\Tea\Model;

class exportTaskList extends Model
{
    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @example Success
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example No Data.
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @example 2025-07-14T07:46:49.000+00:00
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2025-07-14T07:46:49.000+00:00
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 80
     *
     * @var float
     */
    public $progress;

    /**
     * @example TestFileName
     *
     * @var string
     */
    public $reportFileName;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @example DESKTOP
     *
     * @var string
     */
    public $subType;

    /**
     * @example ret-asdfkjg*****
     *
     * @var string
     */
    public $taskId;

    /**
     * @example RESOURCE_REPORT
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'downloadUrl' => 'DownloadUrl',
        'errorCode' => 'ErrorCode',
        'errorMsg' => 'ErrorMsg',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'progress' => 'Progress',
        'reportFileName' => 'ReportFileName',
        'status' => 'Status',
        'subType' => 'SubType',
        'taskId' => 'TaskId',
        'taskType' => 'TaskType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->reportFileName) {
            $res['ReportFileName'] = $this->reportFileName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subType) {
            $res['SubType'] = $this->subType;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return exportTaskList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['ReportFileName'])) {
            $model->reportFileName = $map['ReportFileName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubType'])) {
            $model->subType = $map['SubType'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
