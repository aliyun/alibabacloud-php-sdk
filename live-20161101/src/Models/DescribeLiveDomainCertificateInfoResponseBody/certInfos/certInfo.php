<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainCertificateInfoResponseBody\certInfos;

use AlibabaCloud\Tea\Model;

class certInfo extends Model
{
    /**
     * @description The streaming domain or ingest domain that matches the certificate.
     *
     * @example example.com
     *
     * @var string
     */
    public $certDomainName;

    /**
     * @description The expiration time of the certificate. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2018-06-03T22:03:39Z
     *
     * @var string
     */
    public $certExpireTime;

    /**
     * @description The validity period of the certificate.
     *
     *   If the validity period is greater than 12 months, XX years XX months is displayed. For example, 2 years 3 months indicates that the validity period is 2 years and 3 months.
     *   If the validity period is less than 12 months, XX months is displayed. For example, 3 months indicates that the validity period is 3 months.
     *
     * @example 3 months
     *
     * @var string
     */
    public $certLife;

    /**
     * @description The name of the certificate.
     *
     * @example Cert-****
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
     * @description The type of the certificate. Valid values:
     *
     *   **free**: a free certificate (for testing)
     *   **cas**: a certificate that is purchased from Certificate Management Service
     *   **upload**: a custom certificate that you uploaded
     *
     * @example cas
     *
     * @var string
     */
    public $certType;

    /**
     * @description The streaming domain or ingest domain.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The status of HTTPS. Valid values:
     *
     *   **on**: HTTPS is enabled.
     *   **off**: HTTPS is disabled.
     *
     * @example on
     *
     * @var string
     */
    public $SSLProtocol;

    /**
     * @description The public key of the certificate.
     *
     * @example yourSSLPub
     *
     * @var string
     */
    public $SSLPub;

    /**
     * @description The status of the free certificate that is used for testing. Valid values:
     *
     *   **success**: The certificate is effective.
     *   **checking**: The system is checking whether the domain name is mapped to the CNAME that is assigned by ApsaraVideo Live.
     *   **cname_error**: The domain name is not mapped to the CNAME that is assigned by ApsaraVideo Live.
     *   **domain_invalid**: The domain name contains invalid characters.
     *   **unsupport_wildcard**: The domain name is a wildcard domain name, which is not supported.
     *   **applying**: The certificate is in the application progress.
     *   **failed**: The application for the certificate failed.
     *
     * >  The **Status** parameter is valid only if the certificate is a free certificate for testing. If the certificate is not a free certificate for testing, an empty value is returned.
     *
     * @example success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'certDomainName' => 'CertDomainName',
        'certExpireTime' => 'CertExpireTime',
        'certLife' => 'CertLife',
        'certName' => 'CertName',
        'certOrg' => 'CertOrg',
        'certType' => 'CertType',
        'domainName' => 'DomainName',
        'SSLProtocol' => 'SSLProtocol',
        'SSLPub' => 'SSLPub',
        'status' => 'Status',
    ];

    public function validate() {}

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
