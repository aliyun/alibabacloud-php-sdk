<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models\ListPersonDetailsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $gender;

    /**
     * @var string
     */
    public $bodyTargetImage;

    /**
     * @var string
     */
    public $preferredColor;

    /**
     * @var string
     */
    public $hotSpotAddress;

    /**
     * @var string
     */
    public $age;

    /**
     * @var string
     */
    public $personType;

    /**
     * @var string
     */
    public $transportation;

    /**
     * @var string
     */
    public $profession;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $faceSourceImage;

    /**
     * @var string
     */
    public $faceTargetImage;

    /**
     * @var string
     */
    public $prefOutTime;

    /**
     * @var string
     */
    public $bodySourceImage;

    /**
     * @var string
     */
    public $personId;
    protected $_name = [
        'updateTime'      => 'UpdateTime',
        'gender'          => 'Gender',
        'bodyTargetImage' => 'BodyTargetImage',
        'preferredColor'  => 'PreferredColor',
        'hotSpotAddress'  => 'HotSpotAddress',
        'age'             => 'Age',
        'personType'      => 'PersonType',
        'transportation'  => 'Transportation',
        'profession'      => 'Profession',
        'address'         => 'Address',
        'faceSourceImage' => 'FaceSourceImage',
        'faceTargetImage' => 'FaceTargetImage',
        'prefOutTime'     => 'PrefOutTime',
        'bodySourceImage' => 'BodySourceImage',
        'personId'        => 'PersonId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }
        if (null !== $this->bodyTargetImage) {
            $res['BodyTargetImage'] = $this->bodyTargetImage;
        }
        if (null !== $this->preferredColor) {
            $res['PreferredColor'] = $this->preferredColor;
        }
        if (null !== $this->hotSpotAddress) {
            $res['HotSpotAddress'] = $this->hotSpotAddress;
        }
        if (null !== $this->age) {
            $res['Age'] = $this->age;
        }
        if (null !== $this->personType) {
            $res['PersonType'] = $this->personType;
        }
        if (null !== $this->transportation) {
            $res['Transportation'] = $this->transportation;
        }
        if (null !== $this->profession) {
            $res['Profession'] = $this->profession;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->faceSourceImage) {
            $res['FaceSourceImage'] = $this->faceSourceImage;
        }
        if (null !== $this->faceTargetImage) {
            $res['FaceTargetImage'] = $this->faceTargetImage;
        }
        if (null !== $this->prefOutTime) {
            $res['PrefOutTime'] = $this->prefOutTime;
        }
        if (null !== $this->bodySourceImage) {
            $res['BodySourceImage'] = $this->bodySourceImage;
        }
        if (null !== $this->personId) {
            $res['PersonId'] = $this->personId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }
        if (isset($map['BodyTargetImage'])) {
            $model->bodyTargetImage = $map['BodyTargetImage'];
        }
        if (isset($map['PreferredColor'])) {
            $model->preferredColor = $map['PreferredColor'];
        }
        if (isset($map['HotSpotAddress'])) {
            $model->hotSpotAddress = $map['HotSpotAddress'];
        }
        if (isset($map['Age'])) {
            $model->age = $map['Age'];
        }
        if (isset($map['PersonType'])) {
            $model->personType = $map['PersonType'];
        }
        if (isset($map['Transportation'])) {
            $model->transportation = $map['Transportation'];
        }
        if (isset($map['Profession'])) {
            $model->profession = $map['Profession'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['FaceSourceImage'])) {
            $model->faceSourceImage = $map['FaceSourceImage'];
        }
        if (isset($map['FaceTargetImage'])) {
            $model->faceTargetImage = $map['FaceTargetImage'];
        }
        if (isset($map['PrefOutTime'])) {
            $model->prefOutTime = $map['PrefOutTime'];
        }
        if (isset($map['BodySourceImage'])) {
            $model->bodySourceImage = $map['BodySourceImage'];
        }
        if (isset($map['PersonId'])) {
            $model->personId = $map['PersonId'];
        }

        return $model;
    }
}
