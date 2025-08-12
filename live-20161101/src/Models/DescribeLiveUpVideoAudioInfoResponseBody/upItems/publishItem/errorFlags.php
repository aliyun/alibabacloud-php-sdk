<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem\errorFlags\errorFlags;

class errorFlags extends Model
{
    /**
     * @var errorFlags[]
     */
    public $errorFlags;
    protected $_name = [
        'errorFlags' => 'ErrorFlags',
    ];

    public function validate()
    {
        if (\is_array($this->errorFlags)) {
            Model::validateArray($this->errorFlags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorFlags) {
            if (\is_array($this->errorFlags)) {
                $res['ErrorFlags'] = [];
                $n1 = 0;
                foreach ($this->errorFlags as $item1) {
                    $res['ErrorFlags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorFlags'])) {
            if (!empty($map['ErrorFlags'])) {
                $model->errorFlags = [];
                $n1 = 0;
                foreach ($map['ErrorFlags'] as $item1) {
                    $model->errorFlags[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
