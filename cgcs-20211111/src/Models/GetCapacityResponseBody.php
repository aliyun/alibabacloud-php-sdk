<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\SDK\CGCS\V20211111\Models\GetCapacityResponseBody\capacities;
use AlibabaCloud\Tea\Model;

class GetCapacityResponseBody extends Model
{
    /**
     * @var capacities[]
     */
    public $capacities;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 46329898-489C-4E63-9BA1-C1DA5C5D0986
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 100
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'capacities' => 'Capacities',
        'pageNum'    => 'PageNum',
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'total'      => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->capacities) {
            $res['Capacities'] = [];
            if (null !== $this->capacities && \is_array($this->capacities)) {
                $n = 0;
                foreach ($this->capacities as $item) {
                    $res['Capacities'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCapacityResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Capacities'])) {
            if (!empty($map['Capacities'])) {
                $model->capacities = [];
                $n                 = 0;
                foreach ($map['Capacities'] as $item) {
                    $model->capacities[$n++] = null !== $item ? capacities::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
