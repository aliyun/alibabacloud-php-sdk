<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GenerateDownloadSecretKeyRequest extends Model
{
    /**
     * @description A custom string of 16 to 32 characters in length. The string must contain uppercase letters, lowercase letters, and digits.
     *
     * @example AppDecryptKeyAndroid20230101
     *
     * @var string
     */
    public $appDecryptKey;

    /**
     * @description The unique identifier of the app.
     *
     *   Android: the SHA-1 fingerprint of the keystore. The value is a string that contains a colon (:).
     *   iOS: the bundle ID of the app.
     *   Windows: the serial number in the digital signature certificate.
     *
     * For more information about how to obtain the unique identifier of an app, see [Obtain the unique app identifier](~~86107#section-wtj-9d7-lg2~~).
     * @example BB:0D:AC:74:D3:21:09:EF:9C:71:1A:5E:77:2C:8E:BF:03:FD:FA:5A
     *
     * @var string
     */
    public $appIdentification;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'appDecryptKey'        => 'AppDecryptKey',
        'appIdentification'    => 'AppIdentification',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appDecryptKey) {
            $res['AppDecryptKey'] = $this->appDecryptKey;
        }
        if (null !== $this->appIdentification) {
            $res['AppIdentification'] = $this->appIdentification;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateDownloadSecretKeyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppDecryptKey'])) {
            $model->appDecryptKey = $map['AppDecryptKey'];
        }
        if (isset($map['AppIdentification'])) {
            $model->appIdentification = $map['AppIdentification'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
