<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListProxySQLExecAuditLogResponseBody\proxySQLExecAuditLogList;
use AlibabaCloud\Tea\Model;

class ListProxySQLExecAuditLogResponseBody extends Model
{
    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var proxySQLExecAuditLogList
     */
    public $proxySQLExecAuditLogList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
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
