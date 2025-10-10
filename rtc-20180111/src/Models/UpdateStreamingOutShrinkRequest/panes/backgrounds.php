<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateStreamingOutShrinkRequest\panes;

use AlibabaCloud\Dara\Model;

class backgrounds extends Model
{
    /**
     * @var float
     */
    public $alpha;

    /**
     * @var string
     */
    public $display;

    /**
     * @var float
     */
    public $height;

    /**
     * @var int
     */
    public $layer;

    /**
     * @var int
     */
    public $paneBackgroundCropMode;

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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
