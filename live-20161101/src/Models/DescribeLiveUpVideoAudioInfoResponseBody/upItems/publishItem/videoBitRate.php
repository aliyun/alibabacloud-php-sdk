<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem;

use AlibabaCloud\Tea\Model;

class videoBitRate extends Model
{
    /**
     * @var videoBitRate\videoBitRate[]
     */
    public $videoBitRate;
    protected $_name = [
        'videoBitRate' => 'VideoBitRate',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoBitRate) {
            $res['VideoBitRate'] = [];
            if (null !== $this->videoBitRate && \is_array($this->videoBitRate)) {
                $n = 0;
                foreach ($this->videoBitRate as $item) {
                    $res['VideoBitRate'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoBitRate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoBitRate'])) {
            if (!empty($map['VideoBitRate'])) {
                $model->videoBitRate = [];
                $n = 0;
                foreach ($map['VideoBitRate'] as $item) {
                    $model->videoBitRate[$n++] = null !== $item ? videoBitRate\videoBitRate::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
