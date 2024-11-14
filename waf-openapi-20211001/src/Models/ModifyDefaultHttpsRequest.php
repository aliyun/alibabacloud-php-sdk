<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class ModifyDefaultHttpsRequest extends Model
{
    /**
     * @description The ID of the certificate.
     *
     * This parameter is required.
     * @example 123-cn-hangzhou
     *
     * @var string
     */
    public $certId;

    /**
     * @description The type of the cipher suites. Valid values:
     *
     *   **1**: all cipher suites.
     *   **2**: strong cipher suites.
     *   **99**: custom cipher suites.
     *
     * @example 0
     *
     * @var int
     */
    public $cipherSuite;

    /**
     * @description The custom cipher suites that you want to add. This parameter is available only if you set **CipherSuite** to **99**.
     *
     * @var string[]
     */
    public $customCiphers;

    /**
     * @description Specifies whether to support TLS 1.3. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $enableTLSv3;

    /**
     * @description The ID of the Web Application Firewall (WAF) instance.
     *
     * This parameter is required.
     * @example waf_v2_public_cn-***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The region in which the WAF instance is deployed. Valid values:
     *
     *   **cn-hangzhou**: the Chinese mainland.
     *   **ap-southeast-1**: outside the Chinese mainland.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the Alibaba Cloud resource group.
     *
     * @example rg-acfm***q
     *
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @description The version of the TLS protocol. Valid values:
     *
     *   **tlsv1**
     *   **tlsv1.1**
     *   **tlsv1.2**
     *
     * This parameter is required.
     * @example tlsv1
     *
     * @var string
     */
    public $TLSVersion;
    protected $_name = [
        'certId'                         => 'CertId',
        'cipherSuite'                    => 'CipherSuite',
        'customCiphers'                  => 'CustomCiphers',
        'enableTLSv3'                    => 'EnableTLSv3',
        'instanceId'                     => 'InstanceId',
        'regionId'                       => 'RegionId',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'TLSVersion'                     => 'TLSVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certId) {
            $res['CertId'] = $this->certId;
        }
        if (null !== $this->cipherSuite) {
            $res['CipherSuite'] = $this->cipherSuite;
        }
        if (null !== $this->customCiphers) {
            $res['CustomCiphers'] = $this->customCiphers;
        }
        if (null !== $this->enableTLSv3) {
            $res['EnableTLSv3'] = $this->enableTLSv3;
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
        if (null !== $this->TLSVersion) {
            $res['TLSVersion'] = $this->TLSVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDefaultHttpsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertId'])) {
            $model->certId = $map['CertId'];
        }
        if (isset($map['CipherSuite'])) {
            $model->cipherSuite = $map['CipherSuite'];
        }
        if (isset($map['CustomCiphers'])) {
            if (!empty($map['CustomCiphers'])) {
                $model->customCiphers = $map['CustomCiphers'];
            }
        }
        if (isset($map['EnableTLSv3'])) {
            $model->enableTLSv3 = $map['EnableTLSv3'];
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
        if (isset($map['TLSVersion'])) {
            $model->TLSVersion = $map['TLSVersion'];
        }

        return $model;
    }
}
