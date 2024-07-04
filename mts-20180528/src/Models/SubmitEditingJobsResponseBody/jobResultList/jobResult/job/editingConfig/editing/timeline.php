<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20180528\Models\SubmitEditingJobsResponseBody\jobResultList\jobResult\job\editingConfig\editing;

use AlibabaCloud\SDK\Mts\V20180528\Models\SubmitEditingJobsResponseBody\jobResultList\jobResult\job\editingConfig\editing\timeline\timelineConfig;
use AlibabaCloud\SDK\Mts\V20180528\Models\SubmitEditingJobsResponseBody\jobResultList\jobResult\job\editingConfig\editing\timeline\trackList;
use AlibabaCloud\Tea\Model;

class timeline extends Model
{
    /**
     * @var timelineConfig
     */
    public $timelineConfig;

    /**
     * @var trackList
     */
    public $trackList;
    protected $_name = [
        'timelineConfig' => 'TimelineConfig',
        'trackList'      => 'TrackList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->timelineConfig) {
            $res['TimelineConfig'] = null !== $this->timelineConfig ? $this->timelineConfig->toMap() : null;
        }
        if (null !== $this->trackList) {
            $res['TrackList'] = null !== $this->trackList ? $this->trackList->toMap() : null;
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
        if (isset($map['TimelineConfig'])) {
            $model->timelineConfig = timelineConfig::fromMap($map['TimelineConfig']);
        }
        if (isset($map['TrackList'])) {
            $model->trackList = trackList::fromMap($map['TrackList']);
        }

        return $model;
    }
}
