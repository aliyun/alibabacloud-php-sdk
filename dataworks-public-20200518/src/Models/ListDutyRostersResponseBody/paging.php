<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDutyRostersResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDutyRostersResponseBody\paging\dutyRosters;
use AlibabaCloud\Tea\Model;

class paging extends Model
{
    /**
     * @var dutyRosters[]
     */
    public $dutyRosters;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'dutyRosters' => 'DutyRosters',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dutyRosters) {
            $res['DutyRosters'] = [];
            if (null !== $this->dutyRosters && \is_array($this->dutyRosters)) {
                $n = 0;
                foreach ($this->dutyRosters as $item) {
                    $res['DutyRosters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['DutyRosters'])) {
            if (!empty($map['DutyRosters'])) {
                $model->dutyRosters = [];
                $n                  = 0;
                foreach ($map['DutyRosters'] as $item) {
                    $model->dutyRosters[$n++] = null !== $item ? dutyRosters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
