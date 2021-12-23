<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class Figure extends Model
{
    /**
     * @description Age
     *
     * @var int
     */
    public $age;

    /**
     * @description AgeSD
     *
     * @var float
     */
    public $ageSD;

    /**
     * @description Attractive
     *
     * @var float
     */
    public $attractive;

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
     * @description Boundary
     *
     * @var Boundary
     */
    public $boundary;

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
     * @description FaceQuality
     *
     * @var float
     */
    public $faceQuality;

    /**
     * @description FigureClusterConfidence
     *
     * @var float
     */
    public $figureClusterConfidence;

    /**
     * @description FigureClusterId
     *
     * @var string
     */
    public $figureClusterId;

    /**
     * @description FigureConfidence
     *
     * @var float
     */
    public $figureConfidence;

    /**
     * @description FigureId
     *
     * @var string
     */
    public $figureId;

    /**
     * @description FigureType
     *
     * @var string
     */
    public $figureType;

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
     * @var HeadPose
     */
    public $headPose;

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
     * @description Sharpness
     *
     * @var float
     */
    public $sharpness;
    protected $_name = [
        'age'                     => 'Age',
        'ageSD'                   => 'AgeSD',
        'attractive'              => 'Attractive',
        'beard'                   => 'Beard',
        'beardConfidence'         => 'BeardConfidence',
        'boundary'                => 'Boundary',
        'emotion'                 => 'Emotion',
        'emotionConfidence'       => 'EmotionConfidence',
        'faceQuality'             => 'FaceQuality',
        'figureClusterConfidence' => 'FigureClusterConfidence',
        'figureClusterId'         => 'FigureClusterId',
        'figureConfidence'        => 'FigureConfidence',
        'figureId'                => 'FigureId',
        'figureType'              => 'FigureType',
        'gender'                  => 'Gender',
        'genderConfidence'        => 'GenderConfidence',
        'glasses'                 => 'Glasses',
        'glassesConfidence'       => 'GlassesConfidence',
        'hat'                     => 'Hat',
        'hatConfidence'           => 'HatConfidence',
        'headPose'                => 'HeadPose',
        'mask'                    => 'Mask',
        'maskConfidence'          => 'MaskConfidence',
        'mouth'                   => 'Mouth',
        'mouthConfidence'         => 'MouthConfidence',
        'sharpness'               => 'Sharpness',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->age) {
            $res['Age'] = $this->age;
        }
        if (null !== $this->ageSD) {
            $res['AgeSD'] = $this->ageSD;
        }
        if (null !== $this->attractive) {
            $res['Attractive'] = $this->attractive;
        }
        if (null !== $this->beard) {
            $res['Beard'] = $this->beard;
        }
        if (null !== $this->beardConfidence) {
            $res['BeardConfidence'] = $this->beardConfidence;
        }
        if (null !== $this->boundary) {
            $res['Boundary'] = null !== $this->boundary ? $this->boundary->toMap() : null;
        }
        if (null !== $this->emotion) {
            $res['Emotion'] = $this->emotion;
        }
        if (null !== $this->emotionConfidence) {
            $res['EmotionConfidence'] = $this->emotionConfidence;
        }
        if (null !== $this->faceQuality) {
            $res['FaceQuality'] = $this->faceQuality;
        }
        if (null !== $this->figureClusterConfidence) {
            $res['FigureClusterConfidence'] = $this->figureClusterConfidence;
        }
        if (null !== $this->figureClusterId) {
            $res['FigureClusterId'] = $this->figureClusterId;
        }
        if (null !== $this->figureConfidence) {
            $res['FigureConfidence'] = $this->figureConfidence;
        }
        if (null !== $this->figureId) {
            $res['FigureId'] = $this->figureId;
        }
        if (null !== $this->figureType) {
            $res['FigureType'] = $this->figureType;
        }
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }
        if (null !== $this->genderConfidence) {
            $res['GenderConfidence'] = $this->genderConfidence;
        }
        if (null !== $this->glasses) {
            $res['Glasses'] = $this->glasses;
        }
        if (null !== $this->glassesConfidence) {
            $res['GlassesConfidence'] = $this->glassesConfidence;
        }
        if (null !== $this->hat) {
            $res['Hat'] = $this->hat;
        }
        if (null !== $this->hatConfidence) {
            $res['HatConfidence'] = $this->hatConfidence;
        }
        if (null !== $this->headPose) {
            $res['HeadPose'] = null !== $this->headPose ? $this->headPose->toMap() : null;
        }
        if (null !== $this->mask) {
            $res['Mask'] = $this->mask;
        }
        if (null !== $this->maskConfidence) {
            $res['MaskConfidence'] = $this->maskConfidence;
        }
        if (null !== $this->mouth) {
            $res['Mouth'] = $this->mouth;
        }
        if (null !== $this->mouthConfidence) {
            $res['MouthConfidence'] = $this->mouthConfidence;
        }
        if (null !== $this->sharpness) {
            $res['Sharpness'] = $this->sharpness;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Figure
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Age'])) {
            $model->age = $map['Age'];
        }
        if (isset($map['AgeSD'])) {
            $model->ageSD = $map['AgeSD'];
        }
        if (isset($map['Attractive'])) {
            $model->attractive = $map['Attractive'];
        }
        if (isset($map['Beard'])) {
            $model->beard = $map['Beard'];
        }
        if (isset($map['BeardConfidence'])) {
            $model->beardConfidence = $map['BeardConfidence'];
        }
        if (isset($map['Boundary'])) {
            $model->boundary = Boundary::fromMap($map['Boundary']);
        }
        if (isset($map['Emotion'])) {
            $model->emotion = $map['Emotion'];
        }
        if (isset($map['EmotionConfidence'])) {
            $model->emotionConfidence = $map['EmotionConfidence'];
        }
        if (isset($map['FaceQuality'])) {
            $model->faceQuality = $map['FaceQuality'];
        }
        if (isset($map['FigureClusterConfidence'])) {
            $model->figureClusterConfidence = $map['FigureClusterConfidence'];
        }
        if (isset($map['FigureClusterId'])) {
            $model->figureClusterId = $map['FigureClusterId'];
        }
        if (isset($map['FigureConfidence'])) {
            $model->figureConfidence = $map['FigureConfidence'];
        }
        if (isset($map['FigureId'])) {
            $model->figureId = $map['FigureId'];
        }
        if (isset($map['FigureType'])) {
            $model->figureType = $map['FigureType'];
        }
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }
        if (isset($map['GenderConfidence'])) {
            $model->genderConfidence = $map['GenderConfidence'];
        }
        if (isset($map['Glasses'])) {
            $model->glasses = $map['Glasses'];
        }
        if (isset($map['GlassesConfidence'])) {
            $model->glassesConfidence = $map['GlassesConfidence'];
        }
        if (isset($map['Hat'])) {
            $model->hat = $map['Hat'];
        }
        if (isset($map['HatConfidence'])) {
            $model->hatConfidence = $map['HatConfidence'];
        }
        if (isset($map['HeadPose'])) {
            $model->headPose = HeadPose::fromMap($map['HeadPose']);
        }
        if (isset($map['Mask'])) {
            $model->mask = $map['Mask'];
        }
        if (isset($map['MaskConfidence'])) {
            $model->maskConfidence = $map['MaskConfidence'];
        }
        if (isset($map['Mouth'])) {
            $model->mouth = $map['Mouth'];
        }
        if (isset($map['MouthConfidence'])) {
            $model->mouthConfidence = $map['MouthConfidence'];
        }
        if (isset($map['Sharpness'])) {
            $model->sharpness = $map['Sharpness'];
        }

        return $model;
    }
}
