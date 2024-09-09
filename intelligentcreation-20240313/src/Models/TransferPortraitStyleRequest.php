<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class TransferPortraitStyleRequest extends Model
{
    /**
     * @example 500
     *
     * @var int
     */
    public $height;

    /**
     * @example WWW
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @example 4
     *
     * @var int
     */
    public $numbers;

    /**
     * @example 1
     *
     * @var int
     */
    public $redrawAmplitude;

    /**
     * @example 1
     *
     * @var int
     */
    public $style;

    /**
     * @example 500
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return TransferPortraitStyleRequest
     */
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
