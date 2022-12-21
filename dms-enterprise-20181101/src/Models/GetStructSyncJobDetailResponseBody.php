<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncJobDetailResponseBody\structSyncJobDetail;
use AlibabaCloud\Tea\Model;

class GetStructSyncJobDetailResponseBody extends Model
{
    /**
     * @description The error code that is returned.
     *
     * @example UnknownError
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message that is returned.
     *
     * @example UnknownError
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The ID of the request.
     *
     * @example 48602B78-0DDF-414C-8688-70CAB6070115
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The details of the schema synchronization task.
     *
     * @var structSyncJobDetail
     */
    public $structSyncJobDetail;

    /**
     * @description Indicates whether the call was successful.
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
