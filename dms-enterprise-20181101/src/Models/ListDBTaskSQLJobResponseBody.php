<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDBTaskSQLJobResponseBody\DBTaskSQLJobList;
use AlibabaCloud\Tea\Model;

class ListDBTaskSQLJobResponseBody extends Model
{
    /**
     * @var DBTaskSQLJobList[]
     */
    public $DBTaskSQLJobList;

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
     * @example F6C47680-8D2D-43A4-8902-F2740D71A398
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

    /**
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'DBTaskSQLJobList' => 'DBTaskSQLJobList',
        'errorCode'        => 'ErrorCode',
        'errorMessage'     => 'ErrorMessage',
        'requestId'        => 'RequestId',
        'success'          => 'Success',
        'totalCount'       => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBTaskSQLJobList) {
            $res['DBTaskSQLJobList'] = [];
            if (null !== $this->DBTaskSQLJobList && \is_array($this->DBTaskSQLJobList)) {
                $n = 0;
                foreach ($this->DBTaskSQLJobList as $item) {
                    $res['DBTaskSQLJobList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDBTaskSQLJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBTaskSQLJobList'])) {
            if (!empty($map['DBTaskSQLJobList'])) {
                $model->DBTaskSQLJobList = [];
                $n                       = 0;
                foreach ($map['DBTaskSQLJobList'] as $item) {
                    $model->DBTaskSQLJobList[$n++] = null !== $item ? DBTaskSQLJobList::fromMap($item) : $item;
                }
            }
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
