<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListShiftPersonnelsResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListShiftPersonnelsResponseBody\paging\shiftPersons;
use AlibabaCloud\Tea\Model;

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
     * @var shiftPersons[]
     */
    public $shiftPersons;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'shiftPersons' => 'ShiftPersons',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->shiftPersons) {
            $res['ShiftPersons'] = [];
            if (null !== $this->shiftPersons && \is_array($this->shiftPersons)) {
                $n = 0;
                foreach ($this->shiftPersons as $item) {
                    $res['ShiftPersons'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return paging
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ShiftPersons'])) {
            if (!empty($map['ShiftPersons'])) {
                $model->shiftPersons = [];
                $n                   = 0;
                foreach ($map['ShiftPersons'] as $item) {
                    $model->shiftPersons[$n++] = null !== $item ? shiftPersons::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
