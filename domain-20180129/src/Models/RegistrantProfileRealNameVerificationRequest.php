<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class RegistrantProfileRealNameVerificationRequest extends Model
{
    /**
     * @example dGVzdA==
     *
     * @var string
     */
    public $identityCredential;

    /**
     * @example 43012512345678****
     *
     * @var string
     */
    public $identityCredentialNo;

    /**
     * @example SFZ
     *
     * @var string
     */
    public $identityCredentialType;

    /**
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @example 1234567
     *
     * @var int
     */
    public $registrantProfileID;

    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'identityCredential'     => 'IdentityCredential',
        'identityCredentialNo'   => 'IdentityCredentialNo',
        'identityCredentialType' => 'IdentityCredentialType',
        'lang'                   => 'Lang',
        'registrantProfileID'    => 'RegistrantProfileID',
        'userClientIp'           => 'UserClientIp',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return RegistrantProfileRealNameVerificationRequest
     */
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
