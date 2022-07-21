<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\ListEmailVerificationResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $confirmIp;

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
    public $gmtCreate;

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
    public $tokenSendTime;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var int
     */
    public $verificationStatus;

    /**
     * @var string
     */
    public $verificationTime;
    protected $_name = [
        'confirmIp'           => 'ConfirmIp',
        'email'               => 'Email',
        'emailVerificationNo' => 'EmailVerificationNo',
        'gmtCreate'           => 'GmtCreate',
        'gmtModified'         => 'GmtModified',
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
     * @return data
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
