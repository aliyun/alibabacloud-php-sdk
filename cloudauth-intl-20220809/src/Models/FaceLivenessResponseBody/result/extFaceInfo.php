<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\FaceLivenessResponseBody\result;

use AlibabaCloud\Dara\Model;

class extFaceInfo extends Model
{
    /**
     * @var int
     */
    public $faceAge;

    /**
     * @var string
     */
    public $faceAttack;

    /**
     * @var string
     */
    public $faceGender;

    /**
     * @var float
     */
    public $faceQualityScore;

    /**
     * @var string
     */
    public $occlusionResult;
    protected $_name = [
        'faceAge' => 'FaceAge',
        'faceAttack' => 'FaceAttack',
        'faceGender' => 'FaceGender',
        'faceQualityScore' => 'FaceQualityScore',
        'occlusionResult' => 'OcclusionResult',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->faceAge) {
            $res['FaceAge'] = $this->faceAge;
        }

        if (null !== $this->faceAttack) {
            $res['FaceAttack'] = $this->faceAttack;
        }

        if (null !== $this->faceGender) {
            $res['FaceGender'] = $this->faceGender;
        }

        if (null !== $this->faceQualityScore) {
            $res['FaceQualityScore'] = $this->faceQualityScore;
        }

        if (null !== $this->occlusionResult) {
            $res['OcclusionResult'] = $this->occlusionResult;
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
        if (isset($map['FaceAge'])) {
            $model->faceAge = $map['FaceAge'];
        }

        if (isset($map['FaceAttack'])) {
            $model->faceAttack = $map['FaceAttack'];
        }

        if (isset($map['FaceGender'])) {
            $model->faceGender = $map['FaceGender'];
        }

        if (isset($map['FaceQualityScore'])) {
            $model->faceQualityScore = $map['FaceQualityScore'];
        }

        if (isset($map['OcclusionResult'])) {
            $model->occlusionResult = $map['OcclusionResult'];
        }

        return $model;
    }
}
