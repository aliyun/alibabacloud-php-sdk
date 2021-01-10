<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryVideoSplitJobListResponseBody\jobList\job;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryVideoSplitJobListResponseBody\jobList\job\videoSplitResult\videoSplitList;
use AlibabaCloud\Tea\Model;

class videoSplitResult extends Model
{
    /**
     * @var videoSplitList
     */
    public $videoSplitList;
    protected $_name = [
        'videoSplitList' => 'VideoSplitList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoSplitList) {
            $res['VideoSplitList'] = null !== $this->videoSplitList ? $this->videoSplitList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoSplitResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoSplitList'])) {
            $model->videoSplitList = videoSplitList::fromMap($map['VideoSplitList']);
        }

        return $model;
    }
}
