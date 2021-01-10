<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryVideoSummaryJobListResponseBody\jobList\job\videoSummaryResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryVideoSummaryJobListResponseBody\jobList\job\videoSummaryResult\videoSummaryList\videoSummary;
use AlibabaCloud\Tea\Model;

class videoSummaryList extends Model
{
    /**
     * @var videoSummary[]
     */
    public $videoSummary;
    protected $_name = [
        'videoSummary' => 'VideoSummary',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoSummary) {
            $res['VideoSummary'] = [];
            if (null !== $this->videoSummary && \is_array($this->videoSummary)) {
                $n = 0;
                foreach ($this->videoSummary as $item) {
                    $res['VideoSummary'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoSummaryList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoSummary'])) {
            if (!empty($map['VideoSummary'])) {
                $model->videoSummary = [];
                $n                   = 0;
                foreach ($map['VideoSummary'] as $item) {
                    $model->videoSummary[$n++] = null !== $item ? videoSummary::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
