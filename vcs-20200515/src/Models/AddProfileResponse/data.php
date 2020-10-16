<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\AddProfileResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $liveAddress;

    /**
     * @var string
     */
    public $sceneType;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $faceUrl;

    /**
     * @var string
     */
    public $gender;

    /**
     * @var string
     */
    public $idNumber;

    /**
     * @var string
     */
    public $isvSubId;

    /**
     * @var string
     */
    public $phoneNo;

    /**
     * @var string
     */
    public $plateNo;

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
    public $name;
    protected $_name = [
        'liveAddress' => 'LiveAddress',
        'sceneType'   => 'SceneType',
        'bizId'       => 'BizId',
        'faceUrl'     => 'FaceUrl',
        'gender'      => 'Gender',
        'idNumber'    => 'IdNumber',
        'isvSubId'    => 'IsvSubId',
        'phoneNo'     => 'PhoneNo',
        'plateNo'     => 'PlateNo',
        'catalogId'   => 'CatalogId',
        'profileId'   => 'ProfileId',
        'name'        => 'Name',
    ];

    public function validate()
    {
        Model::validateRequired('liveAddress', $this->liveAddress, true);
        Model::validateRequired('sceneType', $this->sceneType, true);
        Model::validateRequired('bizId', $this->bizId, true);
        Model::validateRequired('faceUrl', $this->faceUrl, true);
        Model::validateRequired('gender', $this->gender, true);
        Model::validateRequired('idNumber', $this->idNumber, true);
        Model::validateRequired('isvSubId', $this->isvSubId, true);
        Model::validateRequired('phoneNo', $this->phoneNo, true);
        Model::validateRequired('plateNo', $this->plateNo, true);
        Model::validateRequired('catalogId', $this->catalogId, true);
        Model::validateRequired('profileId', $this->profileId, true);
        Model::validateRequired('name', $this->name, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveAddress) {
            $res['LiveAddress'] = $this->liveAddress;
        }
        if (null !== $this->sceneType) {
            $res['SceneType'] = $this->sceneType;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->faceUrl) {
            $res['FaceUrl'] = $this->faceUrl;
        }
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }
        if (null !== $this->idNumber) {
            $res['IdNumber'] = $this->idNumber;
        }
        if (null !== $this->isvSubId) {
            $res['IsvSubId'] = $this->isvSubId;
        }
        if (null !== $this->phoneNo) {
            $res['PhoneNo'] = $this->phoneNo;
        }
        if (null !== $this->plateNo) {
            $res['PlateNo'] = $this->plateNo;
        }
        if (null !== $this->catalogId) {
            $res['CatalogId'] = $this->catalogId;
        }
        if (null !== $this->profileId) {
            $res['ProfileId'] = $this->profileId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['LiveAddress'])) {
            $model->liveAddress = $map['LiveAddress'];
        }
        if (isset($map['SceneType'])) {
            $model->sceneType = $map['SceneType'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['FaceUrl'])) {
            $model->faceUrl = $map['FaceUrl'];
        }
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }
        if (isset($map['IdNumber'])) {
            $model->idNumber = $map['IdNumber'];
        }
        if (isset($map['IsvSubId'])) {
            $model->isvSubId = $map['IsvSubId'];
        }
        if (isset($map['PhoneNo'])) {
            $model->phoneNo = $map['PhoneNo'];
        }
        if (isset($map['PlateNo'])) {
            $model->plateNo = $map['PlateNo'];
        }
        if (isset($map['CatalogId'])) {
            $model->catalogId = $map['CatalogId'];
        }
        if (isset($map['ProfileId'])) {
            $model->profileId = $map['ProfileId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
