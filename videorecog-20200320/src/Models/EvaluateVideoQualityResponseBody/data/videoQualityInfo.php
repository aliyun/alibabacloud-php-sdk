<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320\Models\EvaluateVideoQualityResponseBody\data;

use AlibabaCloud\Tea\Model;

class videoQualityInfo extends Model
{
    /**
     * @example 0.15
     *
     * @var float
     */
    public $blurriness;

    /**
     * @example 0.55
     *
     * @var float
     */
    public $colorContrast;

    /**
     * @example 0.17
     *
     * @var float
     */
    public $colorSaturation;

    /**
     * @example 0.48
     *
     * @var float
     */
    public $colorfulness;

    /**
     * @example 0.25
     *
     * @var float
     */
    public $compressiveStrength;

    /**
     * @example 0.51
     *
     * @var float
     */
    public $luminance;

    /**
     * @example 0.7048
     *
     * @var float
     */
    public $mosScore;

    /**
     * @example 0.01
     *
     * @var float
     */
    public $noiseIntensity;
    protected $_name = [
        'blurriness'          => 'Blurriness',
        'colorContrast'       => 'ColorContrast',
        'colorSaturation'     => 'ColorSaturation',
        'colorfulness'        => 'Colorfulness',
        'compressiveStrength' => 'CompressiveStrength',
        'luminance'           => 'Luminance',
        'mosScore'            => 'MosScore',
        'noiseIntensity'      => 'NoiseIntensity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blurriness) {
            $res['Blurriness'] = $this->blurriness;
        }
        if (null !== $this->colorContrast) {
            $res['ColorContrast'] = $this->colorContrast;
        }
        if (null !== $this->colorSaturation) {
            $res['ColorSaturation'] = $this->colorSaturation;
        }
        if (null !== $this->colorfulness) {
            $res['Colorfulness'] = $this->colorfulness;
        }
        if (null !== $this->compressiveStrength) {
            $res['CompressiveStrength'] = $this->compressiveStrength;
        }
        if (null !== $this->luminance) {
            $res['Luminance'] = $this->luminance;
        }
        if (null !== $this->mosScore) {
            $res['MosScore'] = $this->mosScore;
        }
        if (null !== $this->noiseIntensity) {
            $res['NoiseIntensity'] = $this->noiseIntensity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoQualityInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Blurriness'])) {
            $model->blurriness = $map['Blurriness'];
        }
        if (isset($map['ColorContrast'])) {
            $model->colorContrast = $map['ColorContrast'];
        }
        if (isset($map['ColorSaturation'])) {
            $model->colorSaturation = $map['ColorSaturation'];
        }
        if (isset($map['Colorfulness'])) {
            $model->colorfulness = $map['Colorfulness'];
        }
        if (isset($map['CompressiveStrength'])) {
            $model->compressiveStrength = $map['CompressiveStrength'];
        }
        if (isset($map['Luminance'])) {
            $model->luminance = $map['Luminance'];
        }
        if (isset($map['MosScore'])) {
            $model->mosScore = $map['MosScore'];
        }
        if (isset($map['NoiseIntensity'])) {
            $model->noiseIntensity = $map['NoiseIntensity'];
        }

        return $model;
    }
}
