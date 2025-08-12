<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem\audioBitRate\audioBitRate;

class audioBitRate extends Model
{
    /**
     * @var audioBitRate[]
     */
    public $audioBitRate;
    protected $_name = [
        'audioBitRate' => 'AudioBitRate',
    ];

    public function validate()
    {
        if (\is_array($this->audioBitRate)) {
            Model::validateArray($this->audioBitRate);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioBitRate) {
            if (\is_array($this->audioBitRate)) {
                $res['AudioBitRate'] = [];
                $n1 = 0;
                foreach ($this->audioBitRate as $item1) {
                    $res['AudioBitRate'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AudioBitRate'])) {
            if (!empty($map['AudioBitRate'])) {
                $model->audioBitRate = [];
                $n1 = 0;
                foreach ($map['AudioBitRate'] as $item1) {
                    $model->audioBitRate[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
