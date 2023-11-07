<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class QueryEmailVerificationResponseBody extends Model
{
    /**
     * @example 42.*.*.31
     *
     * @var string
     */
    public $confirmIp;

    /**
     * @example abc@aliyun.com
     *
     * @var string
     */
    public $email;

    /**
     * @example 72b36ba0572e423bbb3f19640896****
     *
     * @var string
     */
    public $emailVerificationNo;

    /**
     * @example 2019-02-19 16:38:07
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2019-02-19 16:40:38
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example FC4F7D02-8A83-4E37-B935-2D48A1B8423E
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 42.*.*.115
     *
     * @var string
     */
    public $sendIp;

    /**
     * @example 2019-02-19 16:38:07
     *
     * @var string
     */
    public $tokenSendTime;

    /**
     * @example 140692647406****
     *
     * @var string
     */
    public $userId;

    /**
     * @example 1
     *
     * @var int
     */
    public $verificationStatus;

    /**
     * @example 2019-02-19 16:40:38
     *
     * @var string
     */
    public $verificationTime;
    protected $_name = [
        'confirmIp'           => 'ConfirmIp',
        'email'               => 'Email',
        'emailVerificationNo' => 'EmailVerificationNo',
        'gmtCreate'           => 'GmtCreate',
        'gmtModified'         => 'GmtModified',
        'requestId'           => 'RequestId',
        'sendIp'              => 'SendIp',
        'tokenSendTime'       => 'TokenSendTime',
        'userId'              => 'UserId',
        'verificationStatus'  => 'VerificationStatus',
        'verificationTime'    => 'VerificationTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->confirmIp) {
            $res['ConfirmIp'] = $this->confirmIp;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->emailVerificationNo) {
            $res['EmailVerificationNo'] = $this->emailVerificationNo;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sendIp) {
            $res['SendIp'] = $this->sendIp;
        }
        if (null !== $this->tokenSendTime) {
            $res['TokenSendTime'] = $this->tokenSendTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->verificationStatus) {
            $res['VerificationStatus'] = $this->verificationStatus;
        }
        if (null !== $this->verificationTime) {
            $res['VerificationTime'] = $this->verificationTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryEmailVerificationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfirmIp'])) {
            $model->confirmIp = $map['ConfirmIp'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['EmailVerificationNo'])) {
            $model->emailVerificationNo = $map['EmailVerificationNo'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SendIp'])) {
            $model->sendIp = $map['SendIp'];
        }
        if (isset($map['TokenSendTime'])) {
            $model->tokenSendTime = $map['TokenSendTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['VerificationStatus'])) {
            $model->verificationStatus = $map['VerificationStatus'];
        }
        if (isset($map['VerificationTime'])) {
            $model->verificationTime = $map['VerificationTime'];
        }

        return $model;
    }
}
