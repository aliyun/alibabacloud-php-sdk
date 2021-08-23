<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models\ListVideoFramesResponseBody\frames;

use AlibabaCloud\SDK\Imm\V20170906\Models\ListVideoFramesResponseBody\frames\faces\emotionDetails;
use AlibabaCloud\SDK\Imm\V20170906\Models\ListVideoFramesResponseBody\frames\faces\faceAttributes;
use AlibabaCloud\Tea\Model;

class faces extends Model
{
    /**
     * @var float
     */
    public $emotionConfidence;

    /**
     * @var float
     */
    public $attractive;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $gender;

    /**
     * @var string
     */
    public $faceId;

    /**
     * @var float
     */
    public $genderConfidence;

    /**
     * @var float
     */
    public $faceQuality;

    /**
     * @var string
     */
    public $emotion;

    /**
     * @var int
     */
    public $age;

    /**
     * @var float
     */
    public $faceConfidence;

    /**
     * @var emotionDetails
     */
    public $emotionDetails;

    /**
     * @var faceAttributes
     */
    public $faceAttributes;
    protected $_name = [
        'emotionConfidence' => 'EmotionConfidence',
        'attractive'        => 'Attractive',
        'groupId'           => 'GroupId',
        'gender'            => 'Gender',
        'faceId'            => 'FaceId',
        'genderConfidence'  => 'GenderConfidence',
        'faceQuality'       => 'FaceQuality',
        'emotion'           => 'Emotion',
        'age'               => 'Age',
        'faceConfidence'    => 'FaceConfidence',
        'emotionDetails'    => 'EmotionDetails',
        'faceAttributes'    => 'FaceAttributes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->emotionConfidence) {
            $res['EmotionConfidence'] = $this->emotionConfidence;
        }
        if (null !== $this->attractive) {
            $res['Attractive'] = $this->attractive;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }
        if (null !== $this->faceId) {
            $res['FaceId'] = $this->faceId;
        }
        if (null !== $this->genderConfidence) {
            $res['GenderConfidence'] = $this->genderConfidence;
        }
        if (null !== $this->faceQuality) {
            $res['FaceQuality'] = $this->faceQuality;
        }
        if (null !== $this->emotion) {
            $res['Emotion'] = $this->emotion;
        }
        if (null !== $this->age) {
            $res['Age'] = $this->age;
        }
        if (null !== $this->faceConfidence) {
            $res['FaceConfidence'] = $this->faceConfidence;
        }
        if (null !== $this->emotionDetails) {
            $res['EmotionDetails'] = null !== $this->emotionDetails ? $this->emotionDetails->toMap() : null;
        }
        if (null !== $this->faceAttributes) {
            $res['FaceAttributes'] = null !== $this->faceAttributes ? $this->faceAttributes->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return faces
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EmotionConfidence'])) {
            $model->emotionConfidence = $map['EmotionConfidence'];
        }
        if (isset($map['Attractive'])) {
            $model->attractive = $map['Attractive'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }
        if (isset($map['FaceId'])) {
            $model->faceId = $map['FaceId'];
        }
        if (isset($map['GenderConfidence'])) {
            $model->genderConfidence = $map['GenderConfidence'];
        }
        if (isset($map['FaceQuality'])) {
            $model->faceQuality = $map['FaceQuality'];
        }
        if (isset($map['Emotion'])) {
            $model->emotion = $map['Emotion'];
        }
        if (isset($map['Age'])) {
            $model->age = $map['Age'];
        }
        if (isset($map['FaceConfidence'])) {
            $model->faceConfidence = $map['FaceConfidence'];
        }
        if (isset($map['EmotionDetails'])) {
            $model->emotionDetails = emotionDetails::fromMap($map['EmotionDetails']);
        }
        if (isset($map['FaceAttributes'])) {
            $model->faceAttributes = faceAttributes::fromMap($map['FaceAttributes']);
        }

        return $model;
    }
}
