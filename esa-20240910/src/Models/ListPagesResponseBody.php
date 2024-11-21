<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\ListPagesResponseBody\pages;
use AlibabaCloud\Tea\Model;

class ListPagesResponseBody extends Model
{
    /**
     * @description The page number returned.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The custom error pages. Each element in the array contains error page-specific information.
     *
     * @var pages[]
     */
    public $pages;

    /**
     * @description The request ID.
     *
     * @example 36af3fcc-43d0-441c-86b1-428951dc8225
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of custom error pages after filtering.
     *
     * @example 10
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description The number of custom error pages that you created.
     *
     * @example 10
     *
     * @var int
     */
    public $usage;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'pages'      => 'Pages',
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
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pages) {
            $res['Pages'] = [];
            if (null !== $this->pages && \is_array($this->pages)) {
                $n = 0;
                foreach ($this->pages as $item) {
                    $res['Pages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return ListPagesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Pages'])) {
            if (!empty($map['Pages'])) {
                $model->pages = [];
                $n            = 0;
                foreach ($map['Pages'] as $item) {
                    $model->pages[$n++] = null !== $item ? pages::fromMap($item) : $item;
                }
            }
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
