<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnHttpsDomainListResponseBody\certInfos;

use AlibabaCloud\Tea\Model;

class certInfo extends Model
{
    /**
     * @var string
     */
    public $certCommonName;

    /**
     * @var string
     */
    public $certExpireTime;

    /**
     * @var string
     */
    public $certName;

    /**
     * @var string
     */
    public $certStartTime;

    /**
     * @var string
     */
    public $certStatus;

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
