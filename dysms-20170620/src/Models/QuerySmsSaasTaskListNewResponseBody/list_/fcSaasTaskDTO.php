<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSaasTaskListNewResponseBody\list_;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsSaasTaskListNewResponseBody\list_\fcSaasTaskDTO\commParams;

class fcSaasTaskDTO extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var commParams
     */
    public $commParams;

    /**
     * @var string
     */
    public $detailDownloadUrl;

    /**
     * @var string
     */
    public $detailDownloadUrlForSuccess;

    /**
     * @var string
     */
    public $extParams;

    /**
     * @var int
     */
    public $failCount;

    /**
     * @var string
     */
    public $fireTime;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var bool
     */
    public $isDeleted;

    /**
     * @var bool
     */
    public $isPermitOrder;

    /**
     * @var bool
     */
    public $isPermitOrderForSuccess;

    /**
     * @var string
     */
    public $ossFilePath;

    /**
     * @var string
     */
    public $scheduleType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $successCount;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var int
     */
    public $taskInstanceId;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'bizType' => 'BizType',
        'commParams' => 'CommParams',
        'detailDownloadUrl' => 'DetailDownloadUrl',
        'detailDownloadUrlForSuccess' => 'DetailDownloadUrlForSuccess',
        'extParams' => 'ExtParams',
        'failCount' => 'FailCount',
        'fireTime' => 'FireTime',
        'gmtCreate' => 'GmtCreate',
        'isDeleted' => 'IsDeleted',
        'isPermitOrder' => 'IsPermitOrder',
        'isPermitOrderForSuccess' => 'IsPermitOrderForSuccess',
        'ossFilePath' => 'OssFilePath',
        'scheduleType' => 'ScheduleType',
        'status' => 'Status',
        'successCount' => 'SuccessCount',
        'taskId' => 'TaskId',
        'taskInstanceId' => 'TaskInstanceId',
        'taskName' => 'TaskName',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (null !== $this->commParams) {
            $this->commParams->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->commParams) {
            $res['CommParams'] = null !== $this->commParams ? $this->commParams->toArray($noStream) : $this->commParams;
        }

        if (null !== $this->detailDownloadUrl) {
            $res['DetailDownloadUrl'] = $this->detailDownloadUrl;
        }

        if (null !== $this->detailDownloadUrlForSuccess) {
            $res['DetailDownloadUrlForSuccess'] = $this->detailDownloadUrlForSuccess;
        }

        if (null !== $this->extParams) {
            $res['ExtParams'] = $this->extParams;
        }

        if (null !== $this->failCount) {
            $res['FailCount'] = $this->failCount;
        }

        if (null !== $this->fireTime) {
            $res['FireTime'] = $this->fireTime;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->isDeleted) {
            $res['IsDeleted'] = $this->isDeleted;
        }

        if (null !== $this->isPermitOrder) {
            $res['IsPermitOrder'] = $this->isPermitOrder;
        }

        if (null !== $this->isPermitOrderForSuccess) {
            $res['IsPermitOrderForSuccess'] = $this->isPermitOrderForSuccess;
        }

        if (null !== $this->ossFilePath) {
            $res['OssFilePath'] = $this->ossFilePath;
        }

        if (null !== $this->scheduleType) {
            $res['ScheduleType'] = $this->scheduleType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskInstanceId) {
            $res['TaskInstanceId'] = $this->taskInstanceId;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['CommParams'])) {
            $model->commParams = commParams::fromMap($map['CommParams']);
        }

        if (isset($map['DetailDownloadUrl'])) {
            $model->detailDownloadUrl = $map['DetailDownloadUrl'];
        }

        if (isset($map['DetailDownloadUrlForSuccess'])) {
            $model->detailDownloadUrlForSuccess = $map['DetailDownloadUrlForSuccess'];
        }

        if (isset($map['ExtParams'])) {
            $model->extParams = $map['ExtParams'];
        }

        if (isset($map['FailCount'])) {
            $model->failCount = $map['FailCount'];
        }

        if (isset($map['FireTime'])) {
            $model->fireTime = $map['FireTime'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['IsDeleted'])) {
            $model->isDeleted = $map['IsDeleted'];
        }

        if (isset($map['IsPermitOrder'])) {
            $model->isPermitOrder = $map['IsPermitOrder'];
        }

        if (isset($map['IsPermitOrderForSuccess'])) {
            $model->isPermitOrderForSuccess = $map['IsPermitOrderForSuccess'];
        }

        if (isset($map['OssFilePath'])) {
            $model->ossFilePath = $map['OssFilePath'];
        }

        if (isset($map['ScheduleType'])) {
            $model->scheduleType = $map['ScheduleType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskInstanceId'])) {
            $model->taskInstanceId = $map['TaskInstanceId'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
