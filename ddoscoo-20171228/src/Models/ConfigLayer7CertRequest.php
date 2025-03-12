<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Tea\Model;

class ConfigLayer7CertRequest extends Model
{
    /**
     * @example xx
     *
     * @var string
     */
    public $cert;

    /**
     * @example 1234
     *
     * @var int
     */
    public $certId;

    /**
     * @var string
     */
    public $certIdentifier;

    /**
     * @example testCertName
     *
     * @var string
     */
    public $certName;

    /**
     * @var string
     */
    public $certRegion;

    /**
     * @description This parameter is required.
     *
     * @example www.aliyun.com
     *
     * @var string
     */
    public $domain;

    /**
     * @example xx
     *
     * @var string
     */
    public $key;

    /**
     * @example xx
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'cert'            => 'Cert',
        'certId'          => 'CertId',
        'certIdentifier'  => 'CertIdentifier',
        'certName'        => 'CertName',
        'certRegion'      => 'CertRegion',
        'domain'          => 'Domain',
        'key'             => 'Key',
        'resourceGroupId' => 'ResourceGroupId',
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
        if (null !== $this->certId) {
            $res['CertId'] = $this->certId;
        }
        if (null !== $this->certIdentifier) {
            $res['CertIdentifier'] = $this->certIdentifier;
        }
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }
        if (null !== $this->certRegion) {
            $res['CertRegion'] = $this->certRegion;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigLayer7CertRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cert'])) {
            $model->cert = $map['Cert'];
        }
        if (isset($map['CertId'])) {
            $model->certId = $map['CertId'];
        }
        if (isset($map['CertIdentifier'])) {
            $model->certIdentifier = $map['CertIdentifier'];
        }
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }
        if (isset($map['CertRegion'])) {
            $model->certRegion = $map['CertRegion'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
