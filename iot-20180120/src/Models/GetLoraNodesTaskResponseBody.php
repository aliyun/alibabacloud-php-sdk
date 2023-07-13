<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\GetLoraNodesTaskResponseBody\successDevEuis;
use AlibabaCloud\Tea\Model;

class GetLoraNodesTaskResponseBody extends Model
{
    /**
     * @description The error code returned if the request fails. For more information, see [Error codes](~~87387~~).
     *
     * @example iot.system.SystemException
     *
     * @var string
     */
    public $code;

    /**
     * @description The error message returned if the request fails.
     *
     * @example A system exception occurred.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The request ID.
     *
     * @example E55E50B7-40EE-4B6B-8BBE-D3ED55CCF565
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The number of devices that were created.
     *
     * @example 100
     *
     * @var int
     */
    public $successCount;

    /**
     * @var successDevEuis
     */
    public $successDevEuis;

    /**
     * @description The task ID returned if the request is successful.
     *
     * @example 625***
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The task status.
     *
     *   **RUNNING**: The task is in progress.
     *   **FINISH**: The task is completed.
     *
     * @example RUNNING
     *
     * @var string
     */
    public $taskState;

    /**
     * @description The total number of devices that you want to create.
     *
     * @example 200
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'code'           => 'Code',
        'errorMessage'   => 'ErrorMessage',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
        'successCount'   => 'SuccessCount',
        'successDevEuis' => 'SuccessDevEuis',
        'taskId'         => 'TaskId',
        'taskState'      => 'TaskState',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }
        if (null !== $this->successDevEuis) {
            $res['SuccessDevEuis'] = null !== $this->successDevEuis ? $this->successDevEuis->toMap() : null;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskState) {
            $res['TaskState'] = $this->taskState;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLoraNodesTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }
        if (isset($map['SuccessDevEuis'])) {
            $model->successDevEuis = successDevEuis::fromMap($map['SuccessDevEuis']);
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskState'])) {
            $model->taskState = $map['TaskState'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
