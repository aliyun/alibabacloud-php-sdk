<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class UpdateProfileRequest extends Model
{
    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $isvSubId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $catalogId;

    /**
     * @var string
     */
    public $idNumber;

    /**
     * @var string
     */
    public $faceUrl;

    /**
     * @var string
     */
    public $liveAddress;

    /**
     * @var int
     */
    public $gender;

    /**
     * @var string
     */
    public $plateNo;

    /**
     * @var string
     */
    public $phoneNo;

    /**
     * @var string
     */
    public $sceneType;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var int
     */
    public $profileId;
    protected $_name = [
        'corpId'      => 'CorpId',
        'isvSubId'    => 'IsvSubId',
        'name'        => 'Name',
        'catalogId'   => 'CatalogId',
        'idNumber'    => 'IdNumber',
        'faceUrl'     => 'FaceUrl',
        'liveAddress' => 'LiveAddress',
        'gender'      => 'Gender',
        'plateNo'     => 'PlateNo',
        'phoneNo'     => 'PhoneNo',
        'sceneType'   => 'SceneType',
        'bizId'       => 'BizId',
        'profileId'   => 'ProfileId',
    ];

    public function validate()
    {
        Model::validateRequired('isvSubId', $this->isvSubId, true);
        Model::validateRequired('catalogId', $this->catalogId, true);
        Model::validateRequired('profileId', $this->profileId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->isvSubId) {
            $res['IsvSubId'] = $this->isvSubId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->catalogId) {
            $res['CatalogId'] = $this->catalogId;
        }
        if (null !== $this->idNumber) {
            $res['IdNumber'] = $this->idNumber;
        }
        if (null !== $this->faceUrl) {
            $res['FaceUrl'] = $this->faceUrl;
        }
        if (null !== $this->liveAddress) {
            $res['LiveAddress'] = $this->liveAddress;
        }
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }
        if (null !== $this->plateNo) {
            $res['PlateNo'] = $this->plateNo;
        }
        if (null !== $this->phoneNo) {
            $res['PhoneNo'] = $this->phoneNo;
        }
        if (null !== $this->sceneType) {
            $res['SceneType'] = $this->sceneType;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->profileId) {
            $res['ProfileId'] = $this->profileId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateProfileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['IsvSubId'])) {
            $model->isvSubId = $map['IsvSubId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['CatalogId'])) {
            $model->catalogId = $map['CatalogId'];
        }
        if (isset($map['IdNumber'])) {
            $model->idNumber = $map['IdNumber'];
        }
        if (isset($map['FaceUrl'])) {
            $model->faceUrl = $map['FaceUrl'];
        }
        if (isset($map['LiveAddress'])) {
            $model->liveAddress = $map['LiveAddress'];
        }
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }
        if (isset($map['PlateNo'])) {
            $model->plateNo = $map['PlateNo'];
        }
        if (isset($map['PhoneNo'])) {
            $model->phoneNo = $map['PhoneNo'];
        }
        if (isset($map['SceneType'])) {
            $model->sceneType = $map['SceneType'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['ProfileId'])) {
            $model->profileId = $map['ProfileId'];
        }

        return $model;
    }
}
