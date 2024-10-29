<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\OrderListResponseBody\data;

use AlibabaCloud\Tea\Model;

class pagination extends Model
{
    /**
     * @description current page index
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description page size
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description the number of total orders
     *
     * @example 5
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description the number of total pages
     *
     * @example 1
     *
     * @var int
     */
    public $totalPage;
    protected $_name = [
        'currentPage' => 'current_page',
        'pageSize'    => 'page_size',
        'totalCount'  => 'total_count',
        'totalPage'   => 'total_page',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['current_page'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['total_count'] = $this->totalCount;
        }
        if (null !== $this->totalPage) {
            $res['total_page'] = $this->totalPage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pagination
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['current_page'])) {
            $model->currentPage = $map['current_page'];
        }
        if (isset($map['page_size'])) {
            $model->pageSize = $map['page_size'];
        }
        if (isset($map['total_count'])) {
            $model->totalCount = $map['total_count'];
        }
        if (isset($map['total_page'])) {
            $model->totalPage = $map['total_page'];
        }

        return $model;
    }
}
