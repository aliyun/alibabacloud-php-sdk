<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ListCallTaskResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The type of the task template. Valid values:
     *
     *   **VMS_VOICE_TTS**: the TTS notification template.
     *   **VMS_VOICE_CODE**: the voice notification template.
     *   **VMS_TTS**: the voice verification code template.
     *
     * @example VMS_VOICE_TTS
     *
     * @var string
     */
    public $bizType;

    /**
     * @description The time when the task was completed. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1614330986000
     *
     * @var string
     */
    public $completeTime;

    /**
     * @description The number of tasks that were complete.
     *
     * @example 2
     *
     * @var int
     */
    public $completedCount;

    /**
     * @description The task progress.
     *
     * @example 26%
     *
     * @var int
     */
    public $completedRate;

    /**
     * @description This parameter is unavailable.
     *
     * @example 1
     *
     * @var string
     */
    public $data;

    /**
     * @description The type of the called number.
     *
     * @example LIST
     *
     * @var string
     */
    public $dataType;

    /**
     * @description The time when the scheduled task was started. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1614330978000
     *
     * @var string
     */
    public $fireTime;

    /**
     * @description The task ID.
     *
     * @example 123879546214
     *
     * @var int
     */
    public $id;

    /**
     * @description The calling number.
     *
     * @example 0571000****
     *
     * @var string
     */
    public $resource;

    /**
     * @description The task state. Valid values:
     *
     *   **INIT**: The task was in the initial state.
     *   **RELEASE**: The task was being parsed.
     *   **RUNNING**: The task was running.
     *   **STOP**: The task was manually suspended.
     *   **SYSTEM_STOP**: The task was suspended by the system.
     *   **CANCEL**: The task was manually canceled.
     *   **SYSTEM_CANCEL**: The task was canceled by the system.
     *   **DONE**: The task was complete.
     *
     * @example DONE
     *
     * @var string
     */
    public $status;

    /**
     * @description This parameter is unavailable.
     *
     * @example 1
     *
     * @var string
     */
    public $stopTime;

    /**
     * @description The task name.
     *
     * @example Aliyun
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The ID of the voice template.
     *
     * @example TTS_2100****
     *
     * @var string
     */
    public $templateCode;

    /**
     * @description The template name.
     *
     * @example Test Template
     *
     * @var string
     */
    public $templateName;

    /**
     * @description The total number of called numbers.
     *
     * @example 600
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'bizType'        => 'BizType',
        'completeTime'   => 'CompleteTime',
        'completedCount' => 'CompletedCount',
        'completedRate'  => 'CompletedRate',
        'data'           => 'Data',
        'dataType'       => 'DataType',
        'fireTime'       => 'FireTime',
        'id'             => 'Id',
        'resource'       => 'Resource',
        'status'         => 'Status',
        'stopTime'       => 'StopTime',
        'taskName'       => 'TaskName',
        'templateCode'   => 'TemplateCode',
        'templateName'   => 'TemplateName',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->completeTime) {
            $res['CompleteTime'] = $this->completeTime;
        }
        if (null !== $this->completedCount) {
            $res['CompletedCount'] = $this->completedCount;
        }
        if (null !== $this->completedRate) {
            $res['CompletedRate'] = $this->completedRate;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->fireTime) {
            $res['FireTime'] = $this->fireTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->stopTime) {
            $res['StopTime'] = $this->stopTime;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['CompleteTime'])) {
            $model->completeTime = $map['CompleteTime'];
        }
        if (isset($map['CompletedCount'])) {
            $model->completedCount = $map['CompletedCount'];
        }
        if (isset($map['CompletedRate'])) {
            $model->completedRate = $map['CompletedRate'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['FireTime'])) {
            $model->fireTime = $map['FireTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StopTime'])) {
            $model->stopTime = $map['StopTime'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
