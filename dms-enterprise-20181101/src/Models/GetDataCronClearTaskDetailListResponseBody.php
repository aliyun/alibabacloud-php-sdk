<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCronClearTaskDetailListResponseBody\dataCronClearTaskDetailList;
use AlibabaCloud\Tea\Model;

class GetDataCronClearTaskDetailListResponseBody extends Model
{
    /**
     * @var dataCronClearTaskDetailList[]
     */
    public $dataCronClearTaskDetailList;

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
     * @example C1D39814-9808-47F8-AFE0-AF167239AC9B
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
        'dataCronClearTaskDetailList' => 'DataCronClearTaskDetailList',
        'errorCode'                   => 'ErrorCode',
        'errorMessage'                => 'ErrorMessage',
        'requestId'                   => 'RequestId',
        'success'                     => 'Success',
        'totalCount'                  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataCronClearTaskDetailList) {
            $res['DataCronClearTaskDetailList'] = [];
            if (null !== $this->dataCronClearTaskDetailList && \is_array($this->dataCronClearTaskDetailList)) {
                $n = 0;
                foreach ($this->dataCronClearTaskDetailList as $item) {
                    $res['DataCronClearTaskDetailList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return GetDataCronClearTaskDetailListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataCronClearTaskDetailList'])) {
            if (!empty($map['DataCronClearTaskDetailList'])) {
                $model->dataCronClearTaskDetailList = [];
                $n                                  = 0;
                foreach ($map['DataCronClearTaskDetailList'] as $item) {
                    $model->dataCronClearTaskDetailList[$n++] = null !== $item ? dataCronClearTaskDetailList::fromMap($item) : $item;
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
