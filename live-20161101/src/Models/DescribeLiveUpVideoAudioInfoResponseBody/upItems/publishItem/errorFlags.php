<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem;

use AlibabaCloud\Tea\Model;

class errorFlags extends Model
{
    /**
     * @var errorFlags\errorFlags[]
     */
    public $errorFlags;
    protected $_name = [
        'errorFlags' => 'ErrorFlags',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorFlags) {
            $res['ErrorFlags'] = [];
            if (null !== $this->errorFlags && \is_array($this->errorFlags)) {
                $n = 0;
                foreach ($this->errorFlags as $item) {
                    $res['ErrorFlags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return errorFlags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorFlags'])) {
            if (!empty($map['ErrorFlags'])) {
                $model->errorFlags = [];
                $n = 0;
                foreach ($map['ErrorFlags'] as $item) {
                    $model->errorFlags[$n++] = null !== $item ? errorFlags\errorFlags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
