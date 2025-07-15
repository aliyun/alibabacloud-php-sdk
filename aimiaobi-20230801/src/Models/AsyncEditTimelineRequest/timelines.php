<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\AsyncEditTimelineRequest;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\AsyncEditTimelineRequest\timelines\clips;
use AlibabaCloud\Tea\Model;

class timelines extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var clips[]
     */
    public $clips;

    /**
     * @var string
     */
    public $timelineId;
    protected $_name = [
        'clips' => 'Clips',
        'timelineId' => 'TimelineId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clips) {
            $res['Clips'] = [];
            if (null !== $this->clips && \is_array($this->clips)) {
                $n = 0;
                foreach ($this->clips as $item) {
                    $res['Clips'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->timelineId) {
            $res['TimelineId'] = $this->timelineId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return timelines
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Clips'])) {
            if (!empty($map['Clips'])) {
                $model->clips = [];
                $n = 0;
                foreach ($map['Clips'] as $item) {
                    $model->clips[$n++] = null !== $item ? clips::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TimelineId'])) {
            $model->timelineId = $map['TimelineId'];
        }

        return $model;
    }
}
