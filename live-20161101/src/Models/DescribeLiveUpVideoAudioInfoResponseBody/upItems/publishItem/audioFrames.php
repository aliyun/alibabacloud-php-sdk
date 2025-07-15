<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem;

use AlibabaCloud\Tea\Model;

class audioFrames extends Model
{
    /**
     * @var audioFrames\audioFrames[]
     */
    public $audioFrames;
    protected $_name = [
        'audioFrames' => 'AudioFrames',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioFrames) {
            $res['AudioFrames'] = [];
            if (null !== $this->audioFrames && \is_array($this->audioFrames)) {
                $n = 0;
                foreach ($this->audioFrames as $item) {
                    $res['AudioFrames'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return audioFrames
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioFrames'])) {
            if (!empty($map['AudioFrames'])) {
                $model->audioFrames = [];
                $n = 0;
                foreach ($map['AudioFrames'] as $item) {
                    $model->audioFrames[$n++] = null !== $item ? audioFrames\audioFrames::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
