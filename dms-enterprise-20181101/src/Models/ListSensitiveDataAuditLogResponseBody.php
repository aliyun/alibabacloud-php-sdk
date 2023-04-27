<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveDataAuditLogResponseBody\sensitiveDataAuditLogList;
use AlibabaCloud\Tea\Model;

class ListSensitiveDataAuditLogResponseBody extends Model
{
    /**
     * @example 403
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example UnknownError
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example E0D21075-CD3E-4D98-8264-FD8AD04A63B6
     *
     * @var string
     */
    public $requestId;

    /**
     * @var sensitiveDataAuditLogList[]
     */
    public $sensitiveDataAuditLogList;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'errorCode'                 => 'ErrorCode',
        'errorMessage'              => 'ErrorMessage',
        'requestId'                 => 'RequestId',
        'sensitiveDataAuditLogList' => 'SensitiveDataAuditLogList',
        'success'                   => 'Success',
        'totalCount'                => 'TotalCount',
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
        if (null !== $this->sensitiveDataAuditLogList) {
            $res['SensitiveDataAuditLogList'] = [];
            if (null !== $this->sensitiveDataAuditLogList && \is_array($this->sensitiveDataAuditLogList)) {
                $n = 0;
                foreach ($this->sensitiveDataAuditLogList as $item) {
                    $res['SensitiveDataAuditLogList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return ListSensitiveDataAuditLogResponseBody
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
        if (isset($map['SensitiveDataAuditLogList'])) {
            if (!empty($map['SensitiveDataAuditLogList'])) {
                $model->sensitiveDataAuditLogList = [];
                $n                                = 0;
                foreach ($map['SensitiveDataAuditLogList'] as $item) {
                    $model->sensitiveDataAuditLogList[$n++] = null !== $item ? sensitiveDataAuditLogList::fromMap($item) : $item;
                }
            }
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
