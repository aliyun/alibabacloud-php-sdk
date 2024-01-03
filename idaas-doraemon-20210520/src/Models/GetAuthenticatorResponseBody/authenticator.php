<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\GetAuthenticatorResponseBody;

use AlibabaCloud\Tea\Model;

class authenticator extends Model
{
    /**
     * @example ceshi
     *
     * @var string
     */
    public $authenticatorName;

    /**
     * @var string
     */
    public $authenticatorUuid;

    /**
     * @example 1313
     *
     * @var string
     */
    public $credentialId;

    /**
     * @example 123123
     *
     * @var string
     */
    public $customAuthenticator;

    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $lastVerifySourceIp;

    /**
     * @example 123123
     *
     * @var int
     */
    public $lastVerifyTime;

    /**
     * @example 123123
     *
     * @var string
     */
    public $lastVerifyUserAgent;

    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $registerSourceIp;

    /**
     * @example 1231313123
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
        'authenticatorName'   => 'AuthenticatorName',
        'authenticatorUuid'   => 'AuthenticatorUuid',
        'credentialId'        => 'CredentialId',
        'customAuthenticator' => 'CustomAuthenticator',
        'lastVerifySourceIp'  => 'LastVerifySourceIp',
        'lastVerifyTime'      => 'LastVerifyTime',
        'lastVerifyUserAgent' => 'LastVerifyUserAgent',
        'registerSourceIp'    => 'RegisterSourceIp',
        'registerTime'        => 'RegisterTime',
        'type'                => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authenticatorName) {
            $res['AuthenticatorName'] = $this->authenticatorName;
        }
        if (null !== $this->authenticatorUuid) {
            $res['AuthenticatorUuid'] = $this->authenticatorUuid;
        }
        if (null !== $this->credentialId) {
            $res['CredentialId'] = $this->credentialId;
        }
        if (null !== $this->customAuthenticator) {
            $res['CustomAuthenticator'] = $this->customAuthenticator;
        }
        if (null !== $this->lastVerifySourceIp) {
            $res['LastVerifySourceIp'] = $this->lastVerifySourceIp;
        }
        if (null !== $this->lastVerifyTime) {
            $res['LastVerifyTime'] = $this->lastVerifyTime;
        }
        if (null !== $this->lastVerifyUserAgent) {
            $res['LastVerifyUserAgent'] = $this->lastVerifyUserAgent;
        }
        if (null !== $this->registerSourceIp) {
            $res['RegisterSourceIp'] = $this->registerSourceIp;
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
        if (isset($map['AuthenticatorName'])) {
            $model->authenticatorName = $map['AuthenticatorName'];
        }
        if (isset($map['AuthenticatorUuid'])) {
            $model->authenticatorUuid = $map['AuthenticatorUuid'];
        }
        if (isset($map['CredentialId'])) {
            $model->credentialId = $map['CredentialId'];
        }
        if (isset($map['CustomAuthenticator'])) {
            $model->customAuthenticator = $map['CustomAuthenticator'];
        }
        if (isset($map['LastVerifySourceIp'])) {
            $model->lastVerifySourceIp = $map['LastVerifySourceIp'];
        }
        if (isset($map['LastVerifyTime'])) {
            $model->lastVerifyTime = $map['LastVerifyTime'];
        }
        if (isset($map['LastVerifyUserAgent'])) {
            $model->lastVerifyUserAgent = $map['LastVerifyUserAgent'];
        }
        if (isset($map['RegisterSourceIp'])) {
            $model->registerSourceIp = $map['RegisterSourceIp'];
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
