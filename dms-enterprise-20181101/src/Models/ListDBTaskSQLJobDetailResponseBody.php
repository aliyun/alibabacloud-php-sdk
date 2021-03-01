<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDBTaskSQLJobDetailResponseBody\DBTaskSQLJobDetailList;
use AlibabaCloud\Tea\Model;

class ListDBTaskSQLJobDetailResponseBody extends Model
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
     * @var DBTaskSQLJobDetailList[]
     */
    public $DBTaskSQLJobDetailList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId'              => 'RequestId',
        'success'                => 'Success',
        'errorMessage'           => 'ErrorMessage',
        'errorCode'              => 'ErrorCode',
        'DBTaskSQLJobDetailList' => 'DBTaskSQLJobDetailList',
        'totalCount'             => 'TotalCount',
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
        if (null !== $this->DBTaskSQLJobDetailList) {
            $res['DBTaskSQLJobDetailList'] = [];
            if (null !== $this->DBTaskSQLJobDetailList && \is_array($this->DBTaskSQLJobDetailList)) {
                $n = 0;
                foreach ($this->DBTaskSQLJobDetailList as $item) {
                    $res['DBTaskSQLJobDetailList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDBTaskSQLJobDetailResponseBody
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
        if (isset($map['DBTaskSQLJobDetailList'])) {
            if (!empty($map['DBTaskSQLJobDetailList'])) {
                $model->DBTaskSQLJobDetailList = [];
                $n                             = 0;
                foreach ($map['DBTaskSQLJobDetailList'] as $item) {
                    $model->DBTaskSQLJobDetailList[$n++] = null !== $item ? DBTaskSQLJobDetailList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
