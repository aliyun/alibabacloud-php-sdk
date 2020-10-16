<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\ListUsersResponse\data;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @var int
     */
    public $userGroupId;

    /**
     * @var string
     */
    public $age;

    /**
     * @var string
     */
    public $attachment;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $faceImageUrl;

    /**
     * @var string
     */
    public $gender;

    /**
     * @var string
     */
    public $idNumber;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $isvSubId;

    /**
     * @var string
     */
    public $matchingRate;

    /**
     * @var string
     */
    public $personId;
    protected $_name = [
        'userGroupId'  => 'UserGroupId',
        'age'          => 'Age',
        'attachment'   => 'Attachment',
        'bizId'        => 'BizId',
        'faceImageUrl' => 'FaceImageUrl',
        'gender'       => 'Gender',
        'idNumber'     => 'IdNumber',
        'userId'       => 'UserId',
        'userName'     => 'UserName',
        'isvSubId'     => 'IsvSubId',
        'matchingRate' => 'MatchingRate',
        'personId'     => 'PersonId',
    ];

    public function validate()
    {
        Model::validateRequired('userGroupId', $this->userGroupId, true);
        Model::validateRequired('age', $this->age, true);
        Model::validateRequired('attachment', $this->attachment, true);
        Model::validateRequired('bizId', $this->bizId, true);
        Model::validateRequired('faceImageUrl', $this->faceImageUrl, true);
        Model::validateRequired('gender', $this->gender, true);
        Model::validateRequired('idNumber', $this->idNumber, true);
        Model::validateRequired('userId', $this->userId, true);
        Model::validateRequired('userName', $this->userName, true);
        Model::validateRequired('isvSubId', $this->isvSubId, true);
        Model::validateRequired('matchingRate', $this->matchingRate, true);
        Model::validateRequired('personId', $this->personId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userGroupId) {
            $res['UserGroupId'] = $this->userGroupId;
        }
        if (null !== $this->age) {
            $res['Age'] = $this->age;
        }
        if (null !== $this->attachment) {
            $res['Attachment'] = $this->attachment;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->faceImageUrl) {
            $res['FaceImageUrl'] = $this->faceImageUrl;
        }
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }
        if (null !== $this->idNumber) {
            $res['IdNumber'] = $this->idNumber;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->isvSubId) {
            $res['IsvSubId'] = $this->isvSubId;
        }
        if (null !== $this->matchingRate) {
            $res['MatchingRate'] = $this->matchingRate;
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
        if (isset($map['UserGroupId'])) {
            $model->userGroupId = $map['UserGroupId'];
        }
        if (isset($map['Age'])) {
            $model->age = $map['Age'];
        }
        if (isset($map['Attachment'])) {
            $model->attachment = $map['Attachment'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['FaceImageUrl'])) {
            $model->faceImageUrl = $map['FaceImageUrl'];
        }
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }
        if (isset($map['IdNumber'])) {
            $model->idNumber = $map['IdNumber'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['IsvSubId'])) {
            $model->isvSubId = $map['IsvSubId'];
        }
        if (isset($map['MatchingRate'])) {
            $model->matchingRate = $map['MatchingRate'];
        }
        if (isset($map['PersonId'])) {
            $model->personId = $map['PersonId'];
        }

        return $model;
    }
}
