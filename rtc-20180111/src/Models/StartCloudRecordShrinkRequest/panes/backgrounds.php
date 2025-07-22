<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudRecordShrinkRequest\panes;

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
     * @example backup
     *
     * @var string
     */
    public $display;

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
     * @example 2
     *
     * @var int
     */
    public $paneBackgroundCropMode;

    /**
     * @description This parameter is required.
     *
     * @example https://aliyun.com/123xx.jpg
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
        'alpha' => 'Alpha',
        'display' => 'Display',
        'height' => 'Height',
        'layer' => 'Layer',
        'paneBackgroundCropMode' => 'PaneBackgroundCropMode',
        'url' => 'Url',
        'width' => 'Width',
        'x' => 'X',
        'y' => 'Y',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->alpha) {
            $res['Alpha'] = $this->alpha;
        }
        if (null !== $this->display) {
            $res['Display'] = $this->display;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->layer) {
            $res['Layer'] = $this->layer;
        }
        if (null !== $this->paneBackgroundCropMode) {
            $res['PaneBackgroundCropMode'] = $this->paneBackgroundCropMode;
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
        if (isset($map['Display'])) {
            $model->display = $map['Display'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Layer'])) {
            $model->layer = $map['Layer'];
        }
        if (isset($map['PaneBackgroundCropMode'])) {
            $model->paneBackgroundCropMode = $map['PaneBackgroundCropMode'];
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
