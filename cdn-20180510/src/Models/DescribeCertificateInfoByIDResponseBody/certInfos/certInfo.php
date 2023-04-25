<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCertificateInfoByIDResponseBody\certInfos;

use AlibabaCloud\Tea\Model;

class certInfo extends Model
{
    /**
     * @description The time at which the certificate expires.
     *
     * @example 2098-02-08 08:02:07 +0000 UTC
     *
     * @var string
     */
    public $certExpireTime;

    /**
     * @description The ID of the certificate.
     *
     * @example 1644xx
     *
     * @var string
     */
    public $certId;

    /**
     * @description The name of the certificate.
     *
     * @example example_cert
     *
     * @var string
     */
    public $certName;

    /**
     * @description The type of the certificate.
     *
     *   free: a free certificate
     *   cas: a certificate purchased by using Certificate Management Service
     *   upload: a user-uploaded certificate
     *
     * @example cas
     *
     * @var string
     */
    public $certType;

    /**
     * @description The time when the certificate became effective.
     *
     * @example 2015-12-21 08:02:07 +0000 UTC
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The domain names that use the certificate.
     *
     * @example ["example.com"]
     *
     * @var string
     */
    public $domainList;

    /**
     * @description The content of the certificate.
     *
     * @example -----BEGIN CERTIFICATE-----\nxxx-----END CERTIFICATE-----\n
     *
     * @var string
     */
    public $httpsCrt;
    protected $_name = [
        'certExpireTime' => 'CertExpireTime',
        'certId'         => 'CertId',
        'certName'       => 'CertName',
        'certType'       => 'CertType',
        'createTime'     => 'CreateTime',
        'domainList'     => 'DomainList',
        'httpsCrt'       => 'HttpsCrt',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certExpireTime) {
            $res['CertExpireTime'] = $this->certExpireTime;
        }
        if (null !== $this->certId) {
            $res['CertId'] = $this->certId;
        }
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }
        if (null !== $this->certType) {
            $res['CertType'] = $this->certType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->domainList) {
            $res['DomainList'] = $this->domainList;
        }
        if (null !== $this->httpsCrt) {
            $res['HttpsCrt'] = $this->httpsCrt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return certInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertExpireTime'])) {
            $model->certExpireTime = $map['CertExpireTime'];
        }
        if (isset($map['CertId'])) {
            $model->certId = $map['CertId'];
        }
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }
        if (isset($map['CertType'])) {
            $model->certType = $map['CertType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DomainList'])) {
            $model->domainList = $map['DomainList'];
        }
        if (isset($map['HttpsCrt'])) {
            $model->httpsCrt = $map['HttpsCrt'];
        }

        return $model;
    }
}
