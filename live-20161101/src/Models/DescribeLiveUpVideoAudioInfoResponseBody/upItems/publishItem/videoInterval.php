<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem\videoInterval\videoInterval;

class videoInterval extends Model
{
    /**
     * @var videoInterval[]
     */
    public $videoInterval;
    protected $_name = [
        'videoInterval' => 'VideoInterval',
    ];

    public function validate()
    {
        if (\is_array($this->videoInterval)) {
            Model::validateArray($this->videoInterval);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->videoInterval) {
            if (\is_array($this->videoInterval)) {
                $res['VideoInterval'] = [];
                $n1 = 0;
                foreach ($this->videoInterval as $item1) {
                    $res['VideoInterval'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['VideoInterval'])) {
            if (!empty($map['VideoInterval'])) {
                $model->videoInterval = [];
                $n1 = 0;
                foreach ($map['VideoInterval'] as $item1) {
                    $model->videoInterval[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
