<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class DescribeVerifyTokenRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 39ecf51e-2f81-4dc5-90ee-ff86125be683
     *
     * @var string
     */
    public $bizId;

    /**
     * @description This parameter is required.
     *
     * @example RPBasicTest
     *
     * @var string
     */
    public $bizType;

    /**
     * @example -
     *
     * @var string
     */
    public $callbackSeed;

    /**
     * @example -
     *
     * @var string
     */
    public $callbackUrl;

    /**
     * @example http%3A%2F%2Fjiangsu.china.com.cn%2Fuploadfile%2F2015%2F0114%2F1421221304095989.jpg
     *
     * @var string
     */
    public $faceRetainedImageUrl;

    /**
     * @example -
     *
     * @var string
     */
    public $failedRedirectUrl;

    /**
     * @example http%3A%2F%2Fjiangsu.china.com.cn%2Fuploadfile%2F2015%2F0114%2F1421221304095989.jpg
     *
     * @var string
     */
    public $idCardBackImageUrl;

    /**
     * @example http%3A%2F%2Fjiangsu.china.com.cn%2Fuploadfile%2F2015%2F0114%2F1421221304095989.jpg
     *
     * @var string
     */
    public $idCardFrontImageUrl;

    /**
     * @example 330100xxxxxxxxxxxx
     *
     * @var string
     */
    public $idCardNumber;

    /**
     * @var string
     */
    public $name;

    /**
     * @example -
     *
     * @var string
     */
    public $passedRedirectUrl;

    /**
     * @example user111
     *
     * @var string
     */
    public $userId;

    /**
     * @example 192.168.***.***
     *
     * @var string
     */
    public $userIp;

    /**
     * @example 187********
     *
     * @var string
     */
    public $userPhoneNumber;

    /**
     * @example 1577808000000
     *
     * @var int
     */
    public $userRegistTime;
    protected $_name = [
        'bizId'                => 'BizId',
        'bizType'              => 'BizType',
        'callbackSeed'         => 'CallbackSeed',
        'callbackUrl'          => 'CallbackUrl',
        'faceRetainedImageUrl' => 'FaceRetainedImageUrl',
        'failedRedirectUrl'    => 'FailedRedirectUrl',
        'idCardBackImageUrl'   => 'IdCardBackImageUrl',
        'idCardFrontImageUrl'  => 'IdCardFrontImageUrl',
        'idCardNumber'         => 'IdCardNumber',
        'name'                 => 'Name',
        'passedRedirectUrl'    => 'PassedRedirectUrl',
        'userId'               => 'UserId',
        'userIp'               => 'UserIp',
        'userPhoneNumber'      => 'UserPhoneNumber',
        'userRegistTime'       => 'UserRegistTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->callbackSeed) {
            $res['CallbackSeed'] = $this->callbackSeed;
        }
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }
        if (null !== $this->faceRetainedImageUrl) {
            $res['FaceRetainedImageUrl'] = $this->faceRetainedImageUrl;
        }
        if (null !== $this->failedRedirectUrl) {
            $res['FailedRedirectUrl'] = $this->failedRedirectUrl;
        }
        if (null !== $this->idCardBackImageUrl) {
            $res['IdCardBackImageUrl'] = $this->idCardBackImageUrl;
        }
        if (null !== $this->idCardFrontImageUrl) {
            $res['IdCardFrontImageUrl'] = $this->idCardFrontImageUrl;
        }
        if (null !== $this->idCardNumber) {
            $res['IdCardNumber'] = $this->idCardNumber;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->passedRedirectUrl) {
            $res['PassedRedirectUrl'] = $this->passedRedirectUrl;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userIp) {
            $res['UserIp'] = $this->userIp;
        }
        if (null !== $this->userPhoneNumber) {
            $res['UserPhoneNumber'] = $this->userPhoneNumber;
        }
        if (null !== $this->userRegistTime) {
            $res['UserRegistTime'] = $this->userRegistTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVerifyTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['CallbackSeed'])) {
            $model->callbackSeed = $map['CallbackSeed'];
        }
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }
        if (isset($map['FaceRetainedImageUrl'])) {
            $model->faceRetainedImageUrl = $map['FaceRetainedImageUrl'];
        }
        if (isset($map['FailedRedirectUrl'])) {
            $model->failedRedirectUrl = $map['FailedRedirectUrl'];
        }
        if (isset($map['IdCardBackImageUrl'])) {
            $model->idCardBackImageUrl = $map['IdCardBackImageUrl'];
        }
        if (isset($map['IdCardFrontImageUrl'])) {
            $model->idCardFrontImageUrl = $map['IdCardFrontImageUrl'];
        }
        if (isset($map['IdCardNumber'])) {
            $model->idCardNumber = $map['IdCardNumber'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PassedRedirectUrl'])) {
            $model->passedRedirectUrl = $map['PassedRedirectUrl'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserIp'])) {
            $model->userIp = $map['UserIp'];
        }
        if (isset($map['UserPhoneNumber'])) {
            $model->userPhoneNumber = $map['UserPhoneNumber'];
        }
        if (isset($map['UserRegistTime'])) {
            $model->userRegistTime = $map['UserRegistTime'];
        }

        return $model;
    }
}
