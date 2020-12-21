<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\GetProfileListResponseBody\data;

use AlibabaCloud\Tea\Model;

class records extends Model
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
    public $idNumber;

    /**
     * @var string
     */
    public $sceneType;

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
    public $faceUrl;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $searchMatchingRate;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $personId;
    protected $_name = [
        'catalogId'          => 'CatalogId',
        'profileId'          => 'ProfileId',
        'idNumber'           => 'IdNumber',
        'sceneType'          => 'SceneType',
        'isvSubId'           => 'IsvSubId',
        'gender'             => 'Gender',
        'faceUrl'            => 'FaceUrl',
        'bizId'              => 'BizId',
        'searchMatchingRate' => 'SearchMatchingRate',
        'name'               => 'Name',
        'personId'           => 'PersonId',
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
        if (null !== $this->idNumber) {
            $res['IdNumber'] = $this->idNumber;
        }
        if (null !== $this->sceneType) {
            $res['SceneType'] = $this->sceneType;
        }
        if (null !== $this->isvSubId) {
            $res['IsvSubId'] = $this->isvSubId;
        }
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }
        if (null !== $this->faceUrl) {
            $res['FaceUrl'] = $this->faceUrl;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->searchMatchingRate) {
            $res['SearchMatchingRate'] = $this->searchMatchingRate;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->personId) {
            $res['PersonId'] = $this->personId;
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
        if (isset($map['CatalogId'])) {
            $model->catalogId = $map['CatalogId'];
        }
        if (isset($map['ProfileId'])) {
            $model->profileId = $map['ProfileId'];
        }
        if (isset($map['IdNumber'])) {
            $model->idNumber = $map['IdNumber'];
        }
        if (isset($map['SceneType'])) {
            $model->sceneType = $map['SceneType'];
        }
        if (isset($map['IsvSubId'])) {
            $model->isvSubId = $map['IsvSubId'];
        }
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }
        if (isset($map['FaceUrl'])) {
            $model->faceUrl = $map['FaceUrl'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['SearchMatchingRate'])) {
            $model->searchMatchingRate = $map['SearchMatchingRate'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PersonId'])) {
            $model->personId = $map['PersonId'];
        }

        return $model;
    }
}
