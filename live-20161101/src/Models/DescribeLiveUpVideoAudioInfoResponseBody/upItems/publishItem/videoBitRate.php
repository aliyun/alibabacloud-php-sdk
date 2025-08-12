<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem\videoBitRate\videoBitRate;

class videoBitRate extends Model
{
    /**
     * @var videoBitRate[]
     */
    public $videoBitRate;
    protected $_name = [
        'videoBitRate' => 'VideoBitRate',
    ];

    public function validate()
    {
        if (\is_array($this->videoBitRate)) {
            Model::validateArray($this->videoBitRate);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->videoBitRate) {
            if (\is_array($this->videoBitRate)) {
                $res['VideoBitRate'] = [];
                $n1 = 0;
                foreach ($this->videoBitRate as $item1) {
                    $res['VideoBitRate'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['VideoBitRate'])) {
            if (!empty($map['VideoBitRate'])) {
                $model->videoBitRate = [];
                $n1 = 0;
                foreach ($map['VideoBitRate'] as $item1) {
                    $model->videoBitRate[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
