<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Dara\Model;

class OrderListRequest extends Model
{
    /**
     * @var int
     */
    public $bookTimeEnd;

    /**
     * @var int
     */
    public $bookTimeStart;

    /**
     * @var int
     */
    public $pageIndex;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'bookTimeEnd' => 'book_time_end',
        'bookTimeStart' => 'book_time_start',
        'pageIndex' => 'page_index',
        'pageSize' => 'page_size',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
