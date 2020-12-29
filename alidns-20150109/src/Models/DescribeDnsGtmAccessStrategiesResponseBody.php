<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategiesResponseBody\strategies;
use AlibabaCloud\Tea\Model;

class DescribeDnsGtmAccessStrategiesResponseBody extends Model
{
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

    /**
     * @var strategies[]
     */
    public $strategies;

    /**
     * @var int
     */
    public $totalPages;

    /**
     * @var int
     */
    public $totalItems;
    protected $_name = [
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'pageNumber' => 'PageNumber',
        'strategies' => 'Strategies',
        'totalPages' => 'TotalPages',
        'totalItems' => 'TotalItems',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->strategies) {
            $res['Strategies'] = [];
            if (null !== $this->strategies && \is_array($this->strategies)) {
                $n = 0;
                foreach ($this->strategies as $item) {
                    $res['Strategies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalPages) {
            $res['TotalPages'] = $this->totalPages;
        }
        if (null !== $this->totalItems) {
            $res['TotalItems'] = $this->totalItems;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDnsGtmAccessStrategiesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['Strategies'])) {
            if (!empty($map['Strategies'])) {
                $model->strategies = [];
                $n                 = 0;
                foreach ($map['Strategies'] as $item) {
                    $model->strategies[$n++] = null !== $item ? strategies::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalPages'])) {
            $model->totalPages = $map['TotalPages'];
        }
        if (isset($map['TotalItems'])) {
            $model->totalItems = $map['TotalItems'];
        }

        return $model;
    }
}
