<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainCertificateInfoResponseBody\certInfos;

use AlibabaCloud\Tea\Model;

class certInfo extends Model
{
    /**
     * @description The certificate authority (CA) that issued the certificate.
     *
     * @example example.com
     *
     * @var string
     */
    public $certDomainName;

    /**
     * @description The status of HTTPS. Valid values:
     *
     *   **on**: enabled
     *   **off**: disabled
     *
     * @example 2018-06-03T22:03:39Z
     *
     * @var string
     */
    public $certExpireTime;

    /**
     * @description The type of the certificate. Valid values:
     *
     *   **free**: a free certificate
     *   **cas**: a certificate that is purchased from Alibaba Cloud SSL Certificates Service
     *   **upload**: a certificate that is uploaded by the user
     *
     * @example 9002448
     *
     * @var string
     */
    public $certId;

    /**
     * @description The public key of the certificate.
     *
     * @example 3 months
     *
     * @var string
     */
    public $certLife;

    /**
     * @description The accelerated domain name.
     *
     * @example cert-example.com
     *
     * @var string
     */
    public $certName;

    /**
     * @description >  The maximum number of times that each user can call this operation per second is 100.
     *
     * @example Let\"s Encrypt
     *
     * @var string
     */
    public $certOrg;

    /**
     * @description The expiration time of the certificate.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $certRegion;

    /**
     * @description The name of the certificate.
     *
     * @example cas
     *
     * @var string
     */
    public $certType;

    /**
     * @description The domain name that matches the certificate.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The domain name that matches the certificate.
     *
     * @example on
     *
     * @var string
     */
    public $SSLProtocol;

    /**
     * @description The type of the certificate. Valid values:
     *
     *   **free**: a free certificate
     *   **cas**: a certificate that is purchased from Alibaba Cloud SSL Certificates Service
     *   **upload**: a certificate that is uploaded by the user
     *
     * @example xxxx
     *
     * @var string
     */
    public $SSLPub;

    /**
     * @description The expiration time of the certificate.
     *
     * @example success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'certDomainName' => 'CertDomainName',
        'certExpireTime' => 'CertExpireTime',
        'certId'         => 'CertId',
        'certLife'       => 'CertLife',
        'certName'       => 'CertName',
        'certOrg'        => 'CertOrg',
        'certRegion'     => 'CertRegion',
        'certType'       => 'CertType',
        'domainName'     => 'DomainName',
        'SSLProtocol'    => 'SSLProtocol',
        'SSLPub'         => 'SSLPub',
        'status'         => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certDomainName) {
            $res['CertDomainName'] = $this->certDomainName;
        }
        if (null !== $this->certExpireTime) {
            $res['CertExpireTime'] = $this->certExpireTime;
        }
        if (null !== $this->certId) {
            $res['CertId'] = $this->certId;
        }
        if (null !== $this->certLife) {
            $res['CertLife'] = $this->certLife;
        }
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }
        if (null !== $this->certOrg) {
            $res['CertOrg'] = $this->certOrg;
        }
        if (null !== $this->certRegion) {
            $res['CertRegion'] = $this->certRegion;
        }
        if (null !== $this->certType) {
            $res['CertType'] = $this->certType;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->SSLProtocol) {
            $res['SSLProtocol'] = $this->SSLProtocol;
        }
        if (null !== $this->SSLPub) {
            $res['SSLPub'] = $this->SSLPub;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CertDomainName'])) {
            $model->certDomainName = $map['CertDomainName'];
        }
        if (isset($map['CertExpireTime'])) {
            $model->certExpireTime = $map['CertExpireTime'];
        }
        if (isset($map['CertId'])) {
            $model->certId = $map['CertId'];
        }
        if (isset($map['CertLife'])) {
            $model->certLife = $map['CertLife'];
        }
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }
        if (isset($map['CertOrg'])) {
            $model->certOrg = $map['CertOrg'];
        }
        if (isset($map['CertRegion'])) {
            $model->certRegion = $map['CertRegion'];
        }
        if (isset($map['CertType'])) {
            $model->certType = $map['CertType'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['SSLProtocol'])) {
            $model->SSLProtocol = $map['SSLProtocol'];
        }
        if (isset($map['SSLPub'])) {
            $model->SSLPub = $map['SSLPub'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
