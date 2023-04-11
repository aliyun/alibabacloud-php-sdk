<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetLogicDatabaseResponseBody\logicDatabase;
use AlibabaCloud\Tea\Model;

class GetLogicDatabaseResponseBody extends Model
{
    /**
     * @description The status code.
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
     * @description The details of the logical database.
     *
     * @var logicDatabase
     */
    public $logicDatabase;

    /**
     * @description The ID of the request.
     *
     * @example 90260530-565C-42B9-A6E8-893481FE6AB6
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   true: The request was successful.
     *   false: The request failed.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorCode'     => 'ErrorCode',
        'errorMessage'  => 'ErrorMessage',
        'logicDatabase' => 'LogicDatabase',
        'requestId'     => 'RequestId',
        'success'       => 'Success',
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
        if (null !== $this->logicDatabase) {
            $res['LogicDatabase'] = null !== $this->logicDatabase ? $this->logicDatabase->toMap() : null;
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
     * @return GetLogicDatabaseResponseBody
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
        if (isset($map['LogicDatabase'])) {
            $model->logicDatabase = logicDatabase::fromMap($map['LogicDatabase']);
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
