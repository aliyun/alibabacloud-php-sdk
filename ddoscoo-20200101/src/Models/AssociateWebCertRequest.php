<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class AssociateWebCertRequest extends Model
{
    /**
     * @description The public key of the certificate that you want to associate. This parameter must be used together with **CertName** and **Key**.
     *
     * > If you specify **CertName**, **Cert**, and **Key**, you do not need to specify **CertId**.
     * @example -----BEGIN CERTIFICATE----- 62EcYPWd2Oy1vs6MTXcJSfN9Z7rZ9fmxWr2BFN2XbahgnsSXM48ixZJ4krc+1M+j2kcubVpsE2cgHdj4v8H6jUz9Ji4mr7vMNS6dXv8PUkl/qoDeNGCNdyTS5NIL5ir+g92cL8IGOkjgvhlqt9vc65Cgb4mL+n5+DV9uOyTZTW/MojmlgfUekC2xiXa54nxJf17Y1TADGSbyJbsC0Q9nIrHsPl8YKkvRWvIAqYxXZ7wRwWWmv4TMxFhWRiNY7yZIo2ZUhl02SIDNggIEeg== -----END CERTIFICATE-----
     *
     * @var string
     */
    public $cert;

    /**
     * @description The ID of the certificate that you want to associate. If the certificate that you want to associate has been issued in Certificate Management Service, you can specify the certificate ID to associate the certificate.
     *
     * > If you specify the certificate ID, you do not need to specify a value for the **CertName**, **Cert**, and **Key** parameters.
     * @example 2404693
     *
     * @var int
     */
    public $certId;

    /**
     * @var string
     */
    public $certIdentifier;

    /**
     * @description The name of the certificate that you want to associate. This parameter must be used together with the **Cert** and **Key** parameters.
     *
     * > If you specify a value for the **CertName**, **Cert**, and **Key** parameters, you do not need to specify a value for the **CertId** parameter.
     * @example example-cert
     *
     * @var string
     */
    public $certName;

    /**
     * @var string
     */
    public $certRegion;

    /**
     * @description The domain name of the website.
     *
     * > A forwarding rule must be configured for the domain name. You can call the [DescribeDomains](~~91724~~) operation to query all domain names.
     * @example www.aliyun.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The private key of the certificate that you want to associate. This parameter must be used together with **CertName** and **Cert**.
     *
     * > If you specify **CertName**, **Cert**, and **Key**, you do not need to specify **CertId**.
     * @example -----BEGIN RSA PRIVATE KEY----- DADTPZoOHd9WtZ3UKHJTRgNQmioPQn2bqdKHop+B/dn/4VZL7Jt8zSDGM9sTMThLyvsmLQKBgQCr+ujntC1kN6pGBj2Fw2l/EA/W3rYEce2tyhjgmG7rZ+A/jVE9fld5sQra6ZdwBcQJaiygoIYoaMF2EjRwc0qwHaluq0C15f6ujSoHh2e+D5zdmkTg/3NKNjqNv6xA2gYpinVDzFdZ9Zujxvuh9o4Vqf0YF8bv5UK5G04RtKadOw== -----END RSA PRIVATE KEY-----
     *
     * @var string
     */
    public $key;

    /**
     * @description The ID of the resource group to which the instance belongs in Resource Management. This parameter is empty by default, which indicates that the instance belongs to the default resource group.
     *
     * @example default
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
     * @return AssociateWebCertRequest
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
