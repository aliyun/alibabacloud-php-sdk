<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class Figure extends Model
{
    /**
     * @var int
     */
    public $age;

    /**
     * @var float
     */
    public $ageSD;

    /**
     * @var float
     */
    public $attractive;

    /**
     * @var string
     */
    public $beard;

    /**
     * @var float
     */
    public $beardConfidence;

    /**
     * @var Boundary
     */
    public $boundary;

    /**
     * @var string
     */
    public $emotion;

    /**
     * @var float
     */
    public $emotionConfidence;

    /**
     * @var float
     */
    public $faceQuality;

    /**
     * @var float
     */
    public $figureClusterConfidence;

    /**
     * @var string
     */
    public $figureClusterId;

    /**
     * @var float
     */
    public $figureConfidence;

    /**
     * @var string
     */
    public $figureId;

    /**
     * @var string
     */
    public $figureType;

    /**
     * @var string
     */
    public $gender;

    /**
     * @var float
     */
    public $genderConfidence;

    /**
     * @var string
     */
    public $glasses;

    /**
     * @var float
     */
    public $glassesConfidence;

    /**
     * @var string
     */
    public $hat;

    /**
     * @var float
     */
    public $hatConfidence;

    /**
     * @var HeadPose
     */
    public $headPose;

    /**
     * @var string
     */
    public $mask;

    /**
     * @var float
     */
    public $maskConfidence;

    /**
     * @var string
     */
    public $mouth;

    /**
     * @var float
     */
    public $mouthConfidence;

    /**
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
