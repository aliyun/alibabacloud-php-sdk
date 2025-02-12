<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudRecordShrinkRequest;

use AlibabaCloud\Dara\Model;

class backgrounds extends Model
{
    /**
     * @var float
     */
    public $alpha;
    /**
     * @var int
     */
    public $backgroundCropMode;
    /**
     * @var float
     */
    public $height;
    /**
     * @var int
     */
    public $layer;
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
        parent::validate();
    }

    public function toArray($noStream = false)
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
