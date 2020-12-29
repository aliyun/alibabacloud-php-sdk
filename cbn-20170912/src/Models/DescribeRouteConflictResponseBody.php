<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeRouteConflictResponseBody\routeConflicts;
use AlibabaCloud\Tea\Model;

class DescribeRouteConflictResponseBody extends Model
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
     * @var routeConflicts[]
     */
    public $routeConflicts;
    protected $_name = [
        'totalCount'     => 'TotalCount',
        'pageSize'       => 'PageSize',
        'requestId'      => 'RequestId',
        'pageNumber'     => 'PageNumber',
        'routeConflicts' => 'RouteConflicts',
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
        if (null !== $this->routeConflicts) {
            $res['RouteConflicts'] = [];
            if (null !== $this->routeConflicts && \is_array($this->routeConflicts)) {
                $n = 0;
                foreach ($this->routeConflicts as $item) {
                    $res['RouteConflicts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRouteConflictResponseBody
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
        if (isset($map['RouteConflicts'])) {
            if (!empty($map['RouteConflicts'])) {
                $model->routeConflicts = [];
                $n                     = 0;
                foreach ($map['RouteConflicts'] as $item) {
                    $model->routeConflicts[$n++] = null !== $item ? routeConflicts::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
