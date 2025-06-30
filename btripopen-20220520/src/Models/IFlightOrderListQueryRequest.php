<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

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
     * @var string[]
     */
    public $thirdPartApplyIdList;
    protected $_name = [
        'applyIdList' => 'apply_id_list',
        'bookTypeList' => 'book_type_list',
        'bookerId' => 'booker_id',
        'endDate' => 'end_date',
        'pageSize' => 'page_size',
        'scrollId' => 'scroll_id',
        'startDate' => 'start_date',
        'thirdPartApplyIdList' => 'third_part_apply_id_list',
    ];

    public function validate()
    {
        if (\is_array($this->applyIdList)) {
            Model::validateArray($this->applyIdList);
        }
        if (\is_array($this->bookTypeList)) {
            Model::validateArray($this->bookTypeList);
        }
        if (\is_array($this->bookerId)) {
            Model::validateArray($this->bookerId);
        }
        if (\is_array($this->thirdPartApplyIdList)) {
            Model::validateArray($this->thirdPartApplyIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyIdList) {
            if (\is_array($this->applyIdList)) {
                $res['apply_id_list'] = [];
                $n1 = 0;
                foreach ($this->applyIdList as $item1) {
                    $res['apply_id_list'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->bookTypeList) {
            if (\is_array($this->bookTypeList)) {
                $res['book_type_list'] = [];
                $n1 = 0;
                foreach ($this->bookTypeList as $item1) {
                    $res['book_type_list'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->bookerId) {
            if (\is_array($this->bookerId)) {
                $res['booker_id'] = [];
                $n1 = 0;
                foreach ($this->bookerId as $item1) {
                    $res['booker_id'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (\is_array($this->thirdPartApplyIdList)) {
                $res['third_part_apply_id_list'] = [];
                $n1 = 0;
                foreach ($this->thirdPartApplyIdList as $item1) {
                    $res['third_part_apply_id_list'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['apply_id_list'])) {
                $model->applyIdList = [];
                $n1 = 0;
                foreach ($map['apply_id_list'] as $item1) {
                    $model->applyIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['book_type_list'])) {
            if (!empty($map['book_type_list'])) {
                $model->bookTypeList = [];
                $n1 = 0;
                foreach ($map['book_type_list'] as $item1) {
                    $model->bookTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['booker_id'])) {
            if (!empty($map['booker_id'])) {
                $model->bookerId = [];
                $n1 = 0;
                foreach ($map['booker_id'] as $item1) {
                    $model->bookerId[$n1] = $item1;
                    ++$n1;
                }
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
                $model->thirdPartApplyIdList = [];
                $n1 = 0;
                foreach ($map['third_part_apply_id_list'] as $item1) {
                    $model->thirdPartApplyIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
