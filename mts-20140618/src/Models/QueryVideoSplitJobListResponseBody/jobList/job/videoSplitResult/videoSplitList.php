<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryVideoSplitJobListResponseBody\jobList\job\videoSplitResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryVideoSplitJobListResponseBody\jobList\job\videoSplitResult\videoSplitList\videoSplit;
use AlibabaCloud\Tea\Model;

class videoSplitList extends Model
{
    /**
     * @var videoSplit[]
     */
    public $videoSplit;
    protected $_name = [
        'videoSplit' => 'VideoSplit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoSplit) {
            $res['VideoSplit'] = [];
            if (null !== $this->videoSplit && \is_array($this->videoSplit)) {
                $n = 0;
                foreach ($this->videoSplit as $item) {
                    $res['VideoSplit'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoSplitList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoSplit'])) {
            if (!empty($map['VideoSplit'])) {
                $model->videoSplit = [];
                $n                 = 0;
                foreach ($map['VideoSplit'] as $item) {
                    $model->videoSplit[$n++] = null !== $item ? videoSplit::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
