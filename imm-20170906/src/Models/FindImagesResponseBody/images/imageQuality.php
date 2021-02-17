<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models\FindImagesResponseBody\images;

use AlibabaCloud\Tea\Model;

class imageQuality extends Model
{
    /**
     * @var float
     */
    public $overallScore;

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
    public $contrastScore;

    /**
     * @var float
     */
    public $contrast;

    /**
     * @var float
     */
    public $exposureScore;

    /**
     * @var float
     */
    public $clarityScore;

    /**
     * @var float
     */
    public $clarity;

    /**
     * @var float
     */
    public $exposure;

    /**
     * @var float
     */
    public $compositionScore;
    protected $_name = [
        'overallScore'     => 'OverallScore',
        'color'            => 'Color',
        'colorScore'       => 'ColorScore',
        'contrastScore'    => 'ContrastScore',
        'contrast'         => 'Contrast',
        'exposureScore'    => 'ExposureScore',
        'clarityScore'     => 'ClarityScore',
        'clarity'          => 'Clarity',
        'exposure'         => 'Exposure',
        'compositionScore' => 'CompositionScore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->overallScore) {
            $res['OverallScore'] = $this->overallScore;
        }
        if (null !== $this->color) {
            $res['Color'] = $this->color;
        }
        if (null !== $this->colorScore) {
            $res['ColorScore'] = $this->colorScore;
        }
        if (null !== $this->contrastScore) {
            $res['ContrastScore'] = $this->contrastScore;
        }
        if (null !== $this->contrast) {
            $res['Contrast'] = $this->contrast;
        }
        if (null !== $this->exposureScore) {
            $res['ExposureScore'] = $this->exposureScore;
        }
        if (null !== $this->clarityScore) {
            $res['ClarityScore'] = $this->clarityScore;
        }
        if (null !== $this->clarity) {
            $res['Clarity'] = $this->clarity;
        }
        if (null !== $this->exposure) {
            $res['Exposure'] = $this->exposure;
        }
        if (null !== $this->compositionScore) {
            $res['CompositionScore'] = $this->compositionScore;
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
        if (isset($map['OverallScore'])) {
            $model->overallScore = $map['OverallScore'];
        }
        if (isset($map['Color'])) {
            $model->color = $map['Color'];
        }
        if (isset($map['ColorScore'])) {
            $model->colorScore = $map['ColorScore'];
        }
        if (isset($map['ContrastScore'])) {
            $model->contrastScore = $map['ContrastScore'];
        }
        if (isset($map['Contrast'])) {
            $model->contrast = $map['Contrast'];
        }
        if (isset($map['ExposureScore'])) {
            $model->exposureScore = $map['ExposureScore'];
        }
        if (isset($map['ClarityScore'])) {
            $model->clarityScore = $map['ClarityScore'];
        }
        if (isset($map['Clarity'])) {
            $model->clarity = $map['Clarity'];
        }
        if (isset($map['Exposure'])) {
            $model->exposure = $map['Exposure'];
        }
        if (isset($map['CompositionScore'])) {
            $model->compositionScore = $map['CompositionScore'];
        }

        return $model;
    }
}
