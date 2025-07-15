<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeShowListResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeShowListResponseBody\showListInfo\showList;
use AlibabaCloud\Tea\Model;

class showListInfo extends Model
{
    /**
     * @description The background of the episode list.
     *
     * @example {\\"MaterialId\\":\\"a2b8e671-2fe5-4642-a2ec-bf93880e****\\",\\"resourceType\\":\\"VOD\\"}
     *
     * @var string
     */
    public $background;

    /**
     * @description The ID of the episode that is playing.
     *
     * @example a2b8e671-2fe5-4642-a2ec-bf93880e****
     *
     * @var string
     */
    public $currentShowId;

    /**
     * @description The episode of the highest priority.
     *
     * > You can configure this parameter only before the episode list starts playing.
     *
     * @example a2b8e671-2fe5-4642-a2ec-bf93880e****
     *
     * @var string
     */
    public $highPriorityShowId;

    /**
     * @description The time at which the episode of the highest priority is played. Format: yyyy-MM-dd\\"T\\"HH:mm:ss.
     *
     * > You can configure this parameter only before the episode list starts playing. After you configure this parameter, when the specified point in time is reached, any episode that is playing stops and the episode of the highest priority in the episode list starts to play.
     *
     * @example 2021-11-23T12:30:00
     *
     * @var string
     */
    public $highPriorityShowStartTime;

    /**
     * @description The episodes in the episode list.
     *
     * @var showList
     */
    public $showList;

    /**
     * @description The number of additional times the episode list is played by default. The value is 0.
     *
     * @example 0
     *
     * @var int
     */
    public $showListRepeatTimes;

    /**
     * @description The number of additional times the episode list is played.
     *
     * @example 1
     *
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

    public function validate() {}

    public function toMap()
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
