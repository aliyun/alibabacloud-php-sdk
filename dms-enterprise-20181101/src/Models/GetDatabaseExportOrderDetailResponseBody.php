<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDatabaseExportOrderDetailResponseBody\databaseExportOrderDetail;
use AlibabaCloud\Tea\Model;

class GetDatabaseExportOrderDetailResponseBody extends Model
{
    /**
     * @var databaseExportOrderDetail
     */
    public $databaseExportOrderDetail;

    /**
     * @example UnknownError
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
     * @example CFD8FE00-36D9-4C1B-940D-65A7B73D9066
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'databaseExportOrderDetail' => 'DatabaseExportOrderDetail',
        'errorCode'                 => 'ErrorCode',
        'errorMessage'              => 'ErrorMessage',
        'requestId'                 => 'RequestId',
        'success'                   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->databaseExportOrderDetail) {
            $res['DatabaseExportOrderDetail'] = null !== $this->databaseExportOrderDetail ? $this->databaseExportOrderDetail->toMap() : null;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDatabaseExportOrderDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatabaseExportOrderDetail'])) {
            $model->databaseExportOrderDetail = databaseExportOrderDetail::fromMap($map['DatabaseExportOrderDetail']);
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
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

        return $model;
    }
}
