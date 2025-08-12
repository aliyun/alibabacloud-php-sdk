<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem\audioStamps\audioStamps;

class audioStamps extends Model
{
    /**
     * @var audioStamps[]
     */
    public $audioStamps;
    protected $_name = [
        'audioStamps' => 'AudioStamps',
    ];

    public function validate()
    {
        if (\is_array($this->audioStamps)) {
            Model::validateArray($this->audioStamps);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioStamps) {
            if (\is_array($this->audioStamps)) {
                $res['AudioStamps'] = [];
                $n1 = 0;
                foreach ($this->audioStamps as $item1) {
                    $res['AudioStamps'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AudioStamps'])) {
            if (!empty($map['AudioStamps'])) {
                $model->audioStamps = [];
                $n1 = 0;
                foreach ($map['AudioStamps'] as $item1) {
                    $model->audioStamps[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
