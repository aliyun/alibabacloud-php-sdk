<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class UploadUserCertificateRequest extends Model
{
    /**
     * @var string
     */
    public $cert;

    /**
     * @var string
     */
    public $encryptCert;

    /**
     * @var string
     */
    public $encryptPrivateKey;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $signCert;

    /**
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
