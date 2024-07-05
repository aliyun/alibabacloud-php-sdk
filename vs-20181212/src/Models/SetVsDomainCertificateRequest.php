<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class SetVsDomainCertificateRequest extends Model
{
    /**
     * @example Cert-77****7
     *
     * @var string
     */
    public $certName;

    /**
     * @example free
     *
     * @var string
     */
    public $certType;

    /**
     * @description This parameter is required.
     *
     * @example example.aliyundoc.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example 1
     *
     * @var string
     */
    public $forceSet;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @example cn-qingdao
     *
     * @var string
     */
    public $region;

    /**
     * @example xxxxxxx
     *
     * @var string
     */
    public $SSLPri;

    /**
     * @description This parameter is required.
     *
     * @example on
     *
     * @var string
     */
    public $SSLProtocol;

    /**
     * @example 328uiuii28****82dsada81
     *
     * @var string
     */
    public $SSLPub;
    protected $_name = [
        'certName'    => 'CertName',
        'certType'    => 'CertType',
        'domainName'  => 'DomainName',
        'forceSet'    => 'ForceSet',
        'ownerId'     => 'OwnerId',
        'region'      => 'Region',
        'SSLPri'      => 'SSLPri',
        'SSLProtocol' => 'SSLProtocol',
        'SSLPub'      => 'SSLPub',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }
        if (null !== $this->certType) {
            $res['CertType'] = $this->certType;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->forceSet) {
            $res['ForceSet'] = $this->forceSet;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->SSLPri) {
            $res['SSLPri'] = $this->SSLPri;
        }
        if (null !== $this->SSLProtocol) {
            $res['SSLProtocol'] = $this->SSLProtocol;
        }
        if (null !== $this->SSLPub) {
            $res['SSLPub'] = $this->SSLPub;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetVsDomainCertificateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }
        if (isset($map['CertType'])) {
            $model->certType = $map['CertType'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['ForceSet'])) {
            $model->forceSet = $map['ForceSet'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['SSLPri'])) {
            $model->SSLPri = $map['SSLPri'];
        }
        if (isset($map['SSLProtocol'])) {
            $model->SSLProtocol = $map['SSLProtocol'];
        }
        if (isset($map['SSLPub'])) {
            $model->SSLPub = $map['SSLPub'];
        }

        return $model;
    }
}
