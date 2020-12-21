<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\GetProfileDetailResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $catalogId;

    /**
     * @var int
     */
    public $profileId;

    /**
     * @var string
     */
    public $isvSubId;

    /**
     * @var string
     */
    public $gender;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $idNumber;

    /**
     * @var string
     */
    public $sceneType;

    /**
     * @var string
     */
    public $phoneNo;

    /**
     * @var string
     */
    public $faceUrl;

    /**
     * @var string
     */
    public $liveAddress;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $personId;

    /**
     * @var string
     */
    public $plateNo;
    protected $_name = [
        'catalogId'   => 'CatalogId',
        'profileId'   => 'ProfileId',
        'isvSubId'    => 'IsvSubId',
        'gender'      => 'Gender',
        'bizId'       => 'BizId',
        'idNumber'    => 'IdNumber',
        'sceneType'   => 'SceneType',
        'phoneNo'     => 'PhoneNo',
        'faceUrl'     => 'FaceUrl',
        'liveAddress' => 'LiveAddress',
        'name'        => 'Name',
        'personId'    => 'PersonId',
        'plateNo'     => 'PlateNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->catalogId) {
            $res['CatalogId'] = $this->catalogId;
        }
        if (null !== $this->profileId) {
            $res['ProfileId'] = $this->profileId;
        }
        if (null !== $this->isvSubId) {
            $res['IsvSubId'] = $this->isvSubId;
        }
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->idNumber) {
            $res['IdNumber'] = $this->idNumber;
        }
        if (null !== $this->sceneType) {
            $res['SceneType'] = $this->sceneType;
        }
        if (null !== $this->phoneNo) {
            $res['PhoneNo'] = $this->phoneNo;
        }
        if (null !== $this->faceUrl) {
            $res['FaceUrl'] = $this->faceUrl;
        }
        if (null !== $this->liveAddress) {
            $res['LiveAddress'] = $this->liveAddress;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->personId) {
            $res['PersonId'] = $this->personId;
        }
        if (null !== $this->plateNo) {
            $res['PlateNo'] = $this->plateNo;
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
        if (isset($map['CatalogId'])) {
            $model->catalogId = $map['CatalogId'];
        }
        if (isset($map['ProfileId'])) {
            $model->profileId = $map['ProfileId'];
        }
        if (isset($map['IsvSubId'])) {
            $model->isvSubId = $map['IsvSubId'];
        }
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['IdNumber'])) {
            $model->idNumber = $map['IdNumber'];
        }
        if (isset($map['SceneType'])) {
            $model->sceneType = $map['SceneType'];
        }
        if (isset($map['PhoneNo'])) {
            $model->phoneNo = $map['PhoneNo'];
        }
        if (isset($map['FaceUrl'])) {
            $model->faceUrl = $map['FaceUrl'];
        }
        if (isset($map['LiveAddress'])) {
            $model->liveAddress = $map['LiveAddress'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PersonId'])) {
            $model->personId = $map['PersonId'];
        }
        if (isset($map['PlateNo'])) {
            $model->plateNo = $map['PlateNo'];
        }

        return $model;
    }
}
