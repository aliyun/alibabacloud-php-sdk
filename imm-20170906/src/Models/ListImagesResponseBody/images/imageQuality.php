<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models\ListImagesResponseBody\images;

use AlibabaCloud\Tea\Model;

class imageQuality extends Model
{
    /**
     * @var float
     */
    public $clarity;

    /**
     * @var float
     */
    public $clarityScore;

    /**
     * @var float
     */
    public $color;

    /**
     * @var float
     */
    public $colorScore;

    /**
     * @var float
     */
    public $compositionScore;

    /**
     * @var float
     */
    public $contrast;

    /**
     * @var float
     */
    public $contrastScore;

    /**
     * @var float
     */
    public $exposure;

    /**
     * @var float
     */
    public $exposureScore;

    /**
     * @var float
     */
    public $overallScore;
    protected $_name = [
        'clarity'          => 'Clarity',
        'clarityScore'     => 'ClarityScore',
        'color'            => 'Color',
        'colorScore'       => 'ColorScore',
        'compositionScore' => 'CompositionScore',
        'contrast'         => 'Contrast',
        'contrastScore'    => 'ContrastScore',
        'exposure'         => 'Exposure',
        'exposureScore'    => 'ExposureScore',
        'overallScore'     => 'OverallScore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clarity) {
            $res['Clarity'] = $this->clarity;
        }
        if (null !== $this->clarityScore) {
            $res['ClarityScore'] = $this->clarityScore;
        }
        if (null !== $this->color) {
            $res['Color'] = $this->color;
        }
        if (null !== $this->colorScore) {
            $res['ColorScore'] = $this->colorScore;
        }
        if (null !== $this->compositionScore) {
            $res['CompositionScore'] = $this->compositionScore;
        }
        if (null !== $this->contrast) {
            $res['Contrast'] = $this->contrast;
        }
        if (null !== $this->contrastScore) {
            $res['ContrastScore'] = $this->contrastScore;
        }
        if (null !== $this->exposure) {
            $res['Exposure'] = $this->exposure;
        }
        if (null !== $this->exposureScore) {
            $res['ExposureScore'] = $this->exposureScore;
        }
        if (null !== $this->overallScore) {
            $res['OverallScore'] = $this->overallScore;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageQuality
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Clarity'])) {
            $model->clarity = $map['Clarity'];
        }
        if (isset($map['ClarityScore'])) {
            $model->clarityScore = $map['ClarityScore'];
        }
        if (isset($map['Color'])) {
            $model->color = $map['Color'];
        }
        if (isset($map['ColorScore'])) {
            $model->colorScore = $map['ColorScore'];
        }
        if (isset($map['CompositionScore'])) {
            $model->compositionScore = $map['CompositionScore'];
        }
        if (isset($map['Contrast'])) {
            $model->contrast = $map['Contrast'];
        }
        if (isset($map['ContrastScore'])) {
            $model->contrastScore = $map['ContrastScore'];
        }
        if (isset($map['Exposure'])) {
            $model->exposure = $map['Exposure'];
        }
        if (isset($map['ExposureScore'])) {
            $model->exposureScore = $map['ExposureScore'];
        }
        if (isset($map['OverallScore'])) {
            $model->overallScore = $map['OverallScore'];
        }

        return $model;
    }
}
