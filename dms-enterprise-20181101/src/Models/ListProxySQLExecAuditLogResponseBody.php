<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListProxySQLExecAuditLogResponseBody\proxySQLExecAuditLogList;
use AlibabaCloud\Tea\Model;

class ListProxySQLExecAuditLogResponseBody extends Model
{
    /**
     * @description The error code returned.
     *
     * @example InvalidStartTime
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message returned.
     *
     * @example Specified parameter StartTime is not valid.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The audit information about the database instance that is provided by the secure access proxy feature.
     *
     * @var proxySQLExecAuditLogList
     */
    public $proxySQLExecAuditLogList;

    /**
     * @description The ID of the request.
     *
     * @example 50ECB006-2C35-5FCA-91B9-01987A0B****
     *
     * @var string
     */
    public $requestId;

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
        'errorCode'                => 'ErrorCode',
        'errorMessage'             => 'ErrorMessage',
        'proxySQLExecAuditLogList' => 'ProxySQLExecAuditLogList',
        'requestId'                => 'RequestId',
        'success'                  => 'Success',
        'totalCount'               => 'TotalCount',
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
        if (null !== $this->proxySQLExecAuditLogList) {
            $res['ProxySQLExecAuditLogList'] = null !== $this->proxySQLExecAuditLogList ? $this->proxySQLExecAuditLogList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
     * @return ListProxySQLExecAuditLogResponseBody
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
        if (isset($map['ProxySQLExecAuditLogList'])) {
            $model->proxySQLExecAuditLogList = proxySQLExecAuditLogList::fromMap($map['ProxySQLExecAuditLogList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
