<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class IFlightOrderListQueryRequest extends Model
{
    /**
     * @var string[]
     */
    public $applyIdList;

    /**
     * @var int[]
     */
    public $bookTypeList;

    /**
     * @var string[]
     */
    public $bookerId;

    /**
     * @example yyyy-MM-dd HH:mm:ss
     *
     * @var string
     */
    public $endDate;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example CAESBgoEIgIIABgAIhkKFwMSAAAAMUw4ZGViODFlYmM3MYzM4
     *
     * @var string
     */
    public $scrollId;

    /**
     * @example yyyy-MM-dd HH:mm:ss
     *
     * @var string
     */
    public $startDate;

    /**
     * @var string[]
     */
    public $thirdPartApplyIdList;
    protected $_name = [
        'applyIdList'          => 'apply_id_list',
        'bookTypeList'         => 'book_type_list',
        'bookerId'             => 'booker_id',
        'endDate'              => 'end_date',
        'pageSize'             => 'page_size',
        'scrollId'             => 'scroll_id',
        'startDate'            => 'start_date',
        'thirdPartApplyIdList' => 'third_part_apply_id_list',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyIdList) {
            $res['apply_id_list'] = $this->applyIdList;
        }
        if (null !== $this->bookTypeList) {
            $res['book_type_list'] = $this->bookTypeList;
        }
        if (null !== $this->bookerId) {
            $res['booker_id'] = $this->bookerId;
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
        if (null !== $this->thirdPartApplyIdList) {
            $res['third_part_apply_id_list'] = $this->thirdPartApplyIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IFlightOrderListQueryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['apply_id_list'])) {
            if (!empty($map['apply_id_list'])) {
                $model->applyIdList = $map['apply_id_list'];
            }
        }
        if (isset($map['book_type_list'])) {
            if (!empty($map['book_type_list'])) {
                $model->bookTypeList = $map['book_type_list'];
            }
        }
        if (isset($map['booker_id'])) {
            if (!empty($map['booker_id'])) {
                $model->bookerId = $map['booker_id'];
            }
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
            if (!empty($map['third_part_apply_id_list'])) {
                $model->thirdPartApplyIdList = $map['third_part_apply_id_list'];
            }
        }

        return $model;
    }
}
