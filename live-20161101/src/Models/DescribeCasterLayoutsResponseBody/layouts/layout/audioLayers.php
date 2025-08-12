<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterLayoutsResponseBody\layouts\layout;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterLayoutsResponseBody\layouts\layout\audioLayers\audioLayer;

class audioLayers extends Model
{
    /**
     * @var audioLayer[]
     */
    public $audioLayer;
    protected $_name = [
        'audioLayer' => 'AudioLayer',
    ];

    public function validate()
    {
        if (\is_array($this->audioLayer)) {
            Model::validateArray($this->audioLayer);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioLayer) {
            if (\is_array($this->audioLayer)) {
                $res['AudioLayer'] = [];
                $n1 = 0;
                foreach ($this->audioLayer as $item1) {
                    $res['AudioLayer'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AudioLayer'])) {
            if (!empty($map['AudioLayer'])) {
                $model->audioLayer = [];
                $n1 = 0;
                foreach ($map['AudioLayer'] as $item1) {
                    $model->audioLayer[$n1] = audioLayer::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
