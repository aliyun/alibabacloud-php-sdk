<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem\videoFrames\videoFrames;

class videoFrames extends Model
{
    /**
     * @var videoFrames[]
     */
    public $videoFrames;
    protected $_name = [
        'videoFrames' => 'VideoFrames',
    ];

    public function validate()
    {
        if (\is_array($this->videoFrames)) {
            Model::validateArray($this->videoFrames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->videoFrames) {
            if (\is_array($this->videoFrames)) {
                $res['VideoFrames'] = [];
                $n1 = 0;
                foreach ($this->videoFrames as $item1) {
                    $res['VideoFrames'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['VideoFrames'])) {
            if (!empty($map['VideoFrames'])) {
                $model->videoFrames = [];
                $n1 = 0;
                foreach ($map['VideoFrames'] as $item1) {
                    $model->videoFrames[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
