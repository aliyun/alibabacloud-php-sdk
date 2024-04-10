<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\SDK\Cr\V20181201\Models\ListScanBaselineByTaskResponseBody\scanBaselines;
use AlibabaCloud\Tea\Model;

class ListScanBaselineByTaskResponseBody extends Model
{
    /**
     * @example success
     *
     * @var int
     */
    public $code;

    /**
     * @example true
     *
     * @var bool
     */
    public $isSuccess;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Id of the request
     *
     * @example 5259118F-79E2-57E9-9AEA-551586F4FAED
     *
     * @var string
     */
    public $requestId;

    /**
     * @var scanBaselines[]
     */
    public $scanBaselines;

    /**
     * @example 2
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'code'          => 'Code',
        'isSuccess'     => 'IsSuccess',
        'pageNo'        => 'PageNo',
        'pageSize'      => 'PageSize',
        'requestId'     => 'RequestId',
        'scanBaselines' => 'ScanBaselines',
        'totalCount'    => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scanBaselines) {
            $res['ScanBaselines'] = [];
            if (null !== $this->scanBaselines && \is_array($this->scanBaselines)) {
                $n = 0;
                foreach ($this->scanBaselines as $item) {
                    $res['ScanBaselines'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListScanBaselineByTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScanBaselines'])) {
            if (!empty($map['ScanBaselines'])) {
                $model->scanBaselines = [];
                $n                    = 0;
                foreach ($map['ScanBaselines'] as $item) {
                    $model->scanBaselines[$n++] = null !== $item ? scanBaselines::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
