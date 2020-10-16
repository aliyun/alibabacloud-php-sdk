<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class ListUsersShrinkRequest extends Model
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
    public $userName;

    /**
     * @var int
     */
    public $userGroupId;

    /**
     * @var string
     */
    public $idNumber;

    /**
     * @var string
     */
    public $faceImageUrl;

    /**
     * @var string
     */
    public $address;

    /**
     * @var int
     */
    public $age;

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
    public $attachment;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $personListShrink;

    /**
     * @var string
     */
    public $userListShrink;

    /**
     * @var string
     */
    public $matchingRateThreshold;
    protected $_name = [
        'corpId'                => 'CorpId',
        'isvSubId'              => 'IsvSubId',
        'userName'              => 'UserName',
        'userGroupId'           => 'UserGroupId',
        'idNumber'              => 'IdNumber',
        'faceImageUrl'          => 'FaceImageUrl',
        'address'               => 'Address',
        'age'                   => 'Age',
        'gender'                => 'Gender',
        'plateNo'               => 'PlateNo',
        'phoneNo'               => 'PhoneNo',
        'attachment'            => 'Attachment',
        'bizId'                 => 'BizId',
        'pageNumber'            => 'PageNumber',
        'pageSize'              => 'PageSize',
        'personListShrink'      => 'PersonList',
        'userListShrink'        => 'UserList',
        'matchingRateThreshold' => 'MatchingRateThreshold',
    ];

    public function validate()
    {
        Model::validateRequired('isvSubId', $this->isvSubId, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
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
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->userGroupId) {
            $res['UserGroupId'] = $this->userGroupId;
        }
        if (null !== $this->idNumber) {
            $res['IdNumber'] = $this->idNumber;
        }
        if (null !== $this->faceImageUrl) {
            $res['FaceImageUrl'] = $this->faceImageUrl;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->age) {
            $res['Age'] = $this->age;
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
        if (null !== $this->attachment) {
            $res['Attachment'] = $this->attachment;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->personListShrink) {
            $res['PersonList'] = $this->personListShrink;
        }
        if (null !== $this->userListShrink) {
            $res['UserList'] = $this->userListShrink;
        }
        if (null !== $this->matchingRateThreshold) {
            $res['MatchingRateThreshold'] = $this->matchingRateThreshold;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUsersShrinkRequest
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
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['UserGroupId'])) {
            $model->userGroupId = $map['UserGroupId'];
        }
        if (isset($map['IdNumber'])) {
            $model->idNumber = $map['IdNumber'];
        }
        if (isset($map['FaceImageUrl'])) {
            $model->faceImageUrl = $map['FaceImageUrl'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['Age'])) {
            $model->age = $map['Age'];
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
        if (isset($map['Attachment'])) {
            $model->attachment = $map['Attachment'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PersonList'])) {
            $model->personListShrink = $map['PersonList'];
        }
        if (isset($map['UserList'])) {
            $model->userListShrink = $map['UserList'];
        }
        if (isset($map['MatchingRateThreshold'])) {
            $model->matchingRateThreshold = $map['MatchingRateThreshold'];
        }

        return $model;
    }
}
