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
     * @description The time when the certificate expires. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2018-06-03T13:03:39Z
     *
     * @var string
     */
    public $certExpireTime;

    /**
     * @description The validity period of the certificate. Unit: month or year.
     *
     * @example 3 months
     *
     * @var string
     */
    public $certLife;

    /**
     * @description The name of the certificate.
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
     *   **cas**: a certificate that is purchased from Alibaba Cloud SSL Certificates Service.
     *   **upload**: a user-uploaded certificate.
     *
     * @example free
     *
     * @var string
     */
    public $certType;

    /**
     * @description The domain name for CDN.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The status of the server certificate.
     *
     *   **success**: indicates that the certificate has taken effect.
     *   **checking**: indicates that the system is checking whether the domain name has been added to ApsaraVideo VOD.
     *   **cname_error**: indicates that the domain name has not been added to ApsaraVideo VOD.
     *   **domain_invalid**: indicates that the domain name contains invalid characters.
     *   **unsupport_wildcard**: indicates that wildcard domain names are not supported.
     *   **applying**: indicates that the certificate is in the application process.
     *   **failed**: indicates that the request of applying for the certificate has failed.
     *
     * @example checking
     *
     * @var string
     */
    public $serverCertificateStatus;

    /**
     * @description The status of the certificate.
     *
     *   **success**: indicates that the certificate has taken effect.
     *   **checking**: indicates that the system is checking whether the domain name has been added to ApsaraVideo VOD.
     *   **cname_error**: indicates that the domain name has not been added to ApsaraVideo VOD.
     *   **domain_invalid**: indicates that the domain name contains invalid characters.
     *   **unsupport_wildcard**: indicates that wildcard domain names are not supported.
     *   **applying**: indicates that the certificate is in the application process.
     *   **failed**: indicates that the request of applying for the certificate has failed.
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
