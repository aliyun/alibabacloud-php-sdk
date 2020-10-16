<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\GetProfileListResponse\data;

use AlibabaCloud\Tea\Model;

class records extends Model
{
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
    public $searchMatchingRate;

    /**
     * @var string
     */
    public $personId;

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
        'sceneType'          => 'SceneType',
        'bizId'              => 'BizId',
        'faceUrl'            => 'FaceUrl',
        'gender'             => 'Gender',
        'idNumber'           => 'IdNumber',
        'isvSubId'           => 'IsvSubId',
        'searchMatchingRate' => 'SearchMatchingRate',
        'personId'           => 'PersonId',
        'catalogId'          => 'CatalogId',
        'profileId'          => 'ProfileId',
        'name'               => 'Name',
    ];

    public function validate()
    {
        Model::validateRequired('sceneType', $this->sceneType, true);
        Model::validateRequired('bizId', $this->bizId, true);
        Model::validateRequired('faceUrl', $this->faceUrl, true);
        Model::validateRequired('gender', $this->gender, true);
        Model::validateRequired('idNumber', $this->idNumber, true);
        Model::validateRequired('isvSubId', $this->isvSubId, true);
        Model::validateRequired('searchMatchingRate', $this->searchMatchingRate, true);
        Model::validateRequired('personId', $this->personId, true);
        Model::validateRequired('catalogId', $this->catalogId, true);
        Model::validateRequired('profileId', $this->profileId, true);
        Model::validateRequired('name', $this->name, true);
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->searchMatchingRate) {
            $res['SearchMatchingRate'] = $this->searchMatchingRate;
        }
        if (null !== $this->personId) {
            $res['PersonId'] = $this->personId;
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
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['SearchMatchingRate'])) {
            $model->searchMatchingRate = $map['SearchMatchingRate'];
        }
        if (isset($map['PersonId'])) {
            $model->personId = $map['PersonId'];
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
