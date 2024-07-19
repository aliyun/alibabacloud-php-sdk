<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SubmitProjectTaskRequest\frames;

use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SubmitProjectTaskRequest\frames\layers\material;
use AlibabaCloud\Tea\Model;

class layers extends Model
{
    /**
     * @example 222
     *
     * @var int
     */
    public $height;

    /**
     * @example 1
     *
     * @var int
     */
    public $index;

    /**
     * @var material
     */
    public $material;

    /**
     * @example 11
     *
     * @var int
     */
    public $positionX;

    /**
     * @example 22
     *
     * @var int
     */
    public $positionY;

    /**
     * @example ANCHOR
     *
     * @var string
     */
    public $type;

    /**
     * @example 111
     *
     * @var int
     */
    public $width;
    protected $_name = [
        'height'    => 'height',
        'index'     => 'index',
        'material'  => 'material',
        'positionX' => 'positionX',
        'positionY' => 'positionY',
        'type'      => 'type',
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
        if (null !== $this->index) {
            $res['index'] = $this->index;
        }
        if (null !== $this->material) {
            $res['material'] = null !== $this->material ? $this->material->toMap() : null;
        }
        if (null !== $this->positionX) {
            $res['positionX'] = $this->positionX;
        }
        if (null !== $this->positionY) {
            $res['positionY'] = $this->positionY;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->width) {
            $res['width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return layers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['height'])) {
            $model->height = $map['height'];
        }
        if (isset($map['index'])) {
            $model->index = $map['index'];
        }
        if (isset($map['material'])) {
            $model->material = material::fromMap($map['material']);
        }
        if (isset($map['positionX'])) {
            $model->positionX = $map['positionX'];
        }
        if (isset($map['positionY'])) {
            $model->positionY = $map['positionY'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['width'])) {
            $model->width = $map['width'];
        }

        return $model;
    }
}
