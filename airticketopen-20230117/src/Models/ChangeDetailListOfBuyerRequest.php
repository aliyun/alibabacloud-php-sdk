<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Dara\Model;

class ChangeDetailListOfBuyerRequest extends Model
{
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
    public $utcCreateBegin;

    /**
     * @var int
     */
    public $utcCreateEnd;
    protected $_name = [
        'pageIndex' => 'page_index',
        'pageSize' => 'page_size',
        'utcCreateBegin' => 'utc_create_begin',
        'utcCreateEnd' => 'utc_create_end',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
