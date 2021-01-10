<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\GetWebHostingCertificateDetailResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $certLife;

    /**
     * @var string
     */
    public $certType;

    /**
     * @var string
     */
    public $certDomainName;

    /**
     * @var string
     */
    public $serverCertificateStatus;

    /**
     * @var string
     */
    public $certName;

    /**
     * @var int
     */
    public $certExpiredTime;
    protected $_name = [
        'certLife'                => 'CertLife',
        'certType'                => 'CertType',
        'certDomainName'          => 'CertDomainName',
        'serverCertificateStatus' => 'ServerCertificateStatus',
        'certName'                => 'CertName',
        'certExpiredTime'         => 'CertExpiredTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certLife) {
            $res['CertLife'] = $this->certLife;
        }
        if (null !== $this->certType) {
            $res['CertType'] = $this->certType;
        }
        if (null !== $this->certDomainName) {
            $res['CertDomainName'] = $this->certDomainName;
        }
        if (null !== $this->serverCertificateStatus) {
            $res['ServerCertificateStatus'] = $this->serverCertificateStatus;
        }
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }
        if (null !== $this->certExpiredTime) {
            $res['CertExpiredTime'] = $this->certExpiredTime;
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
        if (isset($map['CertLife'])) {
            $model->certLife = $map['CertLife'];
        }
        if (isset($map['CertType'])) {
            $model->certType = $map['CertType'];
        }
        if (isset($map['CertDomainName'])) {
            $model->certDomainName = $map['CertDomainName'];
        }
        if (isset($map['ServerCertificateStatus'])) {
            $model->serverCertificateStatus = $map['ServerCertificateStatus'];
        }
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }
        if (isset($map['CertExpiredTime'])) {
            $model->certExpiredTime = $map['CertExpiredTime'];
        }

        return $model;
    }
}
