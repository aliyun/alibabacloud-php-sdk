<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetUserTmpIdentityForPartnerResponseBody\data;

use AlibabaCloud\Dara\Model;

class credentials extends Model
{
    /**
     * @var string
     */
    public $encryptedAccessKeyId;

    /**
     * @var string
     */
    public $encryptedAccessKeySecret;

    /**
     * @var string
     */
    public $encryptedSecurityToken;

    /**
     * @var string
     */
    public $expiration;
    protected $_name = [
        'encryptedAccessKeyId' => 'EncryptedAccessKeyId',
        'encryptedAccessKeySecret' => 'EncryptedAccessKeySecret',
        'encryptedSecurityToken' => 'EncryptedSecurityToken',
        'expiration' => 'Expiration',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->encryptedAccessKeyId) {
            $res['EncryptedAccessKeyId'] = $this->encryptedAccessKeyId;
        }

        if (null !== $this->encryptedAccessKeySecret) {
            $res['EncryptedAccessKeySecret'] = $this->encryptedAccessKeySecret;
        }

        if (null !== $this->encryptedSecurityToken) {
            $res['EncryptedSecurityToken'] = $this->encryptedSecurityToken;
        }

        if (null !== $this->expiration) {
            $res['Expiration'] = $this->expiration;
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
        if (isset($map['EncryptedAccessKeyId'])) {
            $model->encryptedAccessKeyId = $map['EncryptedAccessKeyId'];
        }

        if (isset($map['EncryptedAccessKeySecret'])) {
            $model->encryptedAccessKeySecret = $map['EncryptedAccessKeySecret'];
        }

        if (isset($map['EncryptedSecurityToken'])) {
            $model->encryptedSecurityToken = $map['EncryptedSecurityToken'];
        }

        if (isset($map['Expiration'])) {
            $model->expiration = $map['Expiration'];
        }

        return $model;
    }
}
