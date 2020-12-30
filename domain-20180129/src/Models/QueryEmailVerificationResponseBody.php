<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class QueryEmailVerificationResponseBody extends Model
{
    /**
     * @var int
     */
    public $verificationStatus;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $emailVerificationNo;

    /**
     * @var string
     */
    public $confirmIp;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $sendIp;

    /**
     * @var string
     */
    public $verificationTime;

    /**
     * @var string
     */
    public $tokenSendTime;
    protected $_name = [
        'verificationStatus'  => 'VerificationStatus',
        'gmtCreate'           => 'GmtCreate',
        'email'               => 'Email',
        'emailVerificationNo' => 'EmailVerificationNo',
        'confirmIp'           => 'ConfirmIp',
        'requestId'           => 'RequestId',
        'userId'              => 'UserId',
        'gmtModified'         => 'GmtModified',
        'sendIp'              => 'SendIp',
        'verificationTime'    => 'VerificationTime',
        'tokenSendTime'       => 'TokenSendTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->verificationStatus) {
            $res['VerificationStatus'] = $this->verificationStatus;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->emailVerificationNo) {
            $res['EmailVerificationNo'] = $this->emailVerificationNo;
        }
        if (null !== $this->confirmIp) {
            $res['ConfirmIp'] = $this->confirmIp;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->sendIp) {
            $res['SendIp'] = $this->sendIp;
        }
        if (null !== $this->verificationTime) {
            $res['VerificationTime'] = $this->verificationTime;
        }
        if (null !== $this->tokenSendTime) {
            $res['TokenSendTime'] = $this->tokenSendTime;
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
        if (isset($map['VerificationStatus'])) {
            $model->verificationStatus = $map['VerificationStatus'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['EmailVerificationNo'])) {
            $model->emailVerificationNo = $map['EmailVerificationNo'];
        }
        if (isset($map['ConfirmIp'])) {
            $model->confirmIp = $map['ConfirmIp'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['SendIp'])) {
            $model->sendIp = $map['SendIp'];
        }
        if (isset($map['VerificationTime'])) {
            $model->verificationTime = $map['VerificationTime'];
        }
        if (isset($map['TokenSendTime'])) {
            $model->tokenSendTime = $map['TokenSendTime'];
        }

        return $model;
    }
}
