<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem;

use AlibabaCloud\Tea\Model;

class videoInterval extends Model
{
    /**
     * @var videoInterval\videoInterval[]
     */
    public $videoInterval;
    protected $_name = [
        'videoInterval' => 'VideoInterval',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoInterval) {
            $res['VideoInterval'] = [];
            if (null !== $this->videoInterval && \is_array($this->videoInterval)) {
                $n = 0;
                foreach ($this->videoInterval as $item) {
                    $res['VideoInterval'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoInterval
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoInterval'])) {
            if (!empty($map['VideoInterval'])) {
                $model->videoInterval = [];
                $n = 0;
                foreach ($map['VideoInterval'] as $item) {
                    $model->videoInterval[$n++] = null !== $item ? videoInterval\videoInterval::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
