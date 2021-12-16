<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainByCertificateResponseBody\certInfos;

use AlibabaCloud\Tea\Model;

class certInfo extends Model
{
    /**
     * @var string
     */
    public $certCaIsLegacy;

    /**
     * @var string
     */
    public $certExpireTime;

    /**
     * @var string
     */
    public $certExpired;

    /**
     * @var string
     */
    public $certStartTime;

    /**
     * @var string
     */
    public $certSubjectCommonName;

    /**
     * @var string
     */
    public $certType;

    /**
     * @var string
     */
    public $domainList;

    /**
     * @var string
     */
    public $domainNames;

    /**
     * @var string
     */
    public $issuer;
    protected $_name = [
        'certCaIsLegacy'        => 'CertCaIsLegacy',
        'certExpireTime'        => 'CertExpireTime',
        'certExpired'           => 'CertExpired',
        'certStartTime'         => 'CertStartTime',
        'certSubjectCommonName' => 'CertSubjectCommonName',
        'certType'              => 'CertType',
        'domainList'            => 'DomainList',
        'domainNames'           => 'DomainNames',
        'issuer'                => 'Issuer',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certCaIsLegacy) {
            $res['CertCaIsLegacy'] = $this->certCaIsLegacy;
        }
        if (null !== $this->certExpireTime) {
            $res['CertExpireTime'] = $this->certExpireTime;
        }
        if (null !== $this->certExpired) {
            $res['CertExpired'] = $this->certExpired;
        }
        if (null !== $this->certStartTime) {
            $res['CertStartTime'] = $this->certStartTime;
        }
        if (null !== $this->certSubjectCommonName) {
            $res['CertSubjectCommonName'] = $this->certSubjectCommonName;
        }
        if (null !== $this->certType) {
            $res['CertType'] = $this->certType;
        }
        if (null !== $this->domainList) {
            $res['DomainList'] = $this->domainList;
        }
        if (null !== $this->domainNames) {
            $res['DomainNames'] = $this->domainNames;
        }
        if (null !== $this->issuer) {
            $res['Issuer'] = $this->issuer;
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
        if (isset($map['CertCaIsLegacy'])) {
            $model->certCaIsLegacy = $map['CertCaIsLegacy'];
        }
        if (isset($map['CertExpireTime'])) {
            $model->certExpireTime = $map['CertExpireTime'];
        }
        if (isset($map['CertExpired'])) {
            $model->certExpired = $map['CertExpired'];
        }
        if (isset($map['CertStartTime'])) {
            $model->certStartTime = $map['CertStartTime'];
        }
        if (isset($map['CertSubjectCommonName'])) {
            $model->certSubjectCommonName = $map['CertSubjectCommonName'];
        }
        if (isset($map['CertType'])) {
            $model->certType = $map['CertType'];
        }
        if (isset($map['DomainList'])) {
            $model->domainList = $map['DomainList'];
        }
        if (isset($map['DomainNames'])) {
            $model->domainNames = $map['DomainNames'];
        }
        if (isset($map['Issuer'])) {
            $model->issuer = $map['Issuer'];
        }

        return $model;
    }
}
