<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\ListAuthenticatorsResponseBody;

use AlibabaCloud\Tea\Model;

class authenticator extends Model
{
    /**
     * @example webauth_demo
     *
     * @var string
     */
    public $applicationExternalId;

    /**
     * @example TOTP-DefaultName
     *
     * @var string
     */
    public $authenticatorName;

    /**
     * @example 0fcd5fce3fdc42052633a65eb242f10aZ8nzoQMpV3m
     *
     * @var string
     */
    public $authenticatorUuid;

    /**
     * @example scimcred-00skzv5noh34r5aoci76
     *
     * @var string
     */
    public $credentialId;

    /**
     * @example 123123
     *
     * @var int
     */
    public $lastVerifyTime;

    /**
     * @example 1342800000000
     *
     * @var int
     */
    public $registerTime;

    /**
     * @example TOTP
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'applicationExternalId' => 'ApplicationExternalId',
        'authenticatorName'     => 'AuthenticatorName',
        'authenticatorUuid'     => 'AuthenticatorUuid',
        'credentialId'          => 'CredentialId',
        'lastVerifyTime'        => 'LastVerifyTime',
        'registerTime'          => 'RegisterTime',
        'type'                  => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationExternalId) {
            $res['ApplicationExternalId'] = $this->applicationExternalId;
        }
        if (null !== $this->authenticatorName) {
            $res['AuthenticatorName'] = $this->authenticatorName;
        }
        if (null !== $this->authenticatorUuid) {
            $res['AuthenticatorUuid'] = $this->authenticatorUuid;
        }
        if (null !== $this->credentialId) {
            $res['CredentialId'] = $this->credentialId;
        }
        if (null !== $this->lastVerifyTime) {
            $res['LastVerifyTime'] = $this->lastVerifyTime;
        }
        if (null !== $this->registerTime) {
            $res['RegisterTime'] = $this->registerTime;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return authenticator
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationExternalId'])) {
            $model->applicationExternalId = $map['ApplicationExternalId'];
        }
        if (isset($map['AuthenticatorName'])) {
            $model->authenticatorName = $map['AuthenticatorName'];
        }
        if (isset($map['AuthenticatorUuid'])) {
            $model->authenticatorUuid = $map['AuthenticatorUuid'];
        }
        if (isset($map['CredentialId'])) {
            $model->credentialId = $map['CredentialId'];
        }
        if (isset($map['LastVerifyTime'])) {
            $model->lastVerifyTime = $map['LastVerifyTime'];
        }
        if (isset($map['RegisterTime'])) {
            $model->registerTime = $map['RegisterTime'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
