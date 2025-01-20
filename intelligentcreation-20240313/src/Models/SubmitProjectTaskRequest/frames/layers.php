<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SubmitProjectTaskRequest\frames;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SubmitProjectTaskRequest\frames\layers\material;

class layers extends Model
{
    /**
     * @var int
     */
    public $height;
    /**
     * @var int
     */
    public $index;
    /**
     * @var material
     */
    public $material;
    /**
     * @var int
     */
    public $positionX;
    /**
     * @var int
     */
    public $positionY;
    /**
     * @var string
     */
    public $type;
    /**
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
        if (null !== $this->material) {
            $this->material->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->height) {
            $res['height'] = $this->height;
        }

        if (null !== $this->index) {
            $res['index'] = $this->index;
        }

        if (null !== $this->material) {
            $res['material'] = null !== $this->material ? $this->material->toArray($noStream) : $this->material;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
