<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDIJobEventsResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDIJobEventsResponseBody\pagingInfo\DIJobEvent;
use AlibabaCloud\Tea\Model;

class pagingInfo extends Model
{
    /**
     * @var DIJobEvent[]
     */
    public $DIJobEvent;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 2524
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'DIJobEvent' => 'DIJobEvent',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DIJobEvent) {
            $res['DIJobEvent'] = [];
            if (null !== $this->DIJobEvent && \is_array($this->DIJobEvent)) {
                $n = 0;
                foreach ($this->DIJobEvent as $item) {
                    $res['DIJobEvent'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pagingInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DIJobEvent'])) {
            if (!empty($map['DIJobEvent'])) {
                $model->DIJobEvent = [];
                $n                 = 0;
                foreach ($map['DIJobEvent'] as $item) {
                    $model->DIJobEvent[$n++] = null !== $item ? DIJobEvent::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
