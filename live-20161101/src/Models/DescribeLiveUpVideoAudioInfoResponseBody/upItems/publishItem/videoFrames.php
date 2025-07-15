<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem;

use AlibabaCloud\Tea\Model;

class videoFrames extends Model
{
    /**
     * @var videoFrames\videoFrames[]
     */
    public $videoFrames;
    protected $_name = [
        'videoFrames' => 'VideoFrames',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoFrames) {
            $res['VideoFrames'] = [];
            if (null !== $this->videoFrames && \is_array($this->videoFrames)) {
                $n = 0;
                foreach ($this->videoFrames as $item) {
                    $res['VideoFrames'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoFrames
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoFrames'])) {
            if (!empty($map['VideoFrames'])) {
                $model->videoFrames = [];
                $n = 0;
                foreach ($map['VideoFrames'] as $item) {
                    $model->videoFrames[$n++] = null !== $item ? videoFrames\videoFrames::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
