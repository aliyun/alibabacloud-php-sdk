<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\ListUsersResponseBody\data;

use AlibabaCloud\Tea\Model;

class records extends Model
{
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
    public $faceImageUrl;

    /**
     * @var int
     */
    public $userGroupId;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var string
     */
    public $matchingRate;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $attachment;

    /**
     * @var string
     */
    public $age;

    /**
     * @var string
     */
    public $idNumber;

    /**
     * @var string
     */
    public $personId;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'isvSubId'     => 'IsvSubId',
        'gender'       => 'Gender',
        'faceImageUrl' => 'FaceImageUrl',
        'userGroupId'  => 'UserGroupId',
        'userId'       => 'UserId',
        'matchingRate' => 'MatchingRate',
        'bizId'        => 'BizId',
        'attachment'   => 'Attachment',
        'age'          => 'Age',
        'idNumber'     => 'IdNumber',
        'personId'     => 'PersonId',
        'userName'     => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isvSubId) {
            $res['IsvSubId'] = $this->isvSubId;
        }
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }
        if (null !== $this->faceImageUrl) {
            $res['FaceImageUrl'] = $this->faceImageUrl;
        }
        if (null !== $this->userGroupId) {
            $res['UserGroupId'] = $this->userGroupId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->matchingRate) {
            $res['MatchingRate'] = $this->matchingRate;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->attachment) {
            $res['Attachment'] = $this->attachment;
        }
        if (null !== $this->age) {
            $res['Age'] = $this->age;
        }
        if (null !== $this->idNumber) {
            $res['IdNumber'] = $this->idNumber;
        }
        if (null !== $this->personId) {
            $res['PersonId'] = $this->personId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
        if (isset($map['IsvSubId'])) {
            $model->isvSubId = $map['IsvSubId'];
        }
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }
        if (isset($map['FaceImageUrl'])) {
            $model->faceImageUrl = $map['FaceImageUrl'];
        }
        if (isset($map['UserGroupId'])) {
            $model->userGroupId = $map['UserGroupId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['MatchingRate'])) {
            $model->matchingRate = $map['MatchingRate'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['Attachment'])) {
            $model->attachment = $map['Attachment'];
        }
        if (isset($map['Age'])) {
            $model->age = $map['Age'];
        }
        if (isset($map['IdNumber'])) {
            $model->idNumber = $map['IdNumber'];
        }
        if (isset($map['PersonId'])) {
            $model->personId = $map['PersonId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
