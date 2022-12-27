<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnHttpsDomainListResponseBody\certInfos;

use AlibabaCloud\Tea\Model;

class certInfo extends Model
{
    /**
     * @description The Common Name on the SSL certificate.
     *
     * @example example.org
     *
     * @var string
     */
    public $certCommonName;

    /**
     * @description The time when the SSL certificate expires.
     *
     * @example 2018-12-26 14:45:09
     *
     * @var string
     */
    public $certExpireTime;

    /**
     * @description The name of the SSL certificate.
     *
     * @example test
     *
     * @var string
     */
    public $certName;

    /**
     * @description The time when the SSL certificate became effective.
     *
     * @example 2018-11-26 14:45:09
     *
     * @var string
     */
    public $certStartTime;

    /**
     * @description The status of the SSL certificate. Valid values:
     *
     *   **ok**: The SSL certificate is working as expected.
     *   **mismatch**: The SSL certificate does not match the specified domain name.
     *   **expired**: The SSL certificate has expired.
     *   **expire_soon**: The SSL certificate will expire soon.
     *
     * @example mismatch
     *
     * @var string
     */
    public $certStatus;

    /**
     * @description The type of the SSL certificate. Valid values:
     *
     *   **free**: a free SSL certificate.
     *   **cas**: an SSL certificate purchased from Alibaba Cloud SSL Certificates Service.
     *   **upload**: a user uploaded certificate.
     *
     * @example free
     *
     * @var string
     */
    public $certType;

    /**
     * @description The time when the certificate was renewed.
     *
     * @example 2019-01-08 18:33:16
     *
     * @var string
     */
    public $certUpdateTime;

    /**
     * @description The accelerated domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;
    protected $_name = [
        'certCommonName' => 'CertCommonName',
        'certExpireTime' => 'CertExpireTime',
        'certName'       => 'CertName',
        'certStartTime'  => 'CertStartTime',
        'certStatus'     => 'CertStatus',
        'certType'       => 'CertType',
        'certUpdateTime' => 'CertUpdateTime',
        'domainName'     => 'DomainName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certCommonName) {
            $res['CertCommonName'] = $this->certCommonName;
        }
        if (null !== $this->certExpireTime) {
            $res['CertExpireTime'] = $this->certExpireTime;
        }
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }
        if (null !== $this->certStartTime) {
            $res['CertStartTime'] = $this->certStartTime;
        }
        if (null !== $this->certStatus) {
            $res['CertStatus'] = $this->certStatus;
        }
        if (null !== $this->certType) {
            $res['CertType'] = $this->certType;
        }
        if (null !== $this->certUpdateTime) {
            $res['CertUpdateTime'] = $this->certUpdateTime;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
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
        if (isset($map['CertCommonName'])) {
            $model->certCommonName = $map['CertCommonName'];
        }
        if (isset($map['CertExpireTime'])) {
            $model->certExpireTime = $map['CertExpireTime'];
        }
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }
        if (isset($map['CertStartTime'])) {
            $model->certStartTime = $map['CertStartTime'];
        }
        if (isset($map['CertStatus'])) {
            $model->certStatus = $map['CertStatus'];
        }
        if (isset($map['CertType'])) {
            $model->certType = $map['CertType'];
        }
        if (isset($map['CertUpdateTime'])) {
            $model->certUpdateTime = $map['CertUpdateTime'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        return $model;
    }
}
