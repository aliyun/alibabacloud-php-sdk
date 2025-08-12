<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem\videoStamps\videoStamps;

class videoStamps extends Model
{
    /**
     * @var videoStamps[]
     */
    public $videoStamps;
    protected $_name = [
        'videoStamps' => 'VideoStamps',
    ];

    public function validate()
    {
        if (\is_array($this->videoStamps)) {
            Model::validateArray($this->videoStamps);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->videoStamps) {
            if (\is_array($this->videoStamps)) {
                $res['VideoStamps'] = [];
                $n1 = 0;
                foreach ($this->videoStamps as $item1) {
                    $res['VideoStamps'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['VideoStamps'])) {
            if (!empty($map['VideoStamps'])) {
                $model->videoStamps = [];
                $n1 = 0;
                foreach ($map['VideoStamps'] as $item1) {
                    $model->videoStamps[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
