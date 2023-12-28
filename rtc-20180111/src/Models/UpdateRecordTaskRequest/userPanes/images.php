<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateRecordTaskRequest\userPanes;

use AlibabaCloud\Tea\Model;

class images extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $display;

    /**
     * @example 0.2456
     *
     * @var float
     */
    public $height;

    /**
     * @example https://www.example.com/image.jpg
     *
     * @var string
     */
    public $url;

    /**
     * @example 0.2456
     *
     * @var float
     */
    public $width;

    /**
     * @example 0.7576
     *
     * @var float
     */
    public $x;

    /**
     * @example 0.7576
     *
     * @var float
     */
    public $y;

    /**
     * @example 0
     *
     * @var int
     */
    public $ZOrder;
    protected $_name = [
        'display' => 'Display',
        'height'  => 'Height',
        'url'     => 'Url',
        'width'   => 'Width',
        'x'       => 'X',
        'y'       => 'Y',
        'ZOrder'  => 'ZOrder',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->display) {
            $res['Display'] = $this->display;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->x) {
            $res['X'] = $this->x;
        }
        if (null !== $this->y) {
            $res['Y'] = $this->y;
        }
        if (null !== $this->ZOrder) {
            $res['ZOrder'] = $this->ZOrder;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return images
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Display'])) {
            $model->display = $map['Display'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['X'])) {
            $model->x = $map['X'];
        }
        if (isset($map['Y'])) {
            $model->y = $map['Y'];
        }
        if (isset($map['ZOrder'])) {
            $model->ZOrder = $map['ZOrder'];
        }

        return $model;
    }
}
