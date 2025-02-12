<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\StartRecordTaskRequest\userPanes;

use AlibabaCloud\Dara\Model;

class images extends Model
{
    /**
     * @var int
     */
    public $display;
    /**
     * @var float
     */
    public $height;
    /**
     * @var string
     */
    public $url;
    /**
     * @var float
     */
    public $width;
    /**
     * @var float
     */
    public $x;
    /**
     * @var float
     */
    public $y;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
