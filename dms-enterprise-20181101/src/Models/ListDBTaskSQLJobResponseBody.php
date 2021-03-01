<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDBTaskSQLJobResponseBody\DBTaskSQLJobList;
use AlibabaCloud\Tea\Model;

class ListDBTaskSQLJobResponseBody extends Model
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
     * @var DBTaskSQLJobList[]
     */
    public $DBTaskSQLJobList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId'        => 'RequestId',
        'success'          => 'Success',
        'errorMessage'     => 'ErrorMessage',
        'errorCode'        => 'ErrorCode',
        'DBTaskSQLJobList' => 'DBTaskSQLJobList',
        'totalCount'       => 'TotalCount',
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
        if (null !== $this->DBTaskSQLJobList) {
            $res['DBTaskSQLJobList'] = [];
            if (null !== $this->DBTaskSQLJobList && \is_array($this->DBTaskSQLJobList)) {
                $n = 0;
                foreach ($this->DBTaskSQLJobList as $item) {
                    $res['DBTaskSQLJobList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListDBTaskSQLJobResponseBody
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
        if (isset($map['DBTaskSQLJobList'])) {
            if (!empty($map['DBTaskSQLJobList'])) {
                $model->DBTaskSQLJobList = [];
                $n                       = 0;
                foreach ($map['DBTaskSQLJobList'] as $item) {
                    $model->DBTaskSQLJobList[$n++] = null !== $item ? DBTaskSQLJobList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
