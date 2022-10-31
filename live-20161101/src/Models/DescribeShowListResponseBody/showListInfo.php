<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeShowListResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeShowListResponseBody\showListInfo\showList;
use AlibabaCloud\Tea\Model;

class showListInfo extends Model
{
    /**
     * @var string
     */
    public $currentShowId;

    /**
     * @var string
     */
    public $highPriorityShowId;

    /**
     * @var string
     */
    public $highPriorityShowStartTime;

    /**
     * @var showList
     */
    public $showList;

    /**
     * @var int
     */
    public $showListRepeatTimes;

    /**
     * @var int
     */
    public $totalShowListRepeatTimes;
    protected $_name = [
        'currentShowId'             => 'CurrentShowId',
        'highPriorityShowId'        => 'HighPriorityShowId',
        'highPriorityShowStartTime' => 'HighPriorityShowStartTime',
        'showList'                  => 'ShowList',
        'showListRepeatTimes'       => 'ShowListRepeatTimes',
        'totalShowListRepeatTimes'  => 'TotalShowListRepeatTimes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentShowId) {
            $res['CurrentShowId'] = $this->currentShowId;
        }
        if (null !== $this->highPriorityShowId) {
            $res['HighPriorityShowId'] = $this->highPriorityShowId;
        }
        if (null !== $this->highPriorityShowStartTime) {
            $res['HighPriorityShowStartTime'] = $this->highPriorityShowStartTime;
        }
        if (null !== $this->showList) {
            $res['ShowList'] = null !== $this->showList ? $this->showList->toMap() : null;
        }
        if (null !== $this->showListRepeatTimes) {
            $res['ShowListRepeatTimes'] = $this->showListRepeatTimes;
        }
        if (null !== $this->totalShowListRepeatTimes) {
            $res['TotalShowListRepeatTimes'] = $this->totalShowListRepeatTimes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return showListInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentShowId'])) {
            $model->currentShowId = $map['CurrentShowId'];
        }
        if (isset($map['HighPriorityShowId'])) {
            $model->highPriorityShowId = $map['HighPriorityShowId'];
        }
        if (isset($map['HighPriorityShowStartTime'])) {
            $model->highPriorityShowStartTime = $map['HighPriorityShowStartTime'];
        }
        if (isset($map['ShowList'])) {
            $model->showList = showList::fromMap($map['ShowList']);
        }
        if (isset($map['ShowListRepeatTimes'])) {
            $model->showListRepeatTimes = $map['ShowListRepeatTimes'];
        }
        if (isset($map['TotalShowListRepeatTimes'])) {
            $model->totalShowListRepeatTimes = $map['TotalShowListRepeatTimes'];
        }

        return $model;
    }
}
