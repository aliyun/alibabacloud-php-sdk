<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320\Models\EvaluateVideoQualityResponseBody\data;

use AlibabaCloud\Dara\Model;

class videoQualityInfo extends Model
{
    /**
     * @var float
     */
    public $blurriness;

    /**
     * @var float
     */
    public $colorContrast;

    /**
     * @var float
     */
    public $colorSaturation;

    /**
     * @var float
     */
    public $colorfulness;

    /**
     * @var float
     */
    public $compressiveStrength;

    /**
     * @var float
     */
    public $luminance;

    /**
     * @var float
     */
    public $mosScore;

    /**
     * @var float
     */
    public $noiseIntensity;
    protected $_name = [
        'blurriness' => 'Blurriness',
        'colorContrast' => 'ColorContrast',
        'colorSaturation' => 'ColorSaturation',
        'colorfulness' => 'Colorfulness',
        'compressiveStrength' => 'CompressiveStrength',
        'luminance' => 'Luminance',
        'mosScore' => 'MosScore',
        'noiseIntensity' => 'NoiseIntensity',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
