<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListInstanceLoginAuditLogResponseBody\instanceLoginAuditLogList;
use AlibabaCloud\Tea\Model;

class ListInstanceLoginAuditLogResponseBody extends Model
{
    /**
     * @description The ID of the user.
     *
     * @example InvalidPageSize
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The number of the page to return.
     *
     * @example Specified parameter PageSize is not valid.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The database account that is used to log on to the instance.
     *
     * @var instanceLoginAuditLogList
     */
    public $instanceLoginAuditLogList;

    /**
     * @description The error message returned.
     *
     * @example 074CE7C9-4F9C-5B62-89BC-7B4914A3****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The beginning of the time range to query.
     *
     * >  The start time supports fuzzy match. Specify the time in the YYYY-MM-DD hh:mm:ss format.
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The number of entries to return on each page. Maximum value: 100.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'errorCode'                 => 'ErrorCode',
        'errorMessage'              => 'ErrorMessage',
        'instanceLoginAuditLogList' => 'InstanceLoginAuditLogList',
        'requestId'                 => 'RequestId',
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
        if (null !== $this->instanceLoginAuditLogList) {
            $res['InstanceLoginAuditLogList'] = null !== $this->instanceLoginAuditLogList ? $this->instanceLoginAuditLogList->toMap() : null;
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
     * @return ListInstanceLoginAuditLogResponseBody
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
        if (isset($map['InstanceLoginAuditLogList'])) {
            $model->instanceLoginAuditLogList = instanceLoginAuditLogList::fromMap($map['InstanceLoginAuditLogList']);
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
