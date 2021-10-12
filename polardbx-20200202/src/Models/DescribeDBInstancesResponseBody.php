<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstancesResponseBody\DBInstances;
use AlibabaCloud\Tea\Model;

class DescribeDBInstancesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalNumber;

    /**
     * @var DBInstances[]
     */
    public $DBInstances;
    protected $_name = [
        'requestId'   => 'RequestId',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'totalNumber' => 'TotalNumber',
        'DBInstances' => 'DBInstances',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalNumber) {
            $res['TotalNumber'] = $this->totalNumber;
        }
        if (null !== $this->DBInstances) {
            $res['DBInstances'] = [];
            if (null !== $this->DBInstances && \is_array($this->DBInstances)) {
                $n = 0;
                foreach ($this->DBInstances as $item) {
                    $res['DBInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalNumber'])) {
            $model->totalNumber = $map['TotalNumber'];
        }
        if (isset($map['DBInstances'])) {
            if (!empty($map['DBInstances'])) {
                $model->DBInstances = [];
                $n                  = 0;
                foreach ($map['DBInstances'] as $item) {
                    $model->DBInstances[$n++] = null !== $item ? DBInstances::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
