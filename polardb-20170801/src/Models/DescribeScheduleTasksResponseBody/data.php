<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeScheduleTasksResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeScheduleTasksResponseBody\data\timerInfos;

class data extends Model
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
     * @var timerInfos[]
     */
    public $timerInfos;
    /**
     * @var int
     */
    public $totalRecordCount;
    protected $_name = [
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'timerInfos'       => 'TimerInfos',
        'totalRecordCount' => 'TotalRecordCount',
    ];

    public function validate()
    {
        if (\is_array($this->timerInfos)) {
            Model::validateArray($this->timerInfos);
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

        if (null !== $this->timerInfos) {
            if (\is_array($this->timerInfos)) {
                $res['TimerInfos'] = [];
                $n1                = 0;
                foreach ($this->timerInfos as $item1) {
                    $res['TimerInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalRecordCount) {
            $res['TotalRecordCount'] = $this->totalRecordCount;
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

        if (isset($map['TimerInfos'])) {
            if (!empty($map['TimerInfos'])) {
                $model->timerInfos = [];
                $n1                = 0;
                foreach ($map['TimerInfos'] as $item1) {
                    $model->timerInfos[$n1++] = timerInfos::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalRecordCount'])) {
            $model->totalRecordCount = $map['TotalRecordCount'];
        }

        return $model;
    }
}
