<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem;

use AlibabaCloud\Tea\Model;

class audioInterval extends Model
{
    /**
     * @var audioInterval\audioInterval[]
     */
    public $audioInterval;
    protected $_name = [
        'audioInterval' => 'AudioInterval',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioInterval) {
            $res['AudioInterval'] = [];
            if (null !== $this->audioInterval && \is_array($this->audioInterval)) {
                $n = 0;
                foreach ($this->audioInterval as $item) {
                    $res['AudioInterval'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return audioInterval
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioInterval'])) {
            if (!empty($map['AudioInterval'])) {
                $model->audioInterval = [];
                $n = 0;
                foreach ($map['AudioInterval'] as $item) {
                    $model->audioInterval[$n++] = null !== $item ? audioInterval\audioInterval::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
