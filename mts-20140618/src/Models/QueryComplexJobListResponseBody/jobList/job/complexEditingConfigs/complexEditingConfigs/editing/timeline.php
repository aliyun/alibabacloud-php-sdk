<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryComplexJobListResponseBody\jobList\job\complexEditingConfigs\complexEditingConfigs\editing;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryComplexJobListResponseBody\jobList\job\complexEditingConfigs\complexEditingConfigs\editing\timeline\timelineConfig;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryComplexJobListResponseBody\jobList\job\complexEditingConfigs\complexEditingConfigs\editing\timeline\trackList;
use AlibabaCloud\Tea\Model;

class timeline extends Model
{
    /**
     * @var trackList
     */
    public $trackList;

    /**
     * @var timelineConfig
     */
    public $timelineConfig;
    protected $_name = [
        'trackList'      => 'TrackList',
        'timelineConfig' => 'TimelineConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->trackList) {
            $res['TrackList'] = null !== $this->trackList ? $this->trackList->toMap() : null;
        }
        if (null !== $this->timelineConfig) {
            $res['TimelineConfig'] = null !== $this->timelineConfig ? $this->timelineConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return timeline
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TrackList'])) {
            $model->trackList = trackList::fromMap($map['TrackList']);
        }
        if (isset($map['TimelineConfig'])) {
            $model->timelineConfig = timelineConfig::fromMap($map['TimelineConfig']);
        }

        return $model;
    }
}
