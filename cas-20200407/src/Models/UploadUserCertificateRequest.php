<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class UploadUserCertificateRequest extends Model
{
    /**
     * @description The content of the certificate in the PEM format.
     *
     * @example -----BEGIN CERTIFICATE----- MIIF...... -----END CERTIFICATE-----
     *
     * @var string
     */
    public $cert;

    /**
     * @description The content of the encryption certificate in PEM format.
     *
     * @example -----BEGIN CERTIFICATE-----
     * MIICDzCCA***
     * -----END CERTIFICATE-----
     * @var string
     */
    public $encryptCert;

    /**
     * @description The private key of the encryption certificate in the PEM format.
     *
     * @example -----BEGIN EC PRIVATE KEY-----
     * MHcCAQEEI****
     * -----END EC PRIVATE KEY-----
     * @var string
     */
    public $encryptPrivateKey;

    /**
     * @description The private key of the certificate in the PEM format.
     *
     * @example -----BEGIN CERTIFICATE-----
     * MIICDzCCAbagAw****
     * -----END CERTIFICATE-----
     * @var string
     */
    public $key;

    /**
     * @description The name of the certificate. The name can contain up to 128 characters in length. The name can contain all types of characters, such as letters, digits, and underscores (\_).
     *
     * >  The name must be unique within an Alibaba Cloud account.
     * @example cert-1
     *
     * @var string
     */
    public $name;

    /**
     * @description the resource group id.
     *
     * @example rg-ae****vty
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The content of the signing certificate in the PEM format.
     *
     * @example -----BEGIN CERTIFICATE-----
     * MIICDzCCAbagAw****
     * -----END CERTIFICATE-----
     * @var string
     */
    public $signCert;

    /**
     * @description The private key of the signing certificate in the PEM format.
     *
     * @example -----BEGIN EC PRIVATE KEY-----
     * MHcCAQEEILR****
     * -----END EC PRIVATE KEY-----
     * @var string
     */
    public $signPrivateKey;
    protected $_name = [
        'cert'              => 'Cert',
        'encryptCert'       => 'EncryptCert',
        'encryptPrivateKey' => 'EncryptPrivateKey',
        'key'               => 'Key',
        'name'              => 'Name',
        'resourceGroupId'   => 'ResourceGroupId',
        'signCert'          => 'SignCert',
        'signPrivateKey'    => 'SignPrivateKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cert) {
            $res['Cert'] = $this->cert;
        }
        if (null !== $this->encryptCert) {
            $res['EncryptCert'] = $this->encryptCert;
        }
        if (null !== $this->encryptPrivateKey) {
            $res['EncryptPrivateKey'] = $this->encryptPrivateKey;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->signCert) {
            $res['SignCert'] = $this->signCert;
        }
        if (null !== $this->signPrivateKey) {
            $res['SignPrivateKey'] = $this->signPrivateKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadUserCertificateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cert'])) {
            $model->cert = $map['Cert'];
        }
        if (isset($map['EncryptCert'])) {
            $model->encryptCert = $map['EncryptCert'];
        }
        if (isset($map['EncryptPrivateKey'])) {
            $model->encryptPrivateKey = $map['EncryptPrivateKey'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SignCert'])) {
            $model->signCert = $map['SignCert'];
        }
        if (isset($map['SignPrivateKey'])) {
            $model->signPrivateKey = $map['SignPrivateKey'];
        }

        return $model;
    }
}
