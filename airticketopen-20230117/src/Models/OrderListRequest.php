<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Tea\Model;

class OrderListRequest extends Model
{
    /**
     * @description latest booking time (timestamp)
     *
     * This parameter is required.
     * @example 2023-02-02 11:20:00
     *
     * @var int
     */
    public $bookTimeEnd;

    /**
     * @description earliest book time(timestamp)
     *
     * This parameter is required.
     * @example 2023-02-01 11:20:00
     *
     * @var int
     */
    public $bookTimeStart;

    /**
     * @description pagination query parameters, from which page to start querying
     *
     * @example 1
     *
     * @var int
     */
    public $pageIndex;

    /**
     * @description pagination query parameters, how many orders to return
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description which order status will be query
     *
     * 5: order closed
     * @example 4
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'bookTimeEnd'   => 'book_time_end',
        'bookTimeStart' => 'book_time_start',
        'pageIndex'     => 'page_index',
        'pageSize'      => 'page_size',
        'status'        => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bookTimeEnd) {
            $res['book_time_end'] = $this->bookTimeEnd;
        }
        if (null !== $this->bookTimeStart) {
            $res['book_time_start'] = $this->bookTimeStart;
        }
        if (null !== $this->pageIndex) {
            $res['page_index'] = $this->pageIndex;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OrderListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['book_time_end'])) {
            $model->bookTimeEnd = $map['book_time_end'];
        }
        if (isset($map['book_time_start'])) {
            $model->bookTimeStart = $map['book_time_start'];
        }
        if (isset($map['page_index'])) {
            $model->pageIndex = $map['page_index'];
        }
        if (isset($map['page_size'])) {
            $model->pageSize = $map['page_size'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
