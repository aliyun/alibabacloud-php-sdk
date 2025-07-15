<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem;

use AlibabaCloud\Tea\Model;

class audioStamps extends Model
{
    /**
     * @var audioStamps\audioStamps[]
     */
    public $audioStamps;
    protected $_name = [
        'audioStamps' => 'AudioStamps',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioStamps) {
            $res['AudioStamps'] = [];
            if (null !== $this->audioStamps && \is_array($this->audioStamps)) {
                $n = 0;
                foreach ($this->audioStamps as $item) {
                    $res['AudioStamps'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return audioStamps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioStamps'])) {
            if (!empty($map['AudioStamps'])) {
                $model->audioStamps = [];
                $n = 0;
                foreach ($map['AudioStamps'] as $item) {
                    $model->audioStamps[$n++] = null !== $item ? audioStamps\audioStamps::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
