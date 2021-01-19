<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20200910\Models;

use AlibabaCloud\Tea\Model;

class DetectIPCPedestrianOptimizedRequest extends Model
{
    /**
     * @description image data
     *
     * @var int[]
     */
    public $imageData;

    /**
     * @description image width
     *
     * @var int
     */
    public $width;

    /**
     * @description image height
     *
     * @var int
     */
    public $height;
    protected $_name = [
        'imageData' => 'imageData',
        'width'     => 'width',
        'height'    => 'height',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageData) {
            $res['imageData'] = $this->imageData;
        }
        if (null !== $this->width) {
            $res['width'] = $this->width;
        }
        if (null !== $this->height) {
            $res['height'] = $this->height;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectIPCPedestrianOptimizedRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['imageData'])) {
            $model->imageData = $map['imageData'];
        }
        if (isset($map['width'])) {
            $model->width = $map['width'];
        }
        if (isset($map['height'])) {
            $model->height = $map['height'];
        }

        return $model;
    }
}
