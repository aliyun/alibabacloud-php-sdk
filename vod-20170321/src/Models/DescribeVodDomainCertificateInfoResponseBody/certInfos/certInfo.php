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
     * @example Let\"s Encrypt
     *
     * @var string
     */
    public $certOrg;

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
     * @description The accelerated domain name whose ICP filing status you want to update.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

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
        'certLife'                => 'CertLife',
        'certName'                => 'CertName',
        'certOrg'                 => 'CertOrg',
        'certType'                => 'CertType',
        'domainName'              => 'DomainName',
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
        if (null !== $this->certType) {
            $res['CertType'] = $this->certType;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
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
        if (isset($map['CertType'])) {
            $model->certType = $map['CertType'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
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
