<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListCalcEnginesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListCalcEnginesResponseBody\data\calcEngines;

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
        if (\is_array($this->calcEngines)) {
            Model::validateArray($this->calcEngines);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->calcEngines) {
            if (\is_array($this->calcEngines)) {
                $res['CalcEngines'] = [];
                $n1                 = 0;
                foreach ($this->calcEngines as $item1) {
                    $res['CalcEngines'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CalcEngines'])) {
            if (!empty($map['CalcEngines'])) {
                $model->calcEngines = [];
                $n1                 = 0;
                foreach ($map['CalcEngines'] as $item1) {
                    $model->calcEngines[$n1++] = calcEngines::fromMap($item1);
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
