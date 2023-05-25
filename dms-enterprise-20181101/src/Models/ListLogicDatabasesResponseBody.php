<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLogicDatabasesResponseBody\logicDatabaseList;
use AlibabaCloud\Tea\Model;

class ListLogicDatabasesResponseBody extends Model
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
     * @description The details of logical databases.
     *
     * @var logicDatabaseList
     */
    public $logicDatabaseList;

    /**
     * @description The ID of the request.
     *
     * @example 8068AF82-8A1A-592C-AC2E-6B75338BAB87
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request is successful. Valid values:
     *
     * - **true**: The request is successful.
     * - **false**: The request fails.
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The total number of logical databases.
     *
     * @example 7
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'errorCode'         => 'ErrorCode',
        'errorMessage'      => 'ErrorMessage',
        'logicDatabaseList' => 'LogicDatabaseList',
        'requestId'         => 'RequestId',
        'success'           => 'Success',
        'totalCount'        => 'TotalCount',
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
        if (null !== $this->logicDatabaseList) {
            $res['LogicDatabaseList'] = null !== $this->logicDatabaseList ? $this->logicDatabaseList->toMap() : null;
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
     * @return ListLogicDatabasesResponseBody
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
        if (isset($map['LogicDatabaseList'])) {
            $model->logicDatabaseList = logicDatabaseList::fromMap($map['LogicDatabaseList']);
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
