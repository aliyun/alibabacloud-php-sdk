<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class CreateSM2CertRequest extends Model
{
    /**
     * @example test-sm2
     *
     * @var string
     */
    public $certName;

    /**
     * @example -----BEGIN CERTIFICATE-----
     * -----END CERTIFICATE-----
     * @var string
     */
    public $encryptCertificate;

    /**
     * @example -----BEGIN PRIVATE KEY-----
     * -----END PRIVATE KEY-----
     * @var string
     */
    public $encryptPrivateKey;

    /**
     * @example waf_v2_public_cn-***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example rg-acfm***q
     *
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @example -----BEGIN CERTIFICATE-----
     * -----END CERTIFICATE-----
     * @var string
     */
    public $signCertificate;

    /**
     * @example -----BEGIN PRIVATE KEY-----
     * -----END PRIVATE KEY-----
     * @var string
     */
    public $signPrivateKey;
    protected $_name = [
        'certName'                       => 'CertName',
        'encryptCertificate'             => 'EncryptCertificate',
        'encryptPrivateKey'              => 'EncryptPrivateKey',
        'instanceId'                     => 'InstanceId',
        'regionId'                       => 'RegionId',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'signCertificate'                => 'SignCertificate',
        'signPrivateKey'                 => 'SignPrivateKey',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CreateSM2CertRequest
     */
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
