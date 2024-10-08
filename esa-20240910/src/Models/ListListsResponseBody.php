<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\ListListsResponseBody\lists;
use AlibabaCloud\Tea\Model;

class ListListsResponseBody extends Model
{
    /**
     * @var lists[]
     */
    public $lists;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Id of the request
     *
     * @example 36af3fcc-43d0-441c-86b1-428951dc8225
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 5
     *
     * @var int
     */
    public $totalCount;

    /**
     * @example 10
     *
     * @var int
     */
    public $usage;
    protected $_name = [
        'lists'      => 'Lists',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
        'usage'      => 'Usage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lists) {
            $res['Lists'] = [];
            if (null !== $this->lists && \is_array($this->lists)) {
                $n = 0;
                foreach ($this->lists as $item) {
                    $res['Lists'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListListsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lists'])) {
            if (!empty($map['Lists'])) {
                $model->lists = [];
                $n            = 0;
                foreach ($map['Lists'] as $item) {
                    $model->lists[$n++] = null !== $item ? lists::fromMap($item) : $item;
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
        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }

        return $model;
    }
}
