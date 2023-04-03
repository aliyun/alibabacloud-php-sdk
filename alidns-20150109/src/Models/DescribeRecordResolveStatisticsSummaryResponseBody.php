<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeRecordResolveStatisticsSummaryResponseBody\statistics;
use AlibabaCloud\Tea\Model;

class DescribeRecordResolveStatisticsSummaryResponseBody extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description RequestId
     *
     * @example 389DFFA3-77A5-4A9E-BF3D-147C6F98A5BA
     *
     * @var string
     */
    public $requestId;

    /**
     * @var statistics[]
     */
    public $statistics;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalItems;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalPages;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'statistics' => 'Statistics',
        'totalItems' => 'TotalItems',
        'totalPages' => 'TotalPages',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->statistics) {
            $res['Statistics'] = [];
            if (null !== $this->statistics && \is_array($this->statistics)) {
                $n = 0;
                foreach ($this->statistics as $item) {
                    $res['Statistics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalItems) {
            $res['TotalItems'] = $this->totalItems;
        }
        if (null !== $this->totalPages) {
            $res['TotalPages'] = $this->totalPages;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRecordResolveStatisticsSummaryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Statistics'])) {
            if (!empty($map['Statistics'])) {
                $model->statistics = [];
                $n                 = 0;
                foreach ($map['Statistics'] as $item) {
                    $model->statistics[$n++] = null !== $item ? statistics::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalItems'])) {
            $model->totalItems = $map['TotalItems'];
        }
        if (isset($map['TotalPages'])) {
            $model->totalPages = $map['TotalPages'];
        }

        return $model;
    }
}
