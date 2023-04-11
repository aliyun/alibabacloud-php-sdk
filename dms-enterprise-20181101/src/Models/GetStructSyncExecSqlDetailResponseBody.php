<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncExecSqlDetailResponseBody\structSyncExecSqlDetail;
use AlibabaCloud\Tea\Model;

class GetStructSyncExecSqlDetailResponseBody extends Model
{
    /**
     * @description The error code.
     *
     * @example UnknownError
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message.
     *
     * @example UnknownError
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The ID of the request.
     *
     * @example 1810E635-A2D7-428B-BAA9-85DAEB9B1A77
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The details of the SQL statements.
     *
     * @var structSyncExecSqlDetail
     */
    public $structSyncExecSqlDetail;

    /**
     * @description Indicates whether the request is successful.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorCode'               => 'ErrorCode',
        'errorMessage'            => 'ErrorMessage',
        'requestId'               => 'RequestId',
        'structSyncExecSqlDetail' => 'StructSyncExecSqlDetail',
        'success'                 => 'Success',
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
        if (null !== $this->structSyncExecSqlDetail) {
            $res['StructSyncExecSqlDetail'] = null !== $this->structSyncExecSqlDetail ? $this->structSyncExecSqlDetail->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStructSyncExecSqlDetailResponseBody
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
        if (isset($map['StructSyncExecSqlDetail'])) {
            $model->structSyncExecSqlDetail = structSyncExecSqlDetail::fromMap($map['StructSyncExecSqlDetail']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
