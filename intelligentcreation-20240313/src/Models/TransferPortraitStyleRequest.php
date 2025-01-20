<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class TransferPortraitStyleRequest extends Model
{
    /**
     * @var int
     */
    public $height;
    /**
     * @var string
     */
    public $imageUrl;
    /**
     * @var int
     */
    public $numbers;
    /**
     * @var int
     */
    public $redrawAmplitude;
    /**
     * @var int
     */
    public $style;
    /**
     * @var int
     */
    public $width;
    protected $_name = [
        'height'          => 'height',
        'imageUrl'        => 'imageUrl',
        'numbers'         => 'numbers',
        'redrawAmplitude' => 'redrawAmplitude',
        'style'           => 'style',
        'width'           => 'width',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->height) {
            $res['height'] = $this->height;
        }

        if (null !== $this->imageUrl) {
            $res['imageUrl'] = $this->imageUrl;
        }

        if (null !== $this->numbers) {
            $res['numbers'] = $this->numbers;
        }

        if (null !== $this->redrawAmplitude) {
            $res['redrawAmplitude'] = $this->redrawAmplitude;
        }

        if (null !== $this->style) {
            $res['style'] = $this->style;
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

        if (isset($map['imageUrl'])) {
            $model->imageUrl = $map['imageUrl'];
        }

        if (isset($map['numbers'])) {
            $model->numbers = $map['numbers'];
        }

        if (isset($map['redrawAmplitude'])) {
            $model->redrawAmplitude = $map['redrawAmplitude'];
        }

        if (isset($map['style'])) {
            $model->style = $map['style'];
        }

        if (isset($map['width'])) {
            $model->width = $map['width'];
        }

        return $model;
    }
}
