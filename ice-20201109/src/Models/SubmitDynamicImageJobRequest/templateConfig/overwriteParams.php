<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SubmitDynamicImageJobRequest\templateConfig;

use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitDynamicImageJobRequest\templateConfig\overwriteParams\timeSpan;
use AlibabaCloud\Tea\Model;

class overwriteParams extends Model
{
    /**
     * @description The format of the animated image. Valid values:
     *
     *   **gif**
     *   **webp**
     *
     * @example gif
     *
     * @var string
     */
    public $format;

    /**
     * @description The frame rate. Valid values: [1,60].
     *
     * @example 15
     *
     * @var int
     */
    public $fps;

    /**
     * @description The height of the animated image. Valid values: [128,4096].
     *
     * @example 720
     *
     * @var int
     */
    public $height;

    /**
     * @description Specifies whether to enable the auto-rotate screen feature. Valid values:
     *
     *   **true**
     *   **false**
     *
     * Default value: **true**.
     *
     * >  If this feature is enabled, the width of the output video corresponds to the long side of the input video, which is the height of the input video in portrait mode. The height of the output video corresponds to the short side of the input video, which is the width of the input video in portrait mode.
     * @example false
     *
     * @var bool
     */
    public $longShortMode;

    /**
     * @description The scan mode. Valid values:
     *
     *   **interlaced**
     *   **progressive** This is the default value.
     *
     * @example progressive
     *
     * @var string
     */
    public $scanMode;

    /**
     * @description The timeline parameters.
     *
     * @var timeSpan
     */
    public $timeSpan;

    /**
     * @description The width of the animated image. Valid values: [128,4096].
     *
     * @example 1024
     *
     * @var int
     */
    public $width;
    protected $_name = [
        'format'        => 'Format',
        'fps'           => 'Fps',
        'height'        => 'Height',
        'longShortMode' => 'LongShortMode',
        'scanMode'      => 'ScanMode',
        'timeSpan'      => 'TimeSpan',
        'width'         => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->fps) {
            $res['Fps'] = $this->fps;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->longShortMode) {
            $res['LongShortMode'] = $this->longShortMode;
        }
        if (null !== $this->scanMode) {
            $res['ScanMode'] = $this->scanMode;
        }
        if (null !== $this->timeSpan) {
            $res['TimeSpan'] = null !== $this->timeSpan ? $this->timeSpan->toMap() : null;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return overwriteParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['Fps'])) {
            $model->fps = $map['Fps'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['LongShortMode'])) {
            $model->longShortMode = $map['LongShortMode'];
        }
        if (isset($map['ScanMode'])) {
            $model->scanMode = $map['ScanMode'];
        }
        if (isset($map['TimeSpan'])) {
            $model->timeSpan = timeSpan::fromMap($map['TimeSpan']);
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
