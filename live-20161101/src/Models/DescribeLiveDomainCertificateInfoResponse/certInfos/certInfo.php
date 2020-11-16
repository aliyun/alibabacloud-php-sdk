<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainCertificateInfoResponse\certInfos;

use AlibabaCloud\Tea\Model;

class certInfo extends Model
{
    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $certName;

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
    public $certLife;

    /**
     * @var string
     */
    public $certOrg;

    /**
     * @var string
     */
    public $certType;

    /**
     * @var string
     */
    public $SSLProtocol;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $SSLPub;
    protected $_name = [
        'domainName'     => 'DomainName',
        'certName'       => 'CertName',
        'certDomainName' => 'CertDomainName',
        'certExpireTime' => 'CertExpireTime',
        'certLife'       => 'CertLife',
        'certOrg'        => 'CertOrg',
        'certType'       => 'CertType',
        'SSLProtocol'    => 'SSLProtocol',
        'status'         => 'Status',
        'SSLPub'         => 'SSLPub',
    ];

    public function validate()
    {
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('certName', $this->certName, true);
        Model::validateRequired('certDomainName', $this->certDomainName, true);
        Model::validateRequired('certExpireTime', $this->certExpireTime, true);
        Model::validateRequired('certLife', $this->certLife, true);
        Model::validateRequired('certOrg', $this->certOrg, true);
        Model::validateRequired('certType', $this->certType, true);
        Model::validateRequired('SSLProtocol', $this->SSLProtocol, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('SSLPub', $this->SSLPub, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }
        if (null !== $this->certDomainName) {
            $res['CertDomainName'] = $this->certDomainName;
        }
        if (null !== $this->certExpireTime) {
            $res['CertExpireTime'] = $this->certExpireTime;
        }
        if (null !== $this->certLife) {
            $res['CertLife'] = $this->certLife;
        }
        if (null !== $this->certOrg) {
            $res['CertOrg'] = $this->certOrg;
        }
        if (null !== $this->certType) {
            $res['CertType'] = $this->certType;
        }
        if (null !== $this->SSLProtocol) {
            $res['SSLProtocol'] = $this->SSLProtocol;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->SSLPub) {
            $res['SSLPub'] = $this->SSLPub;
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
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }
        if (isset($map['CertDomainName'])) {
            $model->certDomainName = $map['CertDomainName'];
        }
        if (isset($map['CertExpireTime'])) {
            $model->certExpireTime = $map['CertExpireTime'];
        }
        if (isset($map['CertLife'])) {
            $model->certLife = $map['CertLife'];
        }
        if (isset($map['CertOrg'])) {
            $model->certOrg = $map['CertOrg'];
        }
        if (isset($map['CertType'])) {
            $model->certType = $map['CertType'];
        }
        if (isset($map['SSLProtocol'])) {
            $model->SSLProtocol = $map['SSLProtocol'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SSLPub'])) {
            $model->SSLPub = $map['SSLPub'];
        }

        return $model;
    }
}
