<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDutyRosterResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDutyRosterResponseBody\paging\dutyRoster;
use AlibabaCloud\Tea\Model;

class paging extends Model
{
    /**
     * @var dutyRoster[]
     */
    public $dutyRoster;

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
        'dutyRoster' => 'DutyRoster',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dutyRoster) {
            $res['DutyRoster'] = [];
            if (null !== $this->dutyRoster && \is_array($this->dutyRoster)) {
                $n = 0;
                foreach ($this->dutyRoster as $item) {
                    $res['DutyRoster'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['DutyRoster'])) {
            if (!empty($map['DutyRoster'])) {
                $model->dutyRoster = [];
                $n                 = 0;
                foreach ($map['DutyRoster'] as $item) {
                    $model->dutyRoster[$n++] = null !== $item ? dutyRoster::fromMap($item) : $item;
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
