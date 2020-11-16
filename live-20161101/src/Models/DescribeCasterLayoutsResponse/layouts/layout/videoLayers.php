<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterLayoutsResponse\layouts\layout;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterLayoutsResponse\layouts\layout\videoLayers\videoLayer;
use AlibabaCloud\Tea\Model;

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
        Model::validateRequired('videoLayer', $this->videoLayer, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoLayer) {
            $res['VideoLayer'] = [];
            if (null !== $this->videoLayer && \is_array($this->videoLayer)) {
                $n = 0;
                foreach ($this->videoLayer as $item) {
                    $res['VideoLayer'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoLayers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoLayer'])) {
            if (!empty($map['VideoLayer'])) {
                $model->videoLayer = [];
                $n                 = 0;
                foreach ($map['VideoLayer'] as $item) {
                    $model->videoLayer[$n++] = null !== $item ? videoLayer::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
