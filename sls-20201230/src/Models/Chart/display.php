<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\Chart;

use AlibabaCloud\Tea\Model;

class display extends Model
{
    /**
     * @description 高度
     *
     * @var int
     */
    public $height;

    /**
     * @description 宽度
     *
     * @var int
     */
    public $width;

    /**
     * @description x 轴
     *
     * @var string[]
     */
    public $xAxis;

    /**
     * @description x 坐标
     *
     * @var int
     */
    public $xPos;

    /**
     * @description y 轴
     *
     * @var string[]
     */
    public $yAxis;

    /**
     * @description y 坐标
     *
     * @var int
     */
    public $yPos;
    protected $_name = [
        'height' => 'height',
        'width'  => 'width',
        'xAxis'  => 'xAxis',
        'xPos'   => 'xPos',
        'yAxis'  => 'yAxis',
        'yPos'   => 'yPos',
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
        if (null !== $this->width) {
            $res['width'] = $this->width;
        }
        if (null !== $this->xAxis) {
            $res['xAxis'] = $this->xAxis;
        }
        if (null !== $this->xPos) {
            $res['xPos'] = $this->xPos;
        }
        if (null !== $this->yAxis) {
            $res['yAxis'] = $this->yAxis;
        }
        if (null !== $this->yPos) {
            $res['yPos'] = $this->yPos;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return display
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['height'])) {
            $model->height = $map['height'];
        }
        if (isset($map['width'])) {
            $model->width = $map['width'];
        }
        if (isset($map['xAxis'])) {
            if (!empty($map['xAxis'])) {
                $model->xAxis = $map['xAxis'];
            }
        }
        if (isset($map['xPos'])) {
            $model->xPos = $map['xPos'];
        }
        if (isset($map['yAxis'])) {
            if (!empty($map['yAxis'])) {
                $model->yAxis = $map['yAxis'];
            }
        }
        if (isset($map['yPos'])) {
            $model->yPos = $map['yPos'];
        }

        return $model;
    }
}
