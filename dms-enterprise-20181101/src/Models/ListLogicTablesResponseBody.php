<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLogicTablesResponseBody\logicTableList;
use AlibabaCloud\Tea\Model;

class ListLogicTablesResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var logicTableList
     */
    public $logicTableList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'totalCount'     => 'TotalCount',
        'logicTableList' => 'LogicTableList',
        'requestId'      => 'RequestId',
        'errorCode'      => 'ErrorCode',
        'errorMessage'   => 'ErrorMessage',
        'success'        => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->logicTableList) {
            $res['LogicTableList'] = null !== $this->logicTableList ? $this->logicTableList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLogicTablesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['LogicTableList'])) {
            $model->logicTableList = logicTableList::fromMap($map['LogicTableList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
