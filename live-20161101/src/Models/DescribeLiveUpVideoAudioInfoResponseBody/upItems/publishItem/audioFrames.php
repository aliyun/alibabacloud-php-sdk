<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem\audioFrames\audioFrames;

class audioFrames extends Model
{
    /**
     * @var audioFrames[]
     */
    public $audioFrames;
    protected $_name = [
        'audioFrames' => 'AudioFrames',
    ];

    public function validate()
    {
        if (\is_array($this->audioFrames)) {
            Model::validateArray($this->audioFrames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioFrames) {
            if (\is_array($this->audioFrames)) {
                $res['AudioFrames'] = [];
                $n1 = 0;
                foreach ($this->audioFrames as $item1) {
                    $res['AudioFrames'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AudioFrames'])) {
            if (!empty($map['AudioFrames'])) {
                $model->audioFrames = [];
                $n1 = 0;
                foreach ($map['AudioFrames'] as $item1) {
                    $model->audioFrames[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
