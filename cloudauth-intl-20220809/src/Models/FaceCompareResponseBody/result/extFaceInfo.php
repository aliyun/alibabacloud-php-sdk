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
    protected $_name = [
        'faceQualityScore' => 'FaceQualityScore',
        'illuminationScore' => 'IlluminationScore',
        'kaOcclusionScore' => 'KaOcclusionScore',
        'occlusionScore' => 'OcclusionScore',
        'sharpnessScore' => 'SharpnessScore',
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

        return $model;
    }
}
