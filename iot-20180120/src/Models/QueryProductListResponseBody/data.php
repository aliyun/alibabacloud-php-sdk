<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryProductListResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryProductListResponseBody\data\list_;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The details of the products.
     *
     * >  The returned product information is sorted in reverse-chronological order based on the time when the products were created.
     * @var list_
     */
    public $list;

    /**
     * @description The total number of returned pages.
     *
     * @example 92
     *
     * @var int
     */
    public $pageCount;

    /**
     * @description The number of entries returned per page.
     *
     * @example 2
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The total number of products.
     *
     * @example 184
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'list'        => 'List',
        'pageCount'   => 'PageCount',
        'pageSize'    => 'PageSize',
        'total'       => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->list) {
            $res['List'] = null !== $this->list ? $this->list->toMap() : null;
        }
        if (null !== $this->pageCount) {
            $res['PageCount'] = $this->pageCount;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['List'])) {
            $model->list = list_::fromMap($map['List']);
        }
        if (isset($map['PageCount'])) {
            $model->pageCount = $map['PageCount'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
