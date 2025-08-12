<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem\audioInterval\audioInterval;

class audioInterval extends Model
{
    /**
     * @var audioInterval[]
     */
    public $audioInterval;
    protected $_name = [
        'audioInterval' => 'AudioInterval',
    ];

    public function validate()
    {
        if (\is_array($this->audioInterval)) {
            Model::validateArray($this->audioInterval);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioInterval) {
            if (\is_array($this->audioInterval)) {
                $res['AudioInterval'] = [];
                $n1 = 0;
                foreach ($this->audioInterval as $item1) {
                    $res['AudioInterval'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AudioInterval'])) {
            if (!empty($map['AudioInterval'])) {
                $model->audioInterval = [];
                $n1 = 0;
                foreach ($map['AudioInterval'] as $item1) {
                    $model->audioInterval[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
