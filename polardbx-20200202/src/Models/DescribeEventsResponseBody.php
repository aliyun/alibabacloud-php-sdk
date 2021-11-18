<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeEventsResponseBody\eventItems;
use AlibabaCloud\Tea\Model;

class DescribeEventsResponseBody extends Model
{
    /**
     * @description 事件体
     *
     * @var eventItems[]
     */
    public $eventItems;

    /**
     * @description 页面下标
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 页面大小
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 总页数
     *
     * @var int
     */
    public $totalRecordCount;
    protected $_name = [
        'eventItems'       => 'EventItems',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'requestId'        => 'RequestId',
        'totalRecordCount' => 'TotalRecordCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventItems) {
            $res['EventItems'] = [];
            if (null !== $this->eventItems && \is_array($this->eventItems)) {
                $n = 0;
                foreach ($this->eventItems as $item) {
                    $res['EventItems'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (null !== $this->totalRecordCount) {
            $res['TotalRecordCount'] = $this->totalRecordCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEventsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventItems'])) {
            if (!empty($map['EventItems'])) {
                $model->eventItems = [];
                $n                 = 0;
                foreach ($map['EventItems'] as $item) {
                    $model->eventItems[$n++] = null !== $item ? eventItems::fromMap($item) : $item;
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
        if (isset($map['TotalRecordCount'])) {
            $model->totalRecordCount = $map['TotalRecordCount'];
        }

        return $model;
    }
}
