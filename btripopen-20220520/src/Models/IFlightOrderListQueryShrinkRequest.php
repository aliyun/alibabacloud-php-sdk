<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class IFlightOrderListQueryShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $applyIdListShrink;

    /**
     * @var string
     */
    public $bookTypeListShrink;

    /**
     * @var string
     */
    public $bookerIdShrink;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $scrollId;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $thirdPartApplyIdListShrink;
    protected $_name = [
        'applyIdListShrink' => 'apply_id_list',
        'bookTypeListShrink' => 'book_type_list',
        'bookerIdShrink' => 'booker_id',
        'endDate' => 'end_date',
        'pageSize' => 'page_size',
        'scrollId' => 'scroll_id',
        'startDate' => 'start_date',
        'thirdPartApplyIdListShrink' => 'third_part_apply_id_list',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyIdListShrink) {
            $res['apply_id_list'] = $this->applyIdListShrink;
        }

        if (null !== $this->bookTypeListShrink) {
            $res['book_type_list'] = $this->bookTypeListShrink;
        }

        if (null !== $this->bookerIdShrink) {
            $res['booker_id'] = $this->bookerIdShrink;
        }

        if (null !== $this->endDate) {
            $res['end_date'] = $this->endDate;
        }

        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }

        if (null !== $this->scrollId) {
            $res['scroll_id'] = $this->scrollId;
        }

        if (null !== $this->startDate) {
            $res['start_date'] = $this->startDate;
        }

        if (null !== $this->thirdPartApplyIdListShrink) {
            $res['third_part_apply_id_list'] = $this->thirdPartApplyIdListShrink;
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
        if (isset($map['apply_id_list'])) {
            $model->applyIdListShrink = $map['apply_id_list'];
        }

        if (isset($map['book_type_list'])) {
            $model->bookTypeListShrink = $map['book_type_list'];
        }

        if (isset($map['booker_id'])) {
            $model->bookerIdShrink = $map['booker_id'];
        }

        if (isset($map['end_date'])) {
            $model->endDate = $map['end_date'];
        }

        if (isset($map['page_size'])) {
            $model->pageSize = $map['page_size'];
        }

        if (isset($map['scroll_id'])) {
            $model->scrollId = $map['scroll_id'];
        }

        if (isset($map['start_date'])) {
            $model->startDate = $map['start_date'];
        }

        if (isset($map['third_part_apply_id_list'])) {
            $model->thirdPartApplyIdListShrink = $map['third_part_apply_id_list'];
        }

        return $model;
    }
}
