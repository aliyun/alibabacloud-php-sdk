<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionBatchSyncResponseBody\failedList;
use AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionBatchSyncResponseBody\resultList;
use AlibabaCloud\Tea\Model;

class CreateAppSessionBatchSyncResponseBody extends Model
{
    /**
     * @example 6d4d****
     *
     * @var string
     */
    public $batchId;

    /**
     * @var failedList[]
     */
    public $failedList;

    /**
     * @example 46329898-489C-4E63-9BA1-C1DA5C5D0986
     *
     * @var string
     */
    public $requestId;

    /**
     * @var resultList[]
     */
    public $resultList;
    protected $_name = [
        'batchId'    => 'BatchId',
        'failedList' => 'FailedList',
        'requestId'  => 'RequestId',
        'resultList' => 'ResultList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchId) {
            $res['BatchId'] = $this->batchId;
        }
        if (null !== $this->failedList) {
            $res['FailedList'] = [];
            if (null !== $this->failedList && \is_array($this->failedList)) {
                $n = 0;
                foreach ($this->failedList as $item) {
                    $res['FailedList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resultList) {
            $res['ResultList'] = [];
            if (null !== $this->resultList && \is_array($this->resultList)) {
                $n = 0;
                foreach ($this->resultList as $item) {
                    $res['ResultList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAppSessionBatchSyncResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchId'])) {
            $model->batchId = $map['BatchId'];
        }
        if (isset($map['FailedList'])) {
            if (!empty($map['FailedList'])) {
                $model->failedList = [];
                $n                 = 0;
                foreach ($map['FailedList'] as $item) {
                    $model->failedList[$n++] = null !== $item ? failedList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResultList'])) {
            if (!empty($map['ResultList'])) {
                $model->resultList = [];
                $n                 = 0;
                foreach ($map['ResultList'] as $item) {
                    $model->resultList[$n++] = null !== $item ? resultList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
