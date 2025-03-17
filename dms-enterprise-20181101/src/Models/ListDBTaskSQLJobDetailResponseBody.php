<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDBTaskSQLJobDetailResponseBody\DBTaskSQLJobDetailList;
use AlibabaCloud\Tea\Model;

class ListDBTaskSQLJobDetailResponseBody extends Model
{
    /**
     * @description The details of SQL tasks.
     *
     * @var DBTaskSQLJobDetailList[]
     */
    public $DBTaskSQLJobDetailList;

    /**
     * @description The error code that is returned.
     *
     * @example MissingJobId
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message that is returned.
     *
     * @example JobId is mandatory for this action.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The ID of the request.
     *
     * @example 3F044E33-FE09-58F1-8C61-A0F612EC****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request is successful. Valid values:
     *
     *   **true**: The request is successful.
     *   **false**: The request fails.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The total number of SQL tasks.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'DBTaskSQLJobDetailList' => 'DBTaskSQLJobDetailList',
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBTaskSQLJobDetailList) {
            $res['DBTaskSQLJobDetailList'] = [];
            if (null !== $this->DBTaskSQLJobDetailList && \is_array($this->DBTaskSQLJobDetailList)) {
                $n = 0;
                foreach ($this->DBTaskSQLJobDetailList as $item) {
                    $res['DBTaskSQLJobDetailList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListDBTaskSQLJobDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBTaskSQLJobDetailList'])) {
            if (!empty($map['DBTaskSQLJobDetailList'])) {
                $model->DBTaskSQLJobDetailList = [];
                $n = 0;
                foreach ($map['DBTaskSQLJobDetailList'] as $item) {
                    $model->DBTaskSQLJobDetailList[$n++] = null !== $item ? DBTaskSQLJobDetailList::fromMap($item) : $item;
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
