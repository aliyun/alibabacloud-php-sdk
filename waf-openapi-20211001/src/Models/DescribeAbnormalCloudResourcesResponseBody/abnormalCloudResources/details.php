<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeAbnormalCloudResourcesResponseBody\abnormalCloudResources;

use AlibabaCloud\Dara\Model;

class details extends Model
{
    /**
     * @var string
     */
    public $appliedType;

    /**
     * @var string
     */
    public $certName;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $commonName;

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
    public $productDomainExtension;
    protected $_name = [
        'appliedType' => 'AppliedType',
        'certName' => 'CertName',
        'code' => 'Code',
        'commonName' => 'CommonName',
        'expireTime' => 'ExpireTime',
        'productCertId' => 'ProductCertId',
        'productCertName' => 'ProductCertName',
        'productDomainExtension' => 'ProductDomainExtension',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appliedType) {
            $res['AppliedType'] = $this->appliedType;
        }

        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->commonName) {
            $res['CommonName'] = $this->commonName;
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

        if (null !== $this->productDomainExtension) {
            $res['ProductDomainExtension'] = $this->productDomainExtension;
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
        if (isset($map['AppliedType'])) {
            $model->appliedType = $map['AppliedType'];
        }

        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['CommonName'])) {
            $model->commonName = $map['CommonName'];
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

        if (isset($map['ProductDomainExtension'])) {
            $model->productDomainExtension = $map['ProductDomainExtension'];
        }

        return $model;
    }
}
