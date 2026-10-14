<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIDeepSign\V20260511\Models;

use AlibabaCloud\Dara\Model;

class GetC2paSignResultResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var int
     */
    public $failedCount;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $reportFileUrl;

    /**
     * @var string
     */
    public $reportObjectKey;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $signedFileUrl;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $succeededCount;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'code' => 'Code',
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'failedCount' => 'FailedCount',
        'httpStatusCode' => 'HttpStatusCode',
        'message' => 'Message',
        'reportFileUrl' => 'ReportFileUrl',
        'reportObjectKey' => 'ReportObjectKey',
        'requestId' => 'RequestId',
        'signedFileUrl' => 'SignedFileUrl',
        'status' => 'Status',
        'succeededCount' => 'SucceededCount',
        'success' => 'Success',
        'taskId' => 'TaskId',
        'taskType' => 'TaskType',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->failedCount) {
            $res['FailedCount'] = $this->failedCount;
        }

        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->reportFileUrl) {
            $res['ReportFileUrl'] = $this->reportFileUrl;
        }

        if (null !== $this->reportObjectKey) {
            $res['ReportObjectKey'] = $this->reportObjectKey;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->signedFileUrl) {
            $res['SignedFileUrl'] = $this->signedFileUrl;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->succeededCount) {
            $res['SucceededCount'] = $this->succeededCount;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['FailedCount'])) {
            $model->failedCount = $map['FailedCount'];
        }

        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['ReportFileUrl'])) {
            $model->reportFileUrl = $map['ReportFileUrl'];
        }

        if (isset($map['ReportObjectKey'])) {
            $model->reportObjectKey = $map['ReportObjectKey'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SignedFileUrl'])) {
            $model->signedFileUrl = $map['SignedFileUrl'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SucceededCount'])) {
            $model->succeededCount = $map['SucceededCount'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
