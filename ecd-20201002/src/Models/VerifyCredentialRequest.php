<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\Tea\Model;

class VerifyCredentialRequest extends Model
{
    /**
     * @example d0b95762-0541-4b53-a0e4-7ed09f39****
     *
     * @var string
     */
    public $clientId;

    /**
     * @example 123456789cyG
     *
     * @var string
     */
    public $credential;

    /**
     * @example Password
     *
     * @var string
     */
    public $credentialType;

    /**
     * @example drjfs****
     *
     * @var string
     */
    public $encryptedKey;

    /**
     * @example v1f5772a1c60dbea9fd8e1648567079018086448d234b5bc8e30bec0ba6e80c41c767c4dd0db51e9e5c4e0f111431a****
     *
     * @var string
     */
    public $loginToken;

    /**
     * @example cn-shanghai+dir-227468****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @example eb17af2e-1dd6-4cc4-a3ee-3a14d0d7****
     *
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'clientId'       => 'ClientId',
        'credential'     => 'Credential',
        'credentialType' => 'CredentialType',
        'encryptedKey'   => 'EncryptedKey',
        'loginToken'     => 'LoginToken',
        'officeSiteId'   => 'OfficeSiteId',
        'regionId'       => 'RegionId',
        'sessionId'      => 'SessionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->credential) {
            $res['Credential'] = $this->credential;
        }
        if (null !== $this->credentialType) {
            $res['CredentialType'] = $this->credentialType;
        }
        if (null !== $this->encryptedKey) {
            $res['EncryptedKey'] = $this->encryptedKey;
        }
        if (null !== $this->loginToken) {
            $res['LoginToken'] = $this->loginToken;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VerifyCredentialRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['Credential'])) {
            $model->credential = $map['Credential'];
        }
        if (isset($map['CredentialType'])) {
            $model->credentialType = $map['CredentialType'];
        }
        if (isset($map['EncryptedKey'])) {
            $model->encryptedKey = $map['EncryptedKey'];
        }
        if (isset($map['LoginToken'])) {
            $model->loginToken = $map['LoginToken'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}
