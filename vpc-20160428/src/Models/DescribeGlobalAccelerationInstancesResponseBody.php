<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeGlobalAccelerationInstancesResponseBody\globalAccelerationInstances;
use AlibabaCloud\Tea\Model;

class DescribeGlobalAccelerationInstancesResponseBody extends Model
{
    /**
     * @var globalAccelerationInstances
     */
    public $globalAccelerationInstances;

    /**
     * @var int
     */
    public $pageNumber;

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
    public $totalCount;
    protected $_name = [
        'globalAccelerationInstances' => 'GlobalAccelerationInstances',
        'pageNumber'                  => 'PageNumber',
        'pageSize'                    => 'PageSize',
        'requestId'                   => 'RequestId',
        'totalCount'                  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->globalAccelerationInstances) {
            $res['GlobalAccelerationInstances'] = null !== $this->globalAccelerationInstances ? $this->globalAccelerationInstances->toMap() : null;
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
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGlobalAccelerationInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GlobalAccelerationInstances'])) {
            $model->globalAccelerationInstances = globalAccelerationInstances::fromMap($map['GlobalAccelerationInstances']);
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
