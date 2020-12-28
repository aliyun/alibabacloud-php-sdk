<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAccessPointsResponseBody\accessPointSet;
use AlibabaCloud\Tea\Model;

class DescribeAccessPointsResponseBody extends Model
{
    /**
     * @var accessPointSet[]
     */
    public $accessPointSet;

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
        'accessPointSet' => 'AccessPointSet',
        'totalCount'     => 'TotalCount',
        'requestId'      => 'RequestId',
        'pageSize'       => 'PageSize',
        'pageNumber'     => 'PageNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessPointSet) {
            $res['AccessPointSet'] = [];
            if (null !== $this->accessPointSet && \is_array($this->accessPointSet)) {
                $n = 0;
                foreach ($this->accessPointSet as $item) {
                    $res['AccessPointSet'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeAccessPointsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessPointSet'])) {
            if (!empty($map['AccessPointSet'])) {
                $model->accessPointSet = [];
                $n                     = 0;
                foreach ($map['AccessPointSet'] as $item) {
                    $model->accessPointSet[$n++] = null !== $item ? accessPointSet::fromMap($item) : $item;
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
