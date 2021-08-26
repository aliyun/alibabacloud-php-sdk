<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class Face extends Model
{
    /**
     * @description FaceId
     *
     * @var string
     */
    public $faceId;

    /**
     * @description FaceConfidence
     *
     * @var float
     */
    public $faceConfidence;

    /**
     * @description Age
     *
     * @var int
     */
    public $age;

    /**
     * @description AgeConfidence
     *
     * @var float
     */
    public $ageConfidence;

    /**
     * @description Gender
     *
     * @var string
     */
    public $gender;

    /**
     * @description GenderConfidence
     *
     * @var float
     */
    public $genderConfidence;

    /**
     * @description Emotion
     *
     * @var string
     */
    public $emotion;

    /**
     * @description EmotionConfidence
     *
     * @var float
     */
    public $emotionConfidence;

    /**
     * @description FaceClusterId
     *
     * @var string
     */
    public $faceClusterId;

    /**
     * @description Mouth
     *
     * @var string
     */
    public $mouth;

    /**
     * @description MouthConfidence
     *
     * @var float
     */
    public $mouthConfidence;

    /**
     * @description Beard
     *
     * @var string
     */
    public $beard;

    /**
     * @description BeardConfidence
     *
     * @var float
     */
    public $beardConfidence;

    /**
     * @description Hat
     *
     * @var string
     */
    public $hat;

    /**
     * @description HatConfidence
     *
     * @var float
     */
    public $hatConfidence;

    /**
     * @description Race
     *
     * @var string
     */
    public $race;

    /**
     * @description RaceConfidence
     *
     * @var float
     */
    public $raceConfidence;

    /**
     * @description Mask
     *
     * @var string
     */
    public $mask;

    /**
     * @description MaskConfidence
     *
     * @var float
     */
    public $maskConfidence;

    /**
     * @description Glasses
     *
     * @var string
     */
    public $glasses;

    /**
     * @description GlassesConfidence
     *
     * @var float
     */
    public $glassesConfidence;

    /**
     * @description LeftEye
     *
     * @var string
     */
    public $leftEye;

    /**
     * @description LeftEyeConfidence
     *
     * @var float
     */
    public $leftEyeConfidence;

    /**
     * @description RightEye
     *
     * @var string
     */
    public $rightEye;

    /**
     * @description RightEyeConfidence
     *
     * @var float
     */
    public $rightEyeConfidence;

    /**
     * @var HeadPose
     */
    public $headPose;

    /**
     * @var Boundary
     */
    public $boundary;

    /**
     * @description EmbeddingsFloat32
     *
     * @var float[]
     */
    public $embeddingsFloat32;

    /**
     * @description EmbeddingsInt8
     *
     * @var int[]
     */
    public $embeddingsInt8;
    protected $_name = [
        'faceId'             => 'FaceId',
        'faceConfidence'     => 'FaceConfidence',
        'age'                => 'Age',
        'ageConfidence'      => 'AgeConfidence',
        'gender'             => 'Gender',
        'genderConfidence'   => 'GenderConfidence',
        'emotion'            => 'Emotion',
        'emotionConfidence'  => 'EmotionConfidence',
        'faceClusterId'      => 'FaceClusterId',
        'mouth'              => 'Mouth',
        'mouthConfidence'    => 'MouthConfidence',
        'beard'              => 'Beard',
        'beardConfidence'    => 'BeardConfidence',
        'hat'                => 'Hat',
        'hatConfidence'      => 'HatConfidence',
        'race'               => 'Race',
        'raceConfidence'     => 'RaceConfidence',
        'mask'               => 'Mask',
        'maskConfidence'     => 'MaskConfidence',
        'glasses'            => 'Glasses',
        'glassesConfidence'  => 'GlassesConfidence',
        'leftEye'            => 'LeftEye',
        'leftEyeConfidence'  => 'LeftEyeConfidence',
        'rightEye'           => 'RightEye',
        'rightEyeConfidence' => 'RightEyeConfidence',
        'headPose'           => 'HeadPose',
        'boundary'           => 'Boundary',
        'embeddingsFloat32'  => 'EmbeddingsFloat32',
        'embeddingsInt8'     => 'EmbeddingsInt8',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceId) {
            $res['FaceId'] = $this->faceId;
        }
        if (null !== $this->faceConfidence) {
            $res['FaceConfidence'] = $this->faceConfidence;
        }
        if (null !== $this->age) {
            $res['Age'] = $this->age;
        }
        if (null !== $this->ageConfidence) {
            $res['AgeConfidence'] = $this->ageConfidence;
        }
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }
        if (null !== $this->genderConfidence) {
            $res['GenderConfidence'] = $this->genderConfidence;
        }
        if (null !== $this->emotion) {
            $res['Emotion'] = $this->emotion;
        }
        if (null !== $this->emotionConfidence) {
            $res['EmotionConfidence'] = $this->emotionConfidence;
        }
        if (null !== $this->faceClusterId) {
            $res['FaceClusterId'] = $this->faceClusterId;
        }
        if (null !== $this->mouth) {
            $res['Mouth'] = $this->mouth;
        }
        if (null !== $this->mouthConfidence) {
            $res['MouthConfidence'] = $this->mouthConfidence;
        }
        if (null !== $this->beard) {
            $res['Beard'] = $this->beard;
        }
        if (null !== $this->beardConfidence) {
            $res['BeardConfidence'] = $this->beardConfidence;
        }
        if (null !== $this->hat) {
            $res['Hat'] = $this->hat;
        }
        if (null !== $this->hatConfidence) {
            $res['HatConfidence'] = $this->hatConfidence;
        }
        if (null !== $this->race) {
            $res['Race'] = $this->race;
        }
        if (null !== $this->raceConfidence) {
            $res['RaceConfidence'] = $this->raceConfidence;
        }
        if (null !== $this->mask) {
            $res['Mask'] = $this->mask;
        }
        if (null !== $this->maskConfidence) {
            $res['MaskConfidence'] = $this->maskConfidence;
        }
        if (null !== $this->glasses) {
            $res['Glasses'] = $this->glasses;
        }
        if (null !== $this->glassesConfidence) {
            $res['GlassesConfidence'] = $this->glassesConfidence;
        }
        if (null !== $this->leftEye) {
            $res['LeftEye'] = $this->leftEye;
        }
        if (null !== $this->leftEyeConfidence) {
            $res['LeftEyeConfidence'] = $this->leftEyeConfidence;
        }
        if (null !== $this->rightEye) {
            $res['RightEye'] = $this->rightEye;
        }
        if (null !== $this->rightEyeConfidence) {
            $res['RightEyeConfidence'] = $this->rightEyeConfidence;
        }
        if (null !== $this->headPose) {
            $res['HeadPose'] = null !== $this->headPose ? $this->headPose->toMap() : null;
        }
        if (null !== $this->boundary) {
            $res['Boundary'] = null !== $this->boundary ? $this->boundary->toMap() : null;
        }
        if (null !== $this->embeddingsFloat32) {
            $res['EmbeddingsFloat32'] = $this->embeddingsFloat32;
        }
        if (null !== $this->embeddingsInt8) {
            $res['EmbeddingsInt8'] = $this->embeddingsInt8;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Face
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceId'])) {
            $model->faceId = $map['FaceId'];
        }
        if (isset($map['FaceConfidence'])) {
            $model->faceConfidence = $map['FaceConfidence'];
        }
        if (isset($map['Age'])) {
            $model->age = $map['Age'];
        }
        if (isset($map['AgeConfidence'])) {
            $model->ageConfidence = $map['AgeConfidence'];
        }
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }
        if (isset($map['GenderConfidence'])) {
            $model->genderConfidence = $map['GenderConfidence'];
        }
        if (isset($map['Emotion'])) {
            $model->emotion = $map['Emotion'];
        }
        if (isset($map['EmotionConfidence'])) {
            $model->emotionConfidence = $map['EmotionConfidence'];
        }
        if (isset($map['FaceClusterId'])) {
            $model->faceClusterId = $map['FaceClusterId'];
        }
        if (isset($map['Mouth'])) {
            $model->mouth = $map['Mouth'];
        }
        if (isset($map['MouthConfidence'])) {
            $model->mouthConfidence = $map['MouthConfidence'];
        }
        if (isset($map['Beard'])) {
            $model->beard = $map['Beard'];
        }
        if (isset($map['BeardConfidence'])) {
            $model->beardConfidence = $map['BeardConfidence'];
        }
        if (isset($map['Hat'])) {
            $model->hat = $map['Hat'];
        }
        if (isset($map['HatConfidence'])) {
            $model->hatConfidence = $map['HatConfidence'];
        }
        if (isset($map['Race'])) {
            $model->race = $map['Race'];
        }
        if (isset($map['RaceConfidence'])) {
            $model->raceConfidence = $map['RaceConfidence'];
        }
        if (isset($map['Mask'])) {
            $model->mask = $map['Mask'];
        }
        if (isset($map['MaskConfidence'])) {
            $model->maskConfidence = $map['MaskConfidence'];
        }
        if (isset($map['Glasses'])) {
            $model->glasses = $map['Glasses'];
        }
        if (isset($map['GlassesConfidence'])) {
            $model->glassesConfidence = $map['GlassesConfidence'];
        }
        if (isset($map['LeftEye'])) {
            $model->leftEye = $map['LeftEye'];
        }
        if (isset($map['LeftEyeConfidence'])) {
            $model->leftEyeConfidence = $map['LeftEyeConfidence'];
        }
        if (isset($map['RightEye'])) {
            $model->rightEye = $map['RightEye'];
        }
        if (isset($map['RightEyeConfidence'])) {
            $model->rightEyeConfidence = $map['RightEyeConfidence'];
        }
        if (isset($map['HeadPose'])) {
            $model->headPose = HeadPose::fromMap($map['HeadPose']);
        }
        if (isset($map['Boundary'])) {
            $model->boundary = Boundary::fromMap($map['Boundary']);
        }
        if (isset($map['EmbeddingsFloat32'])) {
            if (!empty($map['EmbeddingsFloat32'])) {
                $model->embeddingsFloat32 = $map['EmbeddingsFloat32'];
            }
        }
        if (isset($map['EmbeddingsInt8'])) {
            if (!empty($map['EmbeddingsInt8'])) {
                $model->embeddingsInt8 = $map['EmbeddingsInt8'];
            }
        }

        return $model;
    }
}
