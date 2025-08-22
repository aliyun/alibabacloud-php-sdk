<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainCertificateInfoResponseBody\certInfos;

use AlibabaCloud\Dara\Model;

class certInfo extends Model
{
    /**
     * @var string
     */
    public $certDomainName;

    /**
     * @var string
     */
    public $certExpireTime;

    /**
     * @var string
     */
    public $certId;

    /**
     * @var string
     */
    public $certLife;

    /**
     * @var string
     */
    public $certName;

    /**
     * @var string
     */
    public $certOrg;

    /**
     * @var string
     */
    public $certRegion;

    /**
     * @var string
     */
    public $certType;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $SSLProtocol;

    /**
     * @var string
     */
    public $SSLPub;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'certDomainName' => 'CertDomainName',
        'certExpireTime' => 'CertExpireTime',
        'certId' => 'CertId',
        'certLife' => 'CertLife',
        'certName' => 'CertName',
        'certOrg' => 'CertOrg',
        'certRegion' => 'CertRegion',
        'certType' => 'CertType',
        'domainName' => 'DomainName',
        'SSLProtocol' => 'SSLProtocol',
        'SSLPub' => 'SSLPub',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
