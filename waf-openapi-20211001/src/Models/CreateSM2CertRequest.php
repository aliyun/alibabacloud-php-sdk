<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;

class CreateSM2CertRequest extends Model
{
    /**
     * @var string
     */
    public $certName;

    /**
     * @var string
     */
    public $encryptCertificate;

    /**
     * @var string
     */
    public $encryptPrivateKey;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @var string
     */
    public $signCertificate;

    /**
     * @var string
     */
    public $signPrivateKey;
    protected $_name = [
        'certName' => 'CertName',
        'encryptCertificate' => 'EncryptCertificate',
        'encryptPrivateKey' => 'EncryptPrivateKey',
        'instanceId' => 'InstanceId',
        'regionId' => 'RegionId',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'signCertificate' => 'SignCertificate',
        'signPrivateKey' => 'SignPrivateKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }

        if (null !== $this->encryptCertificate) {
            $res['EncryptCertificate'] = $this->encryptCertificate;
        }

        if (null !== $this->encryptPrivateKey) {
            $res['EncryptPrivateKey'] = $this->encryptPrivateKey;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }

        if (null !== $this->signCertificate) {
            $res['SignCertificate'] = $this->signCertificate;
        }

        if (null !== $this->signPrivateKey) {
            $res['SignPrivateKey'] = $this->signPrivateKey;
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
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }

        if (isset($map['EncryptCertificate'])) {
            $model->encryptCertificate = $map['EncryptCertificate'];
        }

        if (isset($map['EncryptPrivateKey'])) {
            $model->encryptPrivateKey = $map['EncryptPrivateKey'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }

        if (isset($map['SignCertificate'])) {
            $model->signCertificate = $map['SignCertificate'];
        }

        if (isset($map['SignPrivateKey'])) {
            $model->signPrivateKey = $map['SignPrivateKey'];
        }

        return $model;
    }
}
