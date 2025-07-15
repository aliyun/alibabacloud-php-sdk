<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeShowListResponseBody\showListInfo\showList;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeShowListResponseBody\showListInfo\showList\show\resourceInfo;
use AlibabaCloud\Tea\Model;

class show extends Model
{
    /**
     * @description The duration of the episode. Unit: seconds.
     *
     * @example 20
     *
     * @var int
     */
    public $duration;

    /**
     * @description The number of times the episode repeats after the first playback is complete.
     *
     * For example, if you set the value to 0, the episode is to be played once. If you set the value to 1, the episode is to be played twice.
     *
     * @example 5
     *
     * @var int
     */
    public $repeatTimes;

    /**
     * @description The resource information.
     *
     * @var resourceInfo
     */
    public $resourceInfo;

    /**
     * @description The ID of the episode.
     *
     * @example a2b8e671-2fe5-4642-a2ec-bf93880e****
     *
     * @var string
     */
    public $showId;

    /**
     * @description The name of the episode.
     *
     * @example liveShow****
     *
     * @var string
     */
    public $showName;
    protected $_name = [
        'duration' => 'Duration',
        'repeatTimes' => 'RepeatTimes',
        'resourceInfo' => 'ResourceInfo',
        'showId' => 'ShowId',
        'showName' => 'ShowName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->repeatTimes) {
            $res['RepeatTimes'] = $this->repeatTimes;
        }
        if (null !== $this->resourceInfo) {
            $res['ResourceInfo'] = null !== $this->resourceInfo ? $this->resourceInfo->toMap() : null;
        }
        if (null !== $this->showId) {
            $res['ShowId'] = $this->showId;
        }
        if (null !== $this->showName) {
            $res['ShowName'] = $this->showName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return show
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['RepeatTimes'])) {
            $model->repeatTimes = $map['RepeatTimes'];
        }
        if (isset($map['ResourceInfo'])) {
            $model->resourceInfo = resourceInfo::fromMap($map['ResourceInfo']);
        }
        if (isset($map['ShowId'])) {
            $model->showId = $map['ShowId'];
        }
        if (isset($map['ShowName'])) {
            $model->showName = $map['ShowName'];
        }

        return $model;
    }
}
