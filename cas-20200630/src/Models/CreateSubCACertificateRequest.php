<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models;

use AlibabaCloud\Tea\Model;

class CreateSubCACertificateRequest extends Model
{
    /**
     * @description The type of the key algorithm of the intermediate CA. The key algorithm is in the `<Encryption algorithm>_<Key length>` format. Valid values:
     *
     *   **RSA\_1024**: The signature algorithm is Sha256WithRSA.
     *   **RSA\_2048**: The signature algorithm is Sha256WithRSA.
     *   **RSA\_4096**: The signature algorithm is Sha256WithRSA.
     *   **ECC\_256**: The signature algorithm is Sha256WithECDSA.
     *   **SM2\_256**: The signature algorithm is SM3WithSM2.
     *
     * The encryption algorithm of an intermediate CA certificate must be consistent with the encryption algorithm of a root CA certificate. The length of the keys can be different. For example, if the key algorithm of the root CA certificate is **RSA\_2048**, the key algorithm of the intermediate CA certificate must be **RSA\_1024**, **RSA\_2048**, or **RSA\_4096**.
     *
     * >  You can call the [DescribeCACertificate](~~328096~~) operation to query the key algorithm of a root CA certificate.
     * @example RSA_2048
     *
     * @var string
     */
    public $algorithm;

    /**
     * @description The common name or abbreviation of the organization. The value can contain letters.
     *
     * @example Aliyun
     *
     * @var string
     */
    public $commonName;

    /**
     * @description The code of the country or region in which the organization is located. You can enter an alpha-2 or alpha-3 code. For example, you can use **CN** to indicate China and use **US** to indicate the United States.
     *
     * For more information about country codes, see the **"Country codes"** section of the [Manage company profiles](~~198289~~) topic.
     * @example CN
     *
     * @var string
     */
    public $countryCode;

    /**
     * @description The name of the city in which the organization is located. The value can contain letters.
     *
     * @example Hangzhou
     *
     * @var string
     */
    public $locality;

    /**
     * @description The name of the organization that is associated with the intermediate CA certificate. You can enter the name of your enterprise or company. The value can contain letters.
     *
     * @example Alibaba Cloud Computing Co., Ltd.
     *
     * @var string
     */
    public $organization;

    /**
     * @description The name of the department or branch in the organization. The value can contain letters.
     *
     * @example Security
     *
     * @var string
     */
    public $organizationUnit;

    /**
     * @description The unique identifier of the root CA certificate.
     *
     * >  You can call the [DescribeCACertificateList](~~328095~~) operation to query the unique identifiers of all CA certificates.
     * @example 1a83bcbb89e562885e40aa0108f5****
     *
     * @var string
     */
    public $parentIdentifier;

    /**
     * @description The name of the province, municipality, or autonomous region in which the organization is located. The value can contain letters.
     *
     * @example Zhejiang
     *
     * @var string
     */
    public $state;

    /**
     * @description The validity period of the intermediate CA certificate. Unit: years.
     *
     * >  The validity period of the intermediate CA certificate cannot exceed the validity period of the root CA certificate. You can call the [DescribeCACertificate](~~328095~~) operation to query the validity period of a root CA certificate.
     * @example 5
     *
     * @var int
     */
    public $years;
    protected $_name = [
        'algorithm'        => 'Algorithm',
        'commonName'       => 'CommonName',
        'countryCode'      => 'CountryCode',
        'locality'         => 'Locality',
        'organization'     => 'Organization',
        'organizationUnit' => 'OrganizationUnit',
        'parentIdentifier' => 'ParentIdentifier',
        'state'            => 'State',
        'years'            => 'Years',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithm) {
            $res['Algorithm'] = $this->algorithm;
        }
        if (null !== $this->commonName) {
            $res['CommonName'] = $this->commonName;
        }
        if (null !== $this->countryCode) {
            $res['CountryCode'] = $this->countryCode;
        }
        if (null !== $this->locality) {
            $res['Locality'] = $this->locality;
        }
        if (null !== $this->organization) {
            $res['Organization'] = $this->organization;
        }
        if (null !== $this->organizationUnit) {
            $res['OrganizationUnit'] = $this->organizationUnit;
        }
        if (null !== $this->parentIdentifier) {
            $res['ParentIdentifier'] = $this->parentIdentifier;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->years) {
            $res['Years'] = $this->years;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSubCACertificateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Algorithm'])) {
            $model->algorithm = $map['Algorithm'];
        }
        if (isset($map['CommonName'])) {
            $model->commonName = $map['CommonName'];
        }
        if (isset($map['CountryCode'])) {
            $model->countryCode = $map['CountryCode'];
        }
        if (isset($map['Locality'])) {
            $model->locality = $map['Locality'];
        }
        if (isset($map['Organization'])) {
            $model->organization = $map['Organization'];
        }
        if (isset($map['OrganizationUnit'])) {
            $model->organizationUnit = $map['OrganizationUnit'];
        }
        if (isset($map['ParentIdentifier'])) {
            $model->parentIdentifier = $map['ParentIdentifier'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Years'])) {
            $model->years = $map['Years'];
        }

        return $model;
    }
}
