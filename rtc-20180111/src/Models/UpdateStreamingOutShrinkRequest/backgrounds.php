<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateStreamingOutShrinkRequest;

use AlibabaCloud\Tea\Model;

class backgrounds extends Model
{
    /**
     * @example 0.9
     *
     * @var float
     */
    public $alpha;

    /**
     * @example 2
     *
     * @var int
     */
    public $backgroundCropMode;

    /**
     * @description This parameter is required.
     *
     * @example 0.2
     *
     * @var float
     */
    public $height;

    /**
     * @example 0
     *
     * @var int
     */
    public $layer;

    /**
     * @description This parameter is required.
     *
     * @example https://aliyun.com/123.jpg
     *
     * @var string
     */
    public $url;

    /**
     * @description This parameter is required.
     *
     * @example 0.2
     *
     * @var float
     */
    public $width;

    /**
     * @description This parameter is required.
     *
     * @example 0.2
     *
     * @var float
     */
    public $x;

    /**
     * @description This parameter is required.
     *
     * @example 0.2
     *
     * @var float
     */
    public $y;
    protected $_name = [
        'alpha'              => 'Alpha',
        'backgroundCropMode' => 'BackgroundCropMode',
        'height'             => 'Height',
        'layer'              => 'Layer',
        'url'                => 'Url',
        'width'              => 'Width',
        'x'                  => 'X',
        'y'                  => 'Y',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alpha) {
            $res['Alpha'] = $this->alpha;
        }
        if (null !== $this->backgroundCropMode) {
            $res['BackgroundCropMode'] = $this->backgroundCropMode;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->layer) {
            $res['Layer'] = $this->layer;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backgrounds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alpha'])) {
            $model->alpha = $map['Alpha'];
        }
        if (isset($map['BackgroundCropMode'])) {
            $model->backgroundCropMode = $map['BackgroundCropMode'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Layer'])) {
            $model->layer = $map['Layer'];
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

        return $model;
    }
}
