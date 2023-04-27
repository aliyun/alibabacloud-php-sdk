<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncJobDetailResponseBody\structSyncJobDetail;
use AlibabaCloud\Tea\Model;

class GetStructSyncJobDetailResponseBody extends Model
{
    /**
     * @description The description of the task.
     *
     * @example UnknownError
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The ID of the ticket.
     *
     * @example UnknownError
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The status of the task. Valid values:
     *
     *   **NEW**: The task was created.
     *   **COMPARING**: The schemas of tables were being compared.
     *   **COMPARE_BREAK**: The schema comparison was interrupted.
     *   **COMPARE_FINISH**: The schema comparison was complete.
     *   **NOT_SCRIPTS**: The schema comparison was complete. No scripts were available.
     *   **SUBMITED_DBTASK**: The task was submitted.
     *   **DBTASK_SUCCESS**: The task was complete.
     *   **SUBMITED_WORKFLOW**: The ticket was submitted for approval.
     *   **WORKFLOW_SUCCESS**: The ticket was approved.
     *
     * @example 48602B78-0DDF-414C-8688-70CAB6070115
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 1
     *
     * @var structSyncJobDetail
     */
    public $structSyncJobDetail;

    /**
     * @description The total number of SQL statements.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorCode'           => 'ErrorCode',
        'errorMessage'        => 'ErrorMessage',
        'requestId'           => 'RequestId',
        'structSyncJobDetail' => 'StructSyncJobDetail',
        'success'             => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->structSyncJobDetail) {
            $res['StructSyncJobDetail'] = null !== $this->structSyncJobDetail ? $this->structSyncJobDetail->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStructSyncJobDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StructSyncJobDetail'])) {
            $model->structSyncJobDetail = structSyncJobDetail::fromMap($map['StructSyncJobDetail']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
