<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncExecSqlDetailResponseBody\structSyncExecSqlDetail;
use AlibabaCloud\Tea\Model;

class GetStructSyncExecSqlDetailResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var structSyncExecSqlDetail
     */
    public $structSyncExecSqlDetail;
    protected $_name = [
        'requestId'               => 'RequestId',
        'success'                 => 'Success',
        'errorMessage'            => 'ErrorMessage',
        'errorCode'               => 'ErrorCode',
        'structSyncExecSqlDetail' => 'StructSyncExecSqlDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->structSyncExecSqlDetail) {
            $res['StructSyncExecSqlDetail'] = null !== $this->structSyncExecSqlDetail ? $this->structSyncExecSqlDetail->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['StructSyncExecSqlDetail'])) {
            $model->structSyncExecSqlDetail = structSyncExecSqlDetail::fromMap($map['StructSyncExecSqlDetail']);
        }

        return $model;
    }
}
