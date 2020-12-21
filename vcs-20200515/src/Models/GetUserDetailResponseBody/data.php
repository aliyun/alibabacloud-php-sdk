<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\GetUserDetailResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $gender;

    /**
     * @var string
     */
    public $faceImageUrl;

    /**
     * @var string
     */
    public $isvSubId;

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
    public $phoneNo;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $plateNo;
    protected $_name = [
        'gender'       => 'Gender',
        'faceImageUrl' => 'FaceImageUrl',
        'isvSubId'     => 'IsvSubId',
        'userGroupId'  => 'UserGroupId',
        'userId'       => 'UserId',
        'bizId'        => 'BizId',
        'attachment'   => 'Attachment',
        'age'          => 'Age',
        'idNumber'     => 'IdNumber',
        'phoneNo'      => 'PhoneNo',
        'address'      => 'Address',
        'userName'     => 'UserName',
        'plateNo'      => 'PlateNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }
        if (null !== $this->faceImageUrl) {
            $res['FaceImageUrl'] = $this->faceImageUrl;
        }
        if (null !== $this->isvSubId) {
            $res['IsvSubId'] = $this->isvSubId;
        }
        if (null !== $this->userGroupId) {
            $res['UserGroupId'] = $this->userGroupId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (null !== $this->phoneNo) {
            $res['PhoneNo'] = $this->phoneNo;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }
        if (isset($map['FaceImageUrl'])) {
            $model->faceImageUrl = $map['FaceImageUrl'];
        }
        if (isset($map['IsvSubId'])) {
            $model->isvSubId = $map['IsvSubId'];
        }
        if (isset($map['UserGroupId'])) {
            $model->userGroupId = $map['UserGroupId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
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
        if (isset($map['PhoneNo'])) {
            $model->phoneNo = $map['PhoneNo'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['PlateNo'])) {
            $model->plateNo = $map['PlateNo'];
        }

        return $model;
    }
}
