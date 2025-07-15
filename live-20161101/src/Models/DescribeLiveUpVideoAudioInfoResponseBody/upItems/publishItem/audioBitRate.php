<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem;

use AlibabaCloud\Tea\Model;

class audioBitRate extends Model
{
    /**
     * @var audioBitRate\audioBitRate[]
     */
    public $audioBitRate;
    protected $_name = [
        'audioBitRate' => 'AudioBitRate',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioBitRate) {
            $res['AudioBitRate'] = [];
            if (null !== $this->audioBitRate && \is_array($this->audioBitRate)) {
                $n = 0;
                foreach ($this->audioBitRate as $item) {
                    $res['AudioBitRate'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return audioBitRate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioBitRate'])) {
            if (!empty($map['AudioBitRate'])) {
                $model->audioBitRate = [];
                $n = 0;
                foreach ($map['AudioBitRate'] as $item) {
                    $model->audioBitRate[$n++] = null !== $item ? audioBitRate\audioBitRate::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
