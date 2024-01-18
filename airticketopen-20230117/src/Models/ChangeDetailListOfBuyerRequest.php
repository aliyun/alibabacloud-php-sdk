<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Tea\Model;

class ChangeDetailListOfBuyerRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $pageIndex;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 1677415276000
     *
     * @var int
     */
    public $utcCreateBegin;

    /**
     * @example 1677415279000
     *
     * @var int
     */
    public $utcCreateEnd;
    protected $_name = [
        'pageIndex'      => 'page_index',
        'pageSize'       => 'page_size',
        'utcCreateBegin' => 'utc_create_begin',
        'utcCreateEnd'   => 'utc_create_end',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageIndex) {
            $res['page_index'] = $this->pageIndex;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->utcCreateBegin) {
            $res['utc_create_begin'] = $this->utcCreateBegin;
        }
        if (null !== $this->utcCreateEnd) {
            $res['utc_create_end'] = $this->utcCreateEnd;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeDetailListOfBuyerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['page_index'])) {
            $model->pageIndex = $map['page_index'];
        }
        if (isset($map['page_size'])) {
            $model->pageSize = $map['page_size'];
        }
        if (isset($map['utc_create_begin'])) {
            $model->utcCreateBegin = $map['utc_create_begin'];
        }
        if (isset($map['utc_create_end'])) {
            $model->utcCreateEnd = $map['utc_create_end'];
        }

        return $model;
    }
}
