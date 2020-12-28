<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusResponseBody\instanceFullStatusSet;
use AlibabaCloud\Tea\Model;

class DescribeInstancesFullStatusResponseBody extends Model
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
     * @var instanceFullStatusSet[]
     */
    public $instanceFullStatusSet;
    protected $_name = [
        'totalCount'            => 'TotalCount',
        'pageSize'              => 'PageSize',
        'requestId'             => 'RequestId',
        'pageNumber'            => 'PageNumber',
        'instanceFullStatusSet' => 'InstanceFullStatusSet',
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
        if (null !== $this->instanceFullStatusSet) {
            $res['InstanceFullStatusSet'] = [];
            if (null !== $this->instanceFullStatusSet && \is_array($this->instanceFullStatusSet)) {
                $n = 0;
                foreach ($this->instanceFullStatusSet as $item) {
                    $res['InstanceFullStatusSet'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstancesFullStatusResponseBody
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
        if (isset($map['InstanceFullStatusSet'])) {
            if (!empty($map['InstanceFullStatusSet'])) {
                $model->instanceFullStatusSet = [];
                $n                            = 0;
                foreach ($map['InstanceFullStatusSet'] as $item) {
                    $model->instanceFullStatusSet[$n++] = null !== $item ? instanceFullStatusSet::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
