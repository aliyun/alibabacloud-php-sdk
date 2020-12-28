<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePhysicalConnectionsResponseBody\physicalConnectionSet;
use AlibabaCloud\Tea\Model;

class DescribePhysicalConnectionsResponseBody extends Model
{
    /**
     * @var physicalConnectionSet[]
     */
    public $physicalConnectionSet;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;
    protected $_name = [
        'physicalConnectionSet' => 'PhysicalConnectionSet',
        'totalCount'            => 'TotalCount',
        'requestId'             => 'RequestId',
        'pageSize'              => 'PageSize',
        'pageNumber'            => 'PageNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->physicalConnectionSet) {
            $res['PhysicalConnectionSet'] = [];
            if (null !== $this->physicalConnectionSet && \is_array($this->physicalConnectionSet)) {
                $n = 0;
                foreach ($this->physicalConnectionSet as $item) {
                    $res['PhysicalConnectionSet'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePhysicalConnectionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PhysicalConnectionSet'])) {
            if (!empty($map['PhysicalConnectionSet'])) {
                $model->physicalConnectionSet = [];
                $n                            = 0;
                foreach ($map['PhysicalConnectionSet'] as $item) {
                    $model->physicalConnectionSet[$n++] = null !== $item ? physicalConnectionSet::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        return $model;
    }
}
