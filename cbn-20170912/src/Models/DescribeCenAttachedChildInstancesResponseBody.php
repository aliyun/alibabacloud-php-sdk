<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenAttachedChildInstancesResponseBody\childInstances;
use AlibabaCloud\Tea\Model;

class DescribeCenAttachedChildInstancesResponseBody extends Model
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
     * @var childInstances[]
     */
    public $childInstances;
    protected $_name = [
        'totalCount'     => 'TotalCount',
        'pageSize'       => 'PageSize',
        'requestId'      => 'RequestId',
        'pageNumber'     => 'PageNumber',
        'childInstances' => 'ChildInstances',
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
        if (null !== $this->childInstances) {
            $res['ChildInstances'] = [];
            if (null !== $this->childInstances && \is_array($this->childInstances)) {
                $n = 0;
                foreach ($this->childInstances as $item) {
                    $res['ChildInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCenAttachedChildInstancesResponseBody
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
        if (isset($map['ChildInstances'])) {
            if (!empty($map['ChildInstances'])) {
                $model->childInstances = [];
                $n                     = 0;
                foreach ($map['ChildInstances'] as $item) {
                    $model->childInstances[$n++] = null !== $item ? childInstances::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
