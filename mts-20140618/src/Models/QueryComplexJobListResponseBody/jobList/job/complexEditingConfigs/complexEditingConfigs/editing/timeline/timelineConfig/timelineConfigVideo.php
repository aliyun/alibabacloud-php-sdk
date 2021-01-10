<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryComplexJobListResponseBody\jobList\job\complexEditingConfigs\complexEditingConfigs\editing\timeline\timelineConfig;

use AlibabaCloud\Tea\Model;

class timelineConfigVideo extends Model
{
    /**
     * @var string
     */
    public $bgColor;

    /**
     * @var string
     */
    public $width;

    /**
     * @var string
     */
    public $renderRatio;

    /**
     * @var string
     */
    public $isGpuData;

    /**
     * @var string
     */
    public $height;

    /**
     * @var string
     */
    public $isOneTrackData;

    /**
     * @var string
     */
    public $fps;

    /**
     * @var string
     */
    public $reclosePrec;
    protected $_name = [
        'bgColor'        => 'BgColor',
        'width'          => 'Width',
        'renderRatio'    => 'RenderRatio',
        'isGpuData'      => 'IsGpuData',
        'height'         => 'Height',
        'isOneTrackData' => 'IsOneTrackData',
        'fps'            => 'Fps',
        'reclosePrec'    => 'ReclosePrec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bgColor) {
            $res['BgColor'] = $this->bgColor;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->renderRatio) {
            $res['RenderRatio'] = $this->renderRatio;
        }
        if (null !== $this->isGpuData) {
            $res['IsGpuData'] = $this->isGpuData;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->isOneTrackData) {
            $res['IsOneTrackData'] = $this->isOneTrackData;
        }
        if (null !== $this->fps) {
            $res['Fps'] = $this->fps;
        }
        if (null !== $this->reclosePrec) {
            $res['ReclosePrec'] = $this->reclosePrec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return timelineConfigVideo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BgColor'])) {
            $model->bgColor = $map['BgColor'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['RenderRatio'])) {
            $model->renderRatio = $map['RenderRatio'];
        }
        if (isset($map['IsGpuData'])) {
            $model->isGpuData = $map['IsGpuData'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['IsOneTrackData'])) {
            $model->isOneTrackData = $map['IsOneTrackData'];
        }
        if (isset($map['Fps'])) {
            $model->fps = $map['Fps'];
        }
        if (isset($map['ReclosePrec'])) {
            $model->reclosePrec = $map['ReclosePrec'];
        }

        return $model;
    }
}
