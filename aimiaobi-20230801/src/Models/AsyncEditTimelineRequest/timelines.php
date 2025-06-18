<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\AsyncEditTimelineRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\AsyncEditTimelineRequest\timelines\clips;

class timelines extends Model
{
    /**
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

    public function validate()
    {
        if (\is_array($this->clips)) {
            Model::validateArray($this->clips);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clips) {
            if (\is_array($this->clips)) {
                $res['Clips'] = [];
                $n1 = 0;
                foreach ($this->clips as $item1) {
                    $res['Clips'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->timelineId) {
            $res['TimelineId'] = $this->timelineId;
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
        if (isset($map['Clips'])) {
            if (!empty($map['Clips'])) {
                $model->clips = [];
                $n1 = 0;
                foreach ($map['Clips'] as $item1) {
                    $model->clips[$n1] = clips::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TimelineId'])) {
            $model->timelineId = $map['TimelineId'];
        }

        return $model;
    }
}
