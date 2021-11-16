<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListCalcEnginesResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListCalcEnginesResponseBody\data\calcEngines;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var calcEngines[]
     */
    public $calcEngines;

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
        'calcEngines' => 'CalcEngines',
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
        if (null !== $this->calcEngines) {
            $res['CalcEngines'] = [];
            if (null !== $this->calcEngines && \is_array($this->calcEngines)) {
                $n = 0;
                foreach ($this->calcEngines as $item) {
                    $res['CalcEngines'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CalcEngines'])) {
            if (!empty($map['CalcEngines'])) {
                $model->calcEngines = [];
                $n                  = 0;
                foreach ($map['CalcEngines'] as $item) {
                    $model->calcEngines[$n++] = null !== $item ? calcEngines::fromMap($item) : $item;
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
