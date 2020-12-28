<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeReservedInstancesResponseBody\reservedInstances;
use AlibabaCloud\Tea\Model;

class DescribeReservedInstancesResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

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
     * @var reservedInstances[]
     */
    public $reservedInstances;
    protected $_name = [
        'totalCount'        => 'TotalCount',
        'pageSize'          => 'PageSize',
        'requestId'         => 'RequestId',
        'pageNumber'        => 'PageNumber',
        'reservedInstances' => 'ReservedInstances',
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
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->reservedInstances) {
            $res['ReservedInstances'] = [];
            if (null !== $this->reservedInstances && \is_array($this->reservedInstances)) {
                $n = 0;
                foreach ($this->reservedInstances as $item) {
                    $res['ReservedInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeReservedInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
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
        if (isset($map['ReservedInstances'])) {
            if (!empty($map['ReservedInstances'])) {
                $model->reservedInstances = [];
                $n                        = 0;
                foreach ($map['ReservedInstances'] as $item) {
                    $model->reservedInstances[$n++] = null !== $item ? reservedInstances::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
