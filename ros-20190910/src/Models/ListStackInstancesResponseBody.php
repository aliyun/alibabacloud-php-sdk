<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackInstancesResponseBody\stackInstances;
use AlibabaCloud\Tea\Model;

class ListStackInstancesResponseBody extends Model
{
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

    /**
     * @var stackInstances[]
     */
    public $stackInstances;
    protected $_name = [
        'totalCount'     => 'TotalCount',
        'requestId'      => 'RequestId',
        'pageSize'       => 'PageSize',
        'pageNumber'     => 'PageNumber',
        'stackInstances' => 'StackInstances',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->stackInstances) {
            $res['StackInstances'] = [];
            if (null !== $this->stackInstances && \is_array($this->stackInstances)) {
                $n = 0;
                foreach ($this->stackInstances as $item) {
                    $res['StackInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListStackInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['StackInstances'])) {
            if (!empty($map['StackInstances'])) {
                $model->stackInstances = [];
                $n                     = 0;
                foreach ($map['StackInstances'] as $item) {
                    $model->stackInstances[$n++] = null !== $item ? stackInstances::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
