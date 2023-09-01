<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstancesResponseBody\DBInstances;
use AlibabaCloud\Tea\Model;

class DescribeDBInstancesResponseBody extends Model
{
    /**
     * @var DBInstances[]
     */
    public $DBInstances;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example C458B1E8-1683-3645-B154-6BA32080EEA
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 30
     *
     * @var int
     */
    public $totalNumber;
    protected $_name = [
        'DBInstances' => 'DBInstances',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'requestId'   => 'RequestId',
        'totalNumber' => 'TotalNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstances) {
            $res['DBInstances'] = [];
            if (null !== $this->DBInstances && \is_array($this->DBInstances)) {
                $n = 0;
                foreach ($this->DBInstances as $item) {
                    $res['DBInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalNumber) {
            $res['TotalNumber'] = $this->totalNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstances'])) {
            if (!empty($map['DBInstances'])) {
                $model->DBInstances = [];
                $n                  = 0;
                foreach ($map['DBInstances'] as $item) {
                    $model->DBInstances[$n++] = null !== $item ? DBInstances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalNumber'])) {
            $model->totalNumber = $map['TotalNumber'];
        }

        return $model;
    }
}
