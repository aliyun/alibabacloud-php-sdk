<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\SDK\Trademark\V20180724\Models\SearchTmOnsalesResponseBody\trademarks;
use AlibabaCloud\Tea\Model;

class SearchTmOnsalesResponseBody extends Model
{
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
     * @var int
     */
    public $totalPageNumber;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var trademarks[]
     */
    public $trademarks;
    protected $_name = [
        'requestId'       => 'RequestId',
        'pageSize'        => 'PageSize',
        'pageNumber'      => 'PageNumber',
        'totalPageNumber' => 'TotalPageNumber',
        'totalCount'      => 'TotalCount',
        'trademarks'      => 'Trademarks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->totalPageNumber) {
            $res['TotalPageNumber'] = $this->totalPageNumber;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->trademarks) {
            $res['Trademarks'] = [];
            if (null !== $this->trademarks && \is_array($this->trademarks)) {
                $n = 0;
                foreach ($this->trademarks as $item) {
                    $res['Trademarks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchTmOnsalesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['TotalPageNumber'])) {
            $model->totalPageNumber = $map['TotalPageNumber'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['Trademarks'])) {
            if (!empty($map['Trademarks'])) {
                $model->trademarks = [];
                $n                 = 0;
                foreach ($map['Trademarks'] as $item) {
                    $model->trademarks[$n++] = null !== $item ? trademarks::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
