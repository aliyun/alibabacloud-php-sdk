<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem\videoAndAudioStamp\vAStamp;
use AlibabaCloud\Tea\Model;

class videoAndAudioStamp extends Model
{
    /**
     * @var vAStamp[]
     */
    public $vAStamp;
    protected $_name = [
        'vAStamp' => 'V_AStamp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->vAStamp) {
            $res['V_AStamp'] = [];
            if (null !== $this->vAStamp && \is_array($this->vAStamp)) {
                $n = 0;
                foreach ($this->vAStamp as $item) {
                    $res['V_AStamp'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoAndAudioStamp
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['V_AStamp'])) {
            if (!empty($map['V_AStamp'])) {
                $model->vAStamp = [];
                $n = 0;
                foreach ($map['V_AStamp'] as $item) {
                    $model->vAStamp[$n++] = null !== $item ? vAStamp::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
