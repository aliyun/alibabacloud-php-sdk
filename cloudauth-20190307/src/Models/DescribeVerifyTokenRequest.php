<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class DescribeVerifyTokenRequest extends Model
{
    /**
     * @var string
     */
    public $idCardBackImageUrl;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $failedRedirectUrl;

    /**
     * @var string
     */
    public $faceRetainedImageUrl;

    /**
     * @var string
     */
    public $callbackSeed;

    /**
     * @var string
     */
    public $idCardFrontImageUrl;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $idCardNumber;

    /**
     * @var string
     */
    public $passedRedirectUrl;

    /**
     * @var string
     */
    public $callbackUrl;

    /**
     * @var string
     */
    public $userIp;

    /**
     * @var string
     */
    public $userPhoneNumber;

    /**
     * @var int
     */
    public $userRegistTime;
    protected $_name = [
        'idCardBackImageUrl'   => 'IdCardBackImageUrl',
        'bizType'              => 'BizType',
        'failedRedirectUrl'    => 'FailedRedirectUrl',
        'faceRetainedImageUrl' => 'FaceRetainedImageUrl',
        'callbackSeed'         => 'CallbackSeed',
        'idCardFrontImageUrl'  => 'IdCardFrontImageUrl',
        'userId'               => 'UserId',
        'bizId'                => 'BizId',
        'name'                 => 'Name',
        'idCardNumber'         => 'IdCardNumber',
        'passedRedirectUrl'    => 'PassedRedirectUrl',
        'callbackUrl'          => 'CallbackUrl',
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
        if (null !== $this->idCardBackImageUrl) {
            $res['IdCardBackImageUrl'] = $this->idCardBackImageUrl;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->failedRedirectUrl) {
            $res['FailedRedirectUrl'] = $this->failedRedirectUrl;
        }
        if (null !== $this->faceRetainedImageUrl) {
            $res['FaceRetainedImageUrl'] = $this->faceRetainedImageUrl;
        }
        if (null !== $this->callbackSeed) {
            $res['CallbackSeed'] = $this->callbackSeed;
        }
        if (null !== $this->idCardFrontImageUrl) {
            $res['IdCardFrontImageUrl'] = $this->idCardFrontImageUrl;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->idCardNumber) {
            $res['IdCardNumber'] = $this->idCardNumber;
        }
        if (null !== $this->passedRedirectUrl) {
            $res['PassedRedirectUrl'] = $this->passedRedirectUrl;
        }
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
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
        if (isset($map['IdCardBackImageUrl'])) {
            $model->idCardBackImageUrl = $map['IdCardBackImageUrl'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['FailedRedirectUrl'])) {
            $model->failedRedirectUrl = $map['FailedRedirectUrl'];
        }
        if (isset($map['FaceRetainedImageUrl'])) {
            $model->faceRetainedImageUrl = $map['FaceRetainedImageUrl'];
        }
        if (isset($map['CallbackSeed'])) {
            $model->callbackSeed = $map['CallbackSeed'];
        }
        if (isset($map['IdCardFrontImageUrl'])) {
            $model->idCardFrontImageUrl = $map['IdCardFrontImageUrl'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['IdCardNumber'])) {
            $model->idCardNumber = $map['IdCardNumber'];
        }
        if (isset($map['PassedRedirectUrl'])) {
            $model->passedRedirectUrl = $map['PassedRedirectUrl'];
        }
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
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
