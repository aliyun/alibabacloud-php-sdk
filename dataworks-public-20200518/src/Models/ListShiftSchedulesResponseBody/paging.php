<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListShiftSchedulesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListShiftSchedulesResponseBody\paging\shiftSchedules;

class paging extends Model
{
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var shiftSchedules[]
     */
    public $shiftSchedules;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'shiftSchedules' => 'ShiftSchedules',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->shiftSchedules)) {
            Model::validateArray($this->shiftSchedules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->shiftSchedules) {
            if (\is_array($this->shiftSchedules)) {
                $res['ShiftSchedules'] = [];
                $n1                    = 0;
                foreach ($this->shiftSchedules as $item1) {
                    $res['ShiftSchedules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ShiftSchedules'])) {
            if (!empty($map['ShiftSchedules'])) {
                $model->shiftSchedules = [];
                $n1                    = 0;
                foreach ($map['ShiftSchedules'] as $item1) {
                    $model->shiftSchedules[$n1++] = shiftSchedules::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
