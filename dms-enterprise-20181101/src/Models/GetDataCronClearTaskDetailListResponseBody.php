<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCronClearTaskDetailListResponseBody\dataCronClearTaskDetailList;

class GetDataCronClearTaskDetailListResponseBody extends Model
{
    /**
     * @var dataCronClearTaskDetailList[]
     */
    public $dataCronClearTaskDetailList;

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
        'dataCronClearTaskDetailList' => 'DataCronClearTaskDetailList',
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->dataCronClearTaskDetailList)) {
            Model::validateArray($this->dataCronClearTaskDetailList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataCronClearTaskDetailList) {
            if (\is_array($this->dataCronClearTaskDetailList)) {
                $res['DataCronClearTaskDetailList'] = [];
                $n1 = 0;
                foreach ($this->dataCronClearTaskDetailList as $item1) {
                    $res['DataCronClearTaskDetailList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DataCronClearTaskDetailList'])) {
            if (!empty($map['DataCronClearTaskDetailList'])) {
                $model->dataCronClearTaskDetailList = [];
                $n1 = 0;
                foreach ($map['DataCronClearTaskDetailList'] as $item1) {
                    $model->dataCronClearTaskDetailList[$n1++] = dataCronClearTaskDetailList::fromMap($item1);
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
