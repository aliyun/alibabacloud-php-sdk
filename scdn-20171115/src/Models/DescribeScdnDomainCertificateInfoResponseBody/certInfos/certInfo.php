<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainCertificateInfoResponseBody\certInfos;

use AlibabaCloud\Tea\Model;

class certInfo extends Model
{
    /**
     * @example example.com
     *
     * @var string
     */
    public $certDomainName;

    /**
     * @example 2018-06-03T22:03:39Z
     *
     * @var string
     */
    public $certExpireTime;

    /**
     * @example 3 months
     *
     * @var string
     */
    public $certLife;

    /**
     * @example example.com
     *
     * @var string
     */
    public $certName;

    /**
     * @example Let\"s Encrypt
     *
     * @var string
     */
    public $certOrg;

    /**
     * @example free
     *
     * @var string
     */
    public $certType;

    /**
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example on
     *
     * @var string
     */
    public $SSLProtocol;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $SSLPub;

    /**
     * @example success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'certDomainName' => 'CertDomainName',
        'certExpireTime' => 'CertExpireTime',
        'certLife'       => 'CertLife',
        'certName'       => 'CertName',
        'certOrg'        => 'CertOrg',
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
