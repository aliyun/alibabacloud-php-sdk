<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterLayoutsResponse\layouts\layout;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterLayoutsResponse\layouts\layout\audioLayers\audioLayer;
use AlibabaCloud\Tea\Model;

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
        Model::validateRequired('audioLayer', $this->audioLayer, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioLayer) {
            $res['AudioLayer'] = [];
            if (null !== $this->audioLayer && \is_array($this->audioLayer)) {
                $n = 0;
                foreach ($this->audioLayer as $item) {
                    $res['AudioLayer'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return audioLayers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioLayer'])) {
            if (!empty($map['AudioLayer'])) {
                $model->audioLayer = [];
                $n                 = 0;
                foreach ($map['AudioLayer'] as $item) {
                    $model->audioLayer[$n++] = null !== $item ? audioLayer::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
