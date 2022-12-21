<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSQLExecAuditLogResponseBody\SQLExecAuditLogList;
use AlibabaCloud\Tea\Model;

class ListSQLExecAuditLogResponseBody extends Model
{
    /**
     * @description The error code returned.
     *
     * @example MissingStartTime
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message returned.
     *
     * @example StartTime is mandatory for this action.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The ID of the request.
     *
     * @example 39BC9C86-95AE-58F2-9862-A7C3D896****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The entries returned.
     *
     * @var SQLExecAuditLogList
     */
    public $SQLExecAuditLogList;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   **true**: The request was successful.
     *   **false**: The request failed.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The number of entries returned.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'errorCode'           => 'ErrorCode',
        'errorMessage'        => 'ErrorMessage',
        'requestId'           => 'RequestId',
        'SQLExecAuditLogList' => 'SQLExecAuditLogList',
        'success'             => 'Success',
        'totalCount'          => 'TotalCount',
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
        if (null !== $this->SQLExecAuditLogList) {
            $res['SQLExecAuditLogList'] = null !== $this->SQLExecAuditLogList ? $this->SQLExecAuditLogList->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSQLExecAuditLogResponseBody
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
        if (isset($map['SQLExecAuditLogList'])) {
            $model->SQLExecAuditLogList = SQLExecAuditLogList::fromMap($map['SQLExecAuditLogList']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
