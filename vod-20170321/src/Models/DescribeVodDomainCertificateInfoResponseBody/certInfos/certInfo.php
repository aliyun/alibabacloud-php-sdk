<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainCertificateInfoResponseBody\certInfos;

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
    public $certStartTime;

    /**
     * @var string
     */
    public $certType;

    /**
     * @var string
     */
    public $certUpdateTime;

    /**
     * @var string
     */
    public $domainCnameStatus;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $serverCertificate;

    /**
     * @var string
     */
    public $serverCertificateStatus;

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
        'certStartTime' => 'CertStartTime',
        'certType' => 'CertType',
        'certUpdateTime' => 'CertUpdateTime',
        'domainCnameStatus' => 'DomainCnameStatus',
        'domainName' => 'DomainName',
        'serverCertificate' => 'ServerCertificate',
        'serverCertificateStatus' => 'ServerCertificateStatus',
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
