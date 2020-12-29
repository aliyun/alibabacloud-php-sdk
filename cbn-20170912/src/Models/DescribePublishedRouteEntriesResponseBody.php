<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribePublishedRouteEntriesResponseBody\publishedRouteEntries;
use AlibabaCloud\Tea\Model;

class DescribePublishedRouteEntriesResponseBody extends Model
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
     * @var publishedRouteEntries[]
     */
    public $publishedRouteEntries;
    protected $_name = [
        'totalCount'            => 'TotalCount',
        'pageSize'              => 'PageSize',
        'requestId'             => 'RequestId',
        'pageNumber'            => 'PageNumber',
        'publishedRouteEntries' => 'PublishedRouteEntries',
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
        if (null !== $this->publishedRouteEntries) {
            $res['PublishedRouteEntries'] = [];
            if (null !== $this->publishedRouteEntries && \is_array($this->publishedRouteEntries)) {
                $n = 0;
                foreach ($this->publishedRouteEntries as $item) {
                    $res['PublishedRouteEntries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePublishedRouteEntriesResponseBody
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
        if (isset($map['PublishedRouteEntries'])) {
            if (!empty($map['PublishedRouteEntries'])) {
                $model->publishedRouteEntries = [];
                $n                            = 0;
                foreach ($map['PublishedRouteEntries'] as $item) {
                    $model->publishedRouteEntries[$n++] = null !== $item ? publishedRouteEntries::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
