<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitComplexJobResponseBody\complexJob\complexEditingConfigs\complexEditingConfigs\editing\timeline;

use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitComplexJobResponseBody\complexJob\complexEditingConfigs\complexEditingConfigs\editing\timeline\timelineConfig\timelineConfigAudio;
use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitComplexJobResponseBody\complexJob\complexEditingConfigs\complexEditingConfigs\editing\timeline\timelineConfig\timelineConfigVideo;
use AlibabaCloud\Tea\Model;

class timelineConfig extends Model
{
    /**
     * @var timelineConfigVideo
     */
    public $timelineConfigVideo;

    /**
     * @var timelineConfigAudio
     */
    public $timelineConfigAudio;
    protected $_name = [
        'timelineConfigVideo' => 'TimelineConfigVideo',
        'timelineConfigAudio' => 'TimelineConfigAudio',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->timelineConfigVideo) {
            $res['TimelineConfigVideo'] = null !== $this->timelineConfigVideo ? $this->timelineConfigVideo->toMap() : null;
        }
        if (null !== $this->timelineConfigAudio) {
            $res['TimelineConfigAudio'] = null !== $this->timelineConfigAudio ? $this->timelineConfigAudio->toMap() : null;
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
        if (isset($map['TimelineConfigVideo'])) {
            $model->timelineConfigVideo = timelineConfigVideo::fromMap($map['TimelineConfigVideo']);
        }
        if (isset($map['TimelineConfigAudio'])) {
            $model->timelineConfigAudio = timelineConfigAudio::fromMap($map['TimelineConfigAudio']);
        }

        return $model;
    }
}
