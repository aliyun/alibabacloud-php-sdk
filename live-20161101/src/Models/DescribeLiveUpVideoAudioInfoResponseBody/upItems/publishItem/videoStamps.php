<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem;

use AlibabaCloud\Tea\Model;

class videoStamps extends Model
{
    /**
     * @var videoStamps\videoStamps[]
     */
    public $videoStamps;
    protected $_name = [
        'videoStamps' => 'VideoStamps',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoStamps) {
            $res['VideoStamps'] = [];
            if (null !== $this->videoStamps && \is_array($this->videoStamps)) {
                $n = 0;
                foreach ($this->videoStamps as $item) {
                    $res['VideoStamps'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoStamps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoStamps'])) {
            if (!empty($map['VideoStamps'])) {
                $model->videoStamps = [];
                $n = 0;
                foreach ($map['VideoStamps'] as $item) {
                    $model->videoStamps[$n++] = null !== $item ? videoStamps\videoStamps::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
