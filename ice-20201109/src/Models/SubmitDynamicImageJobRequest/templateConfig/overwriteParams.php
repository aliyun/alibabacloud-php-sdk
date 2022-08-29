<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SubmitDynamicImageJobRequest\templateConfig;

use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitDynamicImageJobRequest\templateConfig\overwriteParams\timeSpan;
use AlibabaCloud\Tea\Model;

class overwriteParams extends Model
{
    /**
     * @var string
     */
    public $format;

    /**
     * @var int
     */
    public $fps;

    /**
     * @var int
     */
    public $height;

    /**
     * @var bool
     */
    public $longShortMode;

    /**
     * @var string
     */
    public $scanMode;

    /**
     * @var timeSpan
     */
    public $timeSpan;

    /**
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
