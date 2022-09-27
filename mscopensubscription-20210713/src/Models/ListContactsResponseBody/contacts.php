<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models\ListContactsResponseBody;

use AlibabaCloud\Tea\Model;

class contacts extends Model
{
    /**
     * @var int
     */
    public $accountUid;

    /**
     * @var int
     */
    public $contactId;

    /**
     * @var string
     */
    public $contactName;

    /**
     * @var string
     */
    public $email;

    /**
     * @var bool
     */
    public $isAccount;

    /**
     * @var bool
     */
    public $isObsolete;

    /**
     * @var bool
     */
    public $isVerifiedEmail;

    /**
     * @var bool
     */
    public $isVerifiedMobile;

    /**
     * @var int
     */
    public $lastEmailVerificationTimeStamp;

    /**
     * @var int
     */
    public $lastMobileVerificationTimeStamp;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $position;
    protected $_name = [
        'accountUid'                      => 'AccountUid',
        'contactId'                       => 'ContactId',
        'contactName'                     => 'ContactName',
        'email'                           => 'Email',
        'isAccount'                       => 'IsAccount',
        'isObsolete'                      => 'IsObsolete',
        'isVerifiedEmail'                 => 'IsVerifiedEmail',
        'isVerifiedMobile'                => 'IsVerifiedMobile',
        'lastEmailVerificationTimeStamp'  => 'LastEmailVerificationTimeStamp',
        'lastMobileVerificationTimeStamp' => 'LastMobileVerificationTimeStamp',
        'mobile'                          => 'Mobile',
        'position'                        => 'Position',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountUid) {
            $res['AccountUid'] = $this->accountUid;
        }
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }
        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->isAccount) {
            $res['IsAccount'] = $this->isAccount;
        }
        if (null !== $this->isObsolete) {
            $res['IsObsolete'] = $this->isObsolete;
        }
        if (null !== $this->isVerifiedEmail) {
            $res['IsVerifiedEmail'] = $this->isVerifiedEmail;
        }
        if (null !== $this->isVerifiedMobile) {
            $res['IsVerifiedMobile'] = $this->isVerifiedMobile;
        }
        if (null !== $this->lastEmailVerificationTimeStamp) {
            $res['LastEmailVerificationTimeStamp'] = $this->lastEmailVerificationTimeStamp;
        }
        if (null !== $this->lastMobileVerificationTimeStamp) {
            $res['LastMobileVerificationTimeStamp'] = $this->lastMobileVerificationTimeStamp;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->position) {
            $res['Position'] = $this->position;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contacts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountUid'])) {
            $model->accountUid = $map['AccountUid'];
        }
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['IsAccount'])) {
            $model->isAccount = $map['IsAccount'];
        }
        if (isset($map['IsObsolete'])) {
            $model->isObsolete = $map['IsObsolete'];
        }
        if (isset($map['IsVerifiedEmail'])) {
            $model->isVerifiedEmail = $map['IsVerifiedEmail'];
        }
        if (isset($map['IsVerifiedMobile'])) {
            $model->isVerifiedMobile = $map['IsVerifiedMobile'];
        }
        if (isset($map['LastEmailVerificationTimeStamp'])) {
            $model->lastEmailVerificationTimeStamp = $map['LastEmailVerificationTimeStamp'];
        }
        if (isset($map['LastMobileVerificationTimeStamp'])) {
            $model->lastMobileVerificationTimeStamp = $map['LastMobileVerificationTimeStamp'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['Position'])) {
            $model->position = $map['Position'];
        }

        return $model;
    }
}
