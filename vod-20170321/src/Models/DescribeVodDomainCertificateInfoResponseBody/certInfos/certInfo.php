<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainCertificateInfoResponseBody\certInfos;

use AlibabaCloud\Tea\Model;

class certInfo extends Model
{
    /**
     * @description The domain name that matches the certificate.
     *
     * @example example.com
     *
     * @var string
     */
    public $certDomainName;

    /**
     * @description The time at which the certificate expires. The time is in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2018-06-03T13:03:39Z
     *
     * @var string
     */
    public $certExpireTime;

    /**
     * @description The ID of the certificate.
     *
     * @example 13227737-cn-hangzhou
     *
     * @var string
     */
    public $certId;

    /**
     * @description The validity period of the certificate. Unit: months or years.
     *
     * @example 3 months
     *
     * @var string
     */
    public $certLife;

    /**
     * @description The certificate name.
     *
     * @example cert-example.com
     *
     * @var string
     */
    public $certName;

    /**
     * @description The certificate authority (CA) that issued the certificate.
     *
     * @example Let\\"s Encrypt
     *
     * @var string
     */
    public $certOrg;

    /**
     * @description The region where the certificate is used.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $certRegion;

    /**
     * @description The time when the certificate became effective.
     *
     * @example 2023-04-26T20:23:38Z
     *
     * @var string
     */
    public $certStartTime;

    /**
     * @description The type of the certificate. Valid values:
     *
     *   **free**: a free certificate.
     *   **cas**: a certificate that is purchased from Certificate Management Service.
     *   **upload**: a user-uploaded certificate.
     *
     * @example free
     *
     * @var string
     */
    public $certType;

    /**
     * @description The time at which the certificate was updated.
     *
     * @example 2023-04-26T20:23:38Z
     *
     * @var string
     */
    public $certUpdateTime;

    /**
     * @description The CNAME status of the domain name.
     *
     *   **ok**: The domain name points to the CNAME assigned by Alibaba Cloud CDN.
     *   **cname_error**: An error occurred and the domain name cannot point to the CNAME.
     *   **op_domain_cname_error** : An error occurred to the CNAME of the top-level domain. The domain name cannot point to the CNAME.
     *   **unsupport_wildcard**: The wildcard domain name is not supported.
     *
     * @example ok
     *
     * @var string
     */
    public $domainCnameStatus;

    /**
     * @description The accelerated domain name whose ICP filing status you want to update.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The public key of the certificate.
     *
     * @example ****
     *
     * @var string
     */
    public $serverCertificate;

    /**
     * @description The status of the SSL certificate.
     *
     *   **on**
     *   **off**
     *
     * @example checking
     *
     * @var string
     */
    public $serverCertificateStatus;

    /**
     * @description The status of the certificate.
     *
     *   **success**: The certificate is in effect.
     *   **checking**: The system is checking whether the domain name is added to ApsaraVideo VOD.
     *   **cname_error**: The domain name is not added to ApsaraVideo VOD.
     *   **domain_invalid**: The domain name contains invalid characters.
     *   **unsupport_wildcard**: The domain name is a wildcard domain name. Wildcard domain names are not supported.
     *   **applying**: The certificate application is in progress.
     *   **failed**: The certificate application failed.
     *
     * >  A value is returned for this parameter only when you set `CertType` to `free`. Otherwise, an empty value is returned for this parameter.
     * @example success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'certDomainName'          => 'CertDomainName',
        'certExpireTime'          => 'CertExpireTime',
        'certId'                  => 'CertId',
        'certLife'                => 'CertLife',
        'certName'                => 'CertName',
        'certOrg'                 => 'CertOrg',
        'certRegion'              => 'CertRegion',
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
