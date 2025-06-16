<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Dara\Model;

class AccountFlowListRequest extends Model
{
    /**
     * @var int
     */
    public $dayNum;

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
    public $utcBeginTime;
    protected $_name = [
        'dayNum' => 'day_num',
        'pageIndex' => 'page_index',
        'pageSize' => 'page_size',
        'utcBeginTime' => 'utc_begin_time',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dayNum) {
            $res['day_num'] = $this->dayNum;
        }

        if (null !== $this->pageIndex) {
            $res['page_index'] = $this->pageIndex;
        }

        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }

        if (null !== $this->utcBeginTime) {
            $res['utc_begin_time'] = $this->utcBeginTime;
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
        if (isset($map['day_num'])) {
            $model->dayNum = $map['day_num'];
        }

        if (isset($map['page_index'])) {
            $model->pageIndex = $map['page_index'];
        }

        if (isset($map['page_size'])) {
            $model->pageSize = $map['page_size'];
        }

        if (isset($map['utc_begin_time'])) {
            $model->utcBeginTime = $map['utc_begin_time'];
        }

        return $model;
    }
}
