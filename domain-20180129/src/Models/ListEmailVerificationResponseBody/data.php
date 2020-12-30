<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\ListEmailVerificationResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $verificationTime;

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
    public $userId;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $verificationStatus;

    /**
     * @var string
     */
    public $tokenSendTime;

    /**
     * @var string
     */
    public $sendIp;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $confirmIp;
    protected $_name = [
        'verificationTime'    => 'VerificationTime',
        'email'               => 'Email',
        'emailVerificationNo' => 'EmailVerificationNo',
        'userId'              => 'UserId',
        'gmtCreate'           => 'GmtCreate',
        'verificationStatus'  => 'VerificationStatus',
        'tokenSendTime'       => 'TokenSendTime',
        'sendIp'              => 'SendIp',
        'gmtModified'         => 'GmtModified',
        'confirmIp'           => 'ConfirmIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->verificationTime) {
            $res['VerificationTime'] = $this->verificationTime;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->emailVerificationNo) {
            $res['EmailVerificationNo'] = $this->emailVerificationNo;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->verificationStatus) {
            $res['VerificationStatus'] = $this->verificationStatus;
        }
        if (null !== $this->tokenSendTime) {
            $res['TokenSendTime'] = $this->tokenSendTime;
        }
        if (null !== $this->sendIp) {
            $res['SendIp'] = $this->sendIp;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->confirmIp) {
            $res['ConfirmIp'] = $this->confirmIp;
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
        if (isset($map['VerificationTime'])) {
            $model->verificationTime = $map['VerificationTime'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['EmailVerificationNo'])) {
            $model->emailVerificationNo = $map['EmailVerificationNo'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['VerificationStatus'])) {
            $model->verificationStatus = $map['VerificationStatus'];
        }
        if (isset($map['TokenSendTime'])) {
            $model->tokenSendTime = $map['TokenSendTime'];
        }
        if (isset($map['SendIp'])) {
            $model->sendIp = $map['SendIp'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['ConfirmIp'])) {
            $model->confirmIp = $map['ConfirmIp'];
        }

        return $model;
    }
}
