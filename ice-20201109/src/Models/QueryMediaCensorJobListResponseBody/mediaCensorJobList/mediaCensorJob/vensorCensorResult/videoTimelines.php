<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaCensorJobListResponseBody\mediaCensorJobList\mediaCensorJob\vensorCensorResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\QueryMediaCensorJobListResponseBody\mediaCensorJobList\mediaCensorJob\vensorCensorResult\videoTimelines\videoTimeline;

class videoTimelines extends Model
{
    /**
     * @var videoTimeline[]
     */
    public $videoTimeline;
    protected $_name = [
        'videoTimeline' => 'VideoTimeline',
    ];

    public function validate()
    {
        if (\is_array($this->videoTimeline)) {
            Model::validateArray($this->videoTimeline);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->videoTimeline) {
            if (\is_array($this->videoTimeline)) {
                $res['VideoTimeline'] = [];
                $n1                   = 0;
                foreach ($this->videoTimeline as $item1) {
                    $res['VideoTimeline'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['VideoTimeline'])) {
            if (!empty($map['VideoTimeline'])) {
                $model->videoTimeline = [];
                $n1                   = 0;
                foreach ($map['VideoTimeline'] as $item1) {
                    $model->videoTimeline[$n1++] = videoTimeline::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
