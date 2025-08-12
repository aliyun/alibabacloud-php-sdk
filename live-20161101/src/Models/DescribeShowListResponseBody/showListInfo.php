<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeShowListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeShowListResponseBody\showListInfo\showList;

class showListInfo extends Model
{
    /**
     * @var string
     */
    public $background;

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
        'background' => 'Background',
        'currentShowId' => 'CurrentShowId',
        'highPriorityShowId' => 'HighPriorityShowId',
        'highPriorityShowStartTime' => 'HighPriorityShowStartTime',
        'showList' => 'ShowList',
        'showListRepeatTimes' => 'ShowListRepeatTimes',
        'totalShowListRepeatTimes' => 'TotalShowListRepeatTimes',
    ];

    public function validate()
    {
        if (null !== $this->showList) {
            $this->showList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->background) {
            $res['Background'] = $this->background;
        }

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
            $res['ShowList'] = null !== $this->showList ? $this->showList->toArray($noStream) : $this->showList;
        }

        if (null !== $this->showListRepeatTimes) {
            $res['ShowListRepeatTimes'] = $this->showListRepeatTimes;
        }

        if (null !== $this->totalShowListRepeatTimes) {
            $res['TotalShowListRepeatTimes'] = $this->totalShowListRepeatTimes;
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
        if (isset($map['Background'])) {
            $model->background = $map['Background'];
        }

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
