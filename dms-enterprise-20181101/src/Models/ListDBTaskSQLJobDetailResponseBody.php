<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDBTaskSQLJobDetailResponseBody\DBTaskSQLJobDetailList;

class ListDBTaskSQLJobDetailResponseBody extends Model
{
    /**
     * @var DBTaskSQLJobDetailList[]
     */
    public $DBTaskSQLJobDetailList;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

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
        'DBTaskSQLJobDetailList' => 'DBTaskSQLJobDetailList',
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->DBTaskSQLJobDetailList)) {
            Model::validateArray($this->DBTaskSQLJobDetailList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBTaskSQLJobDetailList) {
            if (\is_array($this->DBTaskSQLJobDetailList)) {
                $res['DBTaskSQLJobDetailList'] = [];
                $n1 = 0;
                foreach ($this->DBTaskSQLJobDetailList as $item1) {
                    $res['DBTaskSQLJobDetailList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBTaskSQLJobDetailList'])) {
            if (!empty($map['DBTaskSQLJobDetailList'])) {
                $model->DBTaskSQLJobDetailList = [];
                $n1 = 0;
                foreach ($map['DBTaskSQLJobDetailList'] as $item1) {
                    $model->DBTaskSQLJobDetailList[$n1] = DBTaskSQLJobDetailList::fromMap($item1);
                    ++$n1;
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
