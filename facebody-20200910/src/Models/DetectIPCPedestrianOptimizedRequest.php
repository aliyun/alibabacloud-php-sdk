<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20200910\Models;

use AlibabaCloud\Tea\Model;

class DetectIPCPedestrianOptimizedRequest extends Model
{
    /**
     * @var int
     */
    public $height;

    /**
     * @var int[]
     */
    public $imageData;

    /**
     * @var int
     */
    public $width;
    protected $_name = [
        'height'    => 'height',
        'imageData' => 'imageData',
        'width'     => 'width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->height) {
            $res['height'] = $this->height;
        }
        if (null !== $this->imageData) {
            $res['imageData'] = $this->imageData;
        }
        if (null !== $this->width) {
            $res['width'] = $this->width;
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
        if (isset($map['height'])) {
            $model->height = $map['height'];
        }
        if (isset($map['imageData'])) {
            $model->imageData = $map['imageData'];
        }
        if (isset($map['width'])) {
            $model->width = $map['width'];
        }

        return $model;
    }
}
