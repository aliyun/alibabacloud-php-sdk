<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCloudResourceAccessPortDetailsResponseBody\accessPortDetails;

use AlibabaCloud\Tea\Model;

class subStatusDetails extends Model
{
    /**
     * @var string
     */
    public $appliedType;

    /**
     * @var string
     */
    public $certId;

    /**
     * @var string
     */
    public $certName;

    /**
     * @var string
     */
    public $commonName;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var string
     */
    public $productCertId;

    /**
     * @var string
     */
    public $productCertName;

    /**
     * @var string
     */
    public $reasonCode;
    protected $_name = [
        'appliedType' => 'AppliedType',
        'certId' => 'CertId',
        'certName' => 'CertName',
        'commonName' => 'CommonName',
        'domain' => 'Domain',
        'expireTime' => 'ExpireTime',
        'productCertId' => 'ProductCertId',
        'productCertName' => 'ProductCertName',
        'reasonCode' => 'ReasonCode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appliedType) {
            $res['AppliedType'] = $this->appliedType;
        }
        if (null !== $this->certId) {
            $res['CertId'] = $this->certId;
        }
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }
        if (null !== $this->commonName) {
            $res['CommonName'] = $this->commonName;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->productCertId) {
            $res['ProductCertId'] = $this->productCertId;
        }
        if (null !== $this->productCertName) {
            $res['ProductCertName'] = $this->productCertName;
        }
        if (null !== $this->reasonCode) {
            $res['ReasonCode'] = $this->reasonCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subStatusDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppliedType'])) {
            $model->appliedType = $map['AppliedType'];
        }
        if (isset($map['CertId'])) {
            $model->certId = $map['CertId'];
        }
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }
        if (isset($map['CommonName'])) {
            $model->commonName = $map['CommonName'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['ProductCertId'])) {
            $model->productCertId = $map['ProductCertId'];
        }
        if (isset($map['ProductCertName'])) {
            $model->productCertName = $map['ProductCertName'];
        }
        if (isset($map['ReasonCode'])) {
            $model->reasonCode = $map['ReasonCode'];
        }

        return $model;
    }
}
