<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeBatchResultDetailResponseBody\batchResultDetails;
use AlibabaCloud\Tea\Model;

class DescribeBatchResultDetailResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var batchResultDetails[]
     */
    public $batchResultDetails;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageNumber;
    protected $_name = [
        'totalCount'         => 'TotalCount',
        'batchResultDetails' => 'BatchResultDetails',
        'pageSize'           => 'PageSize',
        'requestId'          => 'RequestId',
        'pageNumber'         => 'PageNumber',
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
        if (null !== $this->batchResultDetails) {
            $res['BatchResultDetails'] = [];
            if (null !== $this->batchResultDetails && \is_array($this->batchResultDetails)) {
                $n = 0;
                foreach ($this->batchResultDetails as $item) {
                    $res['BatchResultDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBatchResultDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['BatchResultDetails'])) {
            if (!empty($map['BatchResultDetails'])) {
                $model->batchResultDetails = [];
                $n                         = 0;
                foreach ($map['BatchResultDetails'] as $item) {
                    $model->batchResultDetails[$n++] = null !== $item ? batchResultDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        return $model;
    }
}
