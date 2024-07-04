<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20180528\Models\QueryEditingJobListResponseBody\jobList\job\editingConfig\editing\timeline;

use AlibabaCloud\SDK\Mts\V20180528\Models\QueryEditingJobListResponseBody\jobList\job\editingConfig\editing\timeline\timelineConfig\timelineConfigAudio;
use AlibabaCloud\SDK\Mts\V20180528\Models\QueryEditingJobListResponseBody\jobList\job\editingConfig\editing\timeline\timelineConfig\timelineConfigVideo;
use AlibabaCloud\Tea\Model;

class timelineConfig extends Model
{
    /**
     * @var timelineConfigAudio
     */
    public $timelineConfigAudio;

    /**
     * @var timelineConfigVideo
     */
    public $timelineConfigVideo;
    protected $_name = [
        'timelineConfigAudio' => 'TimelineConfigAudio',
        'timelineConfigVideo' => 'TimelineConfigVideo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->timelineConfigAudio) {
            $res['TimelineConfigAudio'] = null !== $this->timelineConfigAudio ? $this->timelineConfigAudio->toMap() : null;
        }
        if (null !== $this->timelineConfigVideo) {
            $res['TimelineConfigVideo'] = null !== $this->timelineConfigVideo ? $this->timelineConfigVideo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return timelineConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TimelineConfigAudio'])) {
            $model->timelineConfigAudio = timelineConfigAudio::fromMap($map['TimelineConfigAudio']);
        }
        if (isset($map['TimelineConfigVideo'])) {
            $model->timelineConfigVideo = timelineConfigVideo::fromMap($map['TimelineConfigVideo']);
        }

        return $model;
    }
}
