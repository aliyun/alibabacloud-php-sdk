<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterLayoutsResponseBody\layouts\layout;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterLayoutsResponseBody\layouts\layout\videoLayers\videoLayer;

class videoLayers extends Model
{
    /**
     * @var videoLayer[]
     */
    public $videoLayer;
    protected $_name = [
        'videoLayer' => 'VideoLayer',
    ];

    public function validate()
    {
        if (\is_array($this->videoLayer)) {
            Model::validateArray($this->videoLayer);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->videoLayer) {
            if (\is_array($this->videoLayer)) {
                $res['VideoLayer'] = [];
                $n1 = 0;
                foreach ($this->videoLayer as $item1) {
                    $res['VideoLayer'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['VideoLayer'])) {
            if (!empty($map['VideoLayer'])) {
                $model->videoLayer = [];
                $n1 = 0;
                foreach ($map['VideoLayer'] as $item1) {
                    $model->videoLayer[$n1] = videoLayer::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
