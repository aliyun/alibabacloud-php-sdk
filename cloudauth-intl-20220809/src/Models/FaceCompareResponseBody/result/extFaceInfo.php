<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\FaceCompareResponseBody\result;

use AlibabaCloud\Dara\Model;

class extFaceInfo extends Model
{
    /**
     * @var float
     */
    public $faceQualityScore;

    /**
     * @var float
     */
    public $illuminationScore;

    /**
     * @var float
     */
    public $kaOcclusionScore;

    /**
     * @var float
     */
    public $occlusionScore;

    /**
     * @var float
     */
    public $sharpnessScore;

    /**
     * @var float
     */
    public $targetFaceQualityScore;

    /**
     * @var float
     */
    public $targetIlluminationScore;

    /**
     * @var float
     */
    public $targetKaOcclusionScore;

    /**
     * @var float
     */
    public $targetOcclusionScore;

    /**
     * @var float
     */
    public $targetSharpnessScore;
    protected $_name = [
        'faceQualityScore' => 'FaceQualityScore',
        'illuminationScore' => 'IlluminationScore',
        'kaOcclusionScore' => 'KaOcclusionScore',
        'occlusionScore' => 'OcclusionScore',
        'sharpnessScore' => 'SharpnessScore',
        'targetFaceQualityScore' => 'TargetFaceQualityScore',
        'targetIlluminationScore' => 'TargetIlluminationScore',
        'targetKaOcclusionScore' => 'TargetKaOcclusionScore',
        'targetOcclusionScore' => 'TargetOcclusionScore',
        'targetSharpnessScore' => 'TargetSharpnessScore',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->faceQualityScore) {
            $res['FaceQualityScore'] = $this->faceQualityScore;
        }

        if (null !== $this->illuminationScore) {
            $res['IlluminationScore'] = $this->illuminationScore;
        }

        if (null !== $this->kaOcclusionScore) {
            $res['KaOcclusionScore'] = $this->kaOcclusionScore;
        }

        if (null !== $this->occlusionScore) {
            $res['OcclusionScore'] = $this->occlusionScore;
        }

        if (null !== $this->sharpnessScore) {
            $res['SharpnessScore'] = $this->sharpnessScore;
        }

        if (null !== $this->targetFaceQualityScore) {
            $res['TargetFaceQualityScore'] = $this->targetFaceQualityScore;
        }

        if (null !== $this->targetIlluminationScore) {
            $res['TargetIlluminationScore'] = $this->targetIlluminationScore;
        }

        if (null !== $this->targetKaOcclusionScore) {
            $res['TargetKaOcclusionScore'] = $this->targetKaOcclusionScore;
        }

        if (null !== $this->targetOcclusionScore) {
            $res['TargetOcclusionScore'] = $this->targetOcclusionScore;
        }

        if (null !== $this->targetSharpnessScore) {
            $res['TargetSharpnessScore'] = $this->targetSharpnessScore;
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
        if (isset($map['FaceQualityScore'])) {
            $model->faceQualityScore = $map['FaceQualityScore'];
        }

        if (isset($map['IlluminationScore'])) {
            $model->illuminationScore = $map['IlluminationScore'];
        }

        if (isset($map['KaOcclusionScore'])) {
            $model->kaOcclusionScore = $map['KaOcclusionScore'];
        }

        if (isset($map['OcclusionScore'])) {
            $model->occlusionScore = $map['OcclusionScore'];
        }

        if (isset($map['SharpnessScore'])) {
            $model->sharpnessScore = $map['SharpnessScore'];
        }

        if (isset($map['TargetFaceQualityScore'])) {
            $model->targetFaceQualityScore = $map['TargetFaceQualityScore'];
        }

        if (isset($map['TargetIlluminationScore'])) {
            $model->targetIlluminationScore = $map['TargetIlluminationScore'];
        }

        if (isset($map['TargetKaOcclusionScore'])) {
            $model->targetKaOcclusionScore = $map['TargetKaOcclusionScore'];
        }

        if (isset($map['TargetOcclusionScore'])) {
            $model->targetOcclusionScore = $map['TargetOcclusionScore'];
        }

        if (isset($map['TargetSharpnessScore'])) {
            $model->targetSharpnessScore = $map['TargetSharpnessScore'];
        }

        return $model;
    }
}
