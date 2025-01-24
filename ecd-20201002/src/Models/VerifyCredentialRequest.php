<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\Dara\Model;

class VerifyCredentialRequest extends Model
{
    /**
     * @var string
     */
    public $clientId;
    /**
     * @var string
     */
    public $credential;
    /**
     * @var string
     */
    public $credentialType;
    /**
     * @var string
     */
    public $encryptedKey;
    /**
     * @var string
     */
    public $loginToken;
    /**
     * @var string
     */
    public $officeSiteId;
    /**
     * @var string
     */
    public $regionId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
