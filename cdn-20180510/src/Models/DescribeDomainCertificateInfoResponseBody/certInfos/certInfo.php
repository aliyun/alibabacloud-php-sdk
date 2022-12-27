<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainCertificateInfoResponseBody\certInfos;

use AlibabaCloud\Tea\Model;

class certInfo extends Model
{
    /**
     * @description The domain name that matches the SSL certificate.
     *
     * @example example.com
     *
     * @var string
     */
    public $certDomainName;

    /**
     * @description The time when the SSL certificate expires.
     *
     * @example 2018-06-03T22:03:39Z
     *
     * @var string
     */
    public $certExpireTime;

    /**
     * @description The unit of the validity period of the SSL certificate.
     *
     *   **months**: The validity period is measured in months.
     *   **years**: The validity period is measured in years.
     *
     * @example months
     *
     * @var string
     */
    public $certLife;

    /**
     * @description The name of the SSL certificate.
     *
     * @example example.com
     *
     * @var string
     */
    public $certName;

    /**
     * @description The name of the certificate authority (CA) that issued the SSL certificate.
     *
     * @example Let\"s Encrypt
     *
     * @var string
     */
    public $certOrg;

    /**
     * @description The time when the SSL certificate became effective.
     *
     * @example 2018-06-03T22:03:39Z
     *
     * @var string
     */
    public $certStartTime;

    /**
     * @description The type of the SSL certificate. Valid values:
     *
     *   **free**: a free SSL certificate.
     *   **cas**: an SSL certificate purchased from Alibaba Cloud SSL Certificates Service.
     *   **upload**: a user-uploaded SSL certificate.
     *
     * @example free
     *
     * @var string
     */
    public $certType;

    /**
     * @description The time when the certificate was renewed.
     *
     * @example 2018-06-03T22:03:39Z
     *
     * @var string
     */
    public $certUpdateTime;

    /**
     * @description The status of the CNAME of the domain name.
     *
     *   **ok**: The domain name points to the CNAME assigned from Alibaba Cloud Content Delivery Network (CDN).
     *   **cname_error**: An error occurred and the domain name cannot point to the CNAME.
     *   **top_domain_cname_error**: An error occurred to the CNAME of the top-level domain name. The domain name cannot point to the CNAME.
     *   **unsupport_wildcard**: Wildcard domain names are not supported.
     *
     * @example ok
     *
     * @var string
     */
    public $domainCnameStatus;

    /**
     * @description The accelerated domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The public key of the SSL certificate.
     *
     * @example asdadaxxxx
     *
     * @var string
     */
    public $serverCertificate;

    /**
     * @description The status of HTTPS.
     *
     *   **on**: enabled.
     *   **off**: disabled.
     *
     * @example on
     *
     * @var string
     */
    public $serverCertificateStatus;

    /**
     * @description The status of the SSL certificate.
     *
     *   **success**: The SSL certificate is effective.
     *   **checking**: The system is checking whether the domain name is accelerated by Alibaba Cloud CDN.
     *   **cname_error**: The domain name is not accelerated by Alibaba Cloud CDN.
     *   **top_domain_cname_error**: The top-level domain name is not an accelerated domain name.
     *   **domain_invalid**: The domain name contains invalid characters.
     *   **unsupport_wildcard**: Wildcard domain names are not supported.
     *   **applying**: The application for a certificate is in progress.
     *   **fget_token_timeout**: The application for a certificate timed out.
     *   **check_token_timeout**: The verification timed out.
     *   **get_cert_timeout**: The request to obtain the certificate timed out.
     *   **failed**: The application for a certificate failed.
     *
     * @example success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'certDomainName'          => 'CertDomainName',
        'certExpireTime'          => 'CertExpireTime',
        'certLife'                => 'CertLife',
        'certName'                => 'CertName',
        'certOrg'                 => 'CertOrg',
        'certStartTime'           => 'CertStartTime',
        'certType'                => 'CertType',
        'certUpdateTime'          => 'CertUpdateTime',
        'domainCnameStatus'       => 'DomainCnameStatus',
        'domainName'              => 'DomainName',
        'serverCertificate'       => 'ServerCertificate',
        'serverCertificateStatus' => 'ServerCertificateStatus',
        'status'                  => 'Status',
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
        if (null !== $this->certLife) {
            $res['CertLife'] = $this->certLife;
        }
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }
        if (null !== $this->certOrg) {
            $res['CertOrg'] = $this->certOrg;
        }
        if (null !== $this->certStartTime) {
            $res['CertStartTime'] = $this->certStartTime;
        }
        if (null !== $this->certType) {
            $res['CertType'] = $this->certType;
        }
        if (null !== $this->certUpdateTime) {
            $res['CertUpdateTime'] = $this->certUpdateTime;
        }
        if (null !== $this->domainCnameStatus) {
            $res['DomainCnameStatus'] = $this->domainCnameStatus;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->serverCertificate) {
            $res['ServerCertificate'] = $this->serverCertificate;
        }
        if (null !== $this->serverCertificateStatus) {
            $res['ServerCertificateStatus'] = $this->serverCertificateStatus;
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
        if (isset($map['CertLife'])) {
            $model->certLife = $map['CertLife'];
        }
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }
        if (isset($map['CertOrg'])) {
            $model->certOrg = $map['CertOrg'];
        }
        if (isset($map['CertStartTime'])) {
            $model->certStartTime = $map['CertStartTime'];
        }
        if (isset($map['CertType'])) {
            $model->certType = $map['CertType'];
        }
        if (isset($map['CertUpdateTime'])) {
            $model->certUpdateTime = $map['CertUpdateTime'];
        }
        if (isset($map['DomainCnameStatus'])) {
            $model->domainCnameStatus = $map['DomainCnameStatus'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['ServerCertificate'])) {
            $model->serverCertificate = $map['ServerCertificate'];
        }
        if (isset($map['ServerCertificateStatus'])) {
            $model->serverCertificateStatus = $map['ServerCertificateStatus'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
