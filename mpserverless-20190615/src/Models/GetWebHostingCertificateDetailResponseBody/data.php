<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\GetWebHostingCertificateDetailResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example www.example.com
     *
     * @var string
     */
    public $certDomainName;

    /**
     * @example 1621252800000
     *
     * @var int
     */
    public $certExpiredTime;

    /**
     * @example 1 years
     *
     * @var string
     */
    public $certLife;

    /**
     * @example test
     *
     * @var string
     */
    public $certName;

    /**
     * @example upload
     *
     * @var string
     */
    public $certType;

    /**
     * @example on
     *
     * @var string
     */
    public $serverCertificateStatus;
    protected $_name = [
        'certDomainName'          => 'CertDomainName',
        'certExpiredTime'         => 'CertExpiredTime',
        'certLife'                => 'CertLife',
        'certName'                => 'CertName',
        'certType'                => 'CertType',
        'serverCertificateStatus' => 'ServerCertificateStatus',
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
        if (null !== $this->certExpiredTime) {
            $res['CertExpiredTime'] = $this->certExpiredTime;
        }
        if (null !== $this->certLife) {
            $res['CertLife'] = $this->certLife;
        }
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }
        if (null !== $this->certType) {
            $res['CertType'] = $this->certType;
        }
        if (null !== $this->serverCertificateStatus) {
            $res['ServerCertificateStatus'] = $this->serverCertificateStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertDomainName'])) {
            $model->certDomainName = $map['CertDomainName'];
        }
        if (isset($map['CertExpiredTime'])) {
            $model->certExpiredTime = $map['CertExpiredTime'];
        }
        if (isset($map['CertLife'])) {
            $model->certLife = $map['CertLife'];
        }
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }
        if (isset($map['CertType'])) {
            $model->certType = $map['CertType'];
        }
        if (isset($map['ServerCertificateStatus'])) {
            $model->serverCertificateStatus = $map['ServerCertificateStatus'];
        }

        return $model;
    }
}
