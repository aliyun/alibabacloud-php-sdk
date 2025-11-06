<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Dara\Model;

class RegistrantProfileRealNameVerificationRequest extends Model
{
    /**
     * @var string
     */
    public $identityCredential;

    /**
     * @var string
     */
    public $identityCredentialNo;

    /**
     * @var string
     */
    public $identityCredentialType;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $registrantProfileID;

    /**
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'identityCredential' => 'IdentityCredential',
        'identityCredentialNo' => 'IdentityCredentialNo',
        'identityCredentialType' => 'IdentityCredentialType',
        'lang' => 'Lang',
        'registrantProfileID' => 'RegistrantProfileID',
        'userClientIp' => 'UserClientIp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->identityCredential) {
            $res['IdentityCredential'] = $this->identityCredential;
        }

        if (null !== $this->identityCredentialNo) {
            $res['IdentityCredentialNo'] = $this->identityCredentialNo;
        }

        if (null !== $this->identityCredentialType) {
            $res['IdentityCredentialType'] = $this->identityCredentialType;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->registrantProfileID) {
            $res['RegistrantProfileID'] = $this->registrantProfileID;
        }

        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IdentityCredential'])) {
            $model->identityCredential = $map['IdentityCredential'];
        }

        if (isset($map['IdentityCredentialNo'])) {
            $model->identityCredentialNo = $map['IdentityCredentialNo'];
        }

        if (isset($map['IdentityCredentialType'])) {
            $model->identityCredentialType = $map['IdentityCredentialType'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['RegistrantProfileID'])) {
            $model->registrantProfileID = $map['RegistrantProfileID'];
        }

        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
