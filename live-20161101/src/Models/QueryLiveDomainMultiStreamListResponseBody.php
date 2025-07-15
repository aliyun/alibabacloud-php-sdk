<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\QueryLiveDomainMultiStreamListResponseBody\onlineStreams;
use AlibabaCloud\Tea\Model;

class QueryLiveDomainMultiStreamListResponseBody extends Model
{
    /**
     * @description The online streams returned.
     *
     * @var onlineStreams[]
     */
    public $onlineStreams;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request ID.
     *
     * @example CF60DB6A-7FD6-426E-9288-122CC1A5****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 19
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'onlineStreams' => 'OnlineStreams',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->onlineStreams) {
            $res['OnlineStreams'] = [];
            if (null !== $this->onlineStreams && \is_array($this->onlineStreams)) {
                $n = 0;
                foreach ($this->onlineStreams as $item) {
                    $res['OnlineStreams'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryLiveDomainMultiStreamListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OnlineStreams'])) {
            if (!empty($map['OnlineStreams'])) {
                $model->onlineStreams = [];
                $n = 0;
                foreach ($map['OnlineStreams'] as $item) {
                    $model->onlineStreams[$n++] = null !== $item ? onlineStreams::fromMap($item) : $item;
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
