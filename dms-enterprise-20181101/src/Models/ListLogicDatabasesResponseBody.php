<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLogicDatabasesResponseBody\logicDatabaseList;

class ListLogicDatabasesResponseBody extends Model
{
    /**
     * @var string
     */
    public $errorCode;
    /**
     * @var string
     */
    public $errorMessage;
    /**
     * @var logicDatabaseList
     */
    public $logicDatabaseList;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var bool
     */
    public $success;
    /**
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
        if (null !== $this->logicDatabaseList) {
            $this->logicDatabaseList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->logicDatabaseList) {
            $res['LogicDatabaseList'] = null !== $this->logicDatabaseList ? $this->logicDatabaseList->toArray($noStream) : $this->logicDatabaseList;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
