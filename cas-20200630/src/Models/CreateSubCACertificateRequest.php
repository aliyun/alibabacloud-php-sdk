<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models;

use AlibabaCloud\Tea\Model;

class CreateSubCACertificateRequest extends Model
{
    /**
     * @description The type of the key algorithm of the intermediate CA. The key algorithm is in the `<Encryption algorithm>_<Key length>` format. Valid values:
     *
     *   **RSA_1024**: The signature algorithm is Sha256WithRSA.
     *   **RSA_2048**: The signature algorithm is Sha256WithRSA.
     *   **RSA_4096**: The signature algorithm is Sha256WithRSA.
     *   **ECC_256**: The signature algorithm is Sha256WithECDSA.
     *   **SM2_256**: The signature algorithm is SM3WithSM2.
     *
     * The encryption algorithm of an intermediate CA certificate must be consistent with the encryption algorithm of a root CA certificate. The length of the keys can be different. For example, if the key algorithm of the root CA certificate is **RSA_2048**, the key algorithm of the intermediate CA certificate must be **RSA_1024**, **RSA_2048**, or **RSA_4096**.
     *
     * > You can call the [DescribeCACertificate](https://help.aliyun.com/document_detail/465954.html) operation to query the key algorithm of a root CA certificate.
     *
     * This parameter is required.
     *
     * @example RSA_2048
     *
     * @var string
     */
    public $algorithm;

    /**
     * @description The common name or abbreviation of the organization. The value can contain letters.
     *
     * This parameter is required.
     *
     * @example Aliyun
     *
     * @var string
     */
    public $commonName;

    /**
     * @description The code of the country or region in which the organization is located. You can enter an alpha-2 or alpha-3 code. For example, you can use **CN** to indicate China and use **US** to indicate the United States.
     *
     * For more information about country codes, see the **"Country codes"** section in [Manage company profiles](https://help.aliyun.com/document_detail/198289.html).
     *
     * @example CN
     *
     * @var string
     */
    public $countryCode;

    /**
     * @description CRL validity period: 1-365 days
     *
     * @example 30
     *
     * @var int
     */
    public $crlDay;

    /**
     * @description Enable Crl Service.
     *
     * - 0- No
     * - 1- Yes
     *
     * @example 1
     *
     * @var bool
     */
    public $enableCrl;

    /**
     * @description The extended key usages of the certificate.
     *
     * @var string[]
     */
    public $extendedKeyUsages;

    /**
     * @description The name of the city in which the organization is located. The value can contain letters.
     *
     * This parameter is required.
     *
     * @example Hangzhou
     *
     * @var string
     */
    public $locality;

    /**
     * @description The name of the organization that is associated with the intermediate CA certificate. You can enter the name of your enterprise or company. The value can contain letters.
     *
     * This parameter is required.
     *
     * @example Maizi Technology
     *
     * @var string
     */
    public $organization;

    /**
     * @description The name of the department or branch in the organization. The value can contain letters.
     *
     * This parameter is required.
     *
     * @example Security
     *
     * @var string
     */
    public $organizationUnit;

    /**
     * @description The unique identifier of the root CA certificate.
     *
     * > You can call the [DescribeCACertificateList] operation to query the unique identifiers of all CA certificates.
     *
     * This parameter is required.
     *
     * @example 1a83bcbb89e562885e40aa0108f5****
     *
     * @var string
     */
    public $parentIdentifier;

    /**
     * @description The path length constraint of the certificate. Default value: 0.
     *
     * @example 0
     *
     * @var int
     */
    public $pathLenConstraint;

    /**
     * @description The name of the province or state in which the organization is located. The value can contain letters.
     *
     * This parameter is required.
     *
     * @example Zhejiang
     *
     * @var string
     */
    public $state;

    /**
     * @description The validity period of the intermediate CA certificate. Unit: years.
     *
     * We recommend that you set this parameter to 5 to 10.
     *
     * > The validity period of the intermediate CA certificate cannot exceed the validity period of the root CA certificate. You can call the [DescribeCACertificate]operation to query the validity period of a root CA certificate.
     *
     * This parameter is required.
     *
     * @example 5
     *
     * @var int
     */
    public $years;
    protected $_name = [
        'algorithm' => 'Algorithm',
        'commonName' => 'CommonName',
        'countryCode' => 'CountryCode',
        'crlDay' => 'CrlDay',
        'enableCrl' => 'EnableCrl',
        'extendedKeyUsages' => 'ExtendedKeyUsages',
        'locality' => 'Locality',
        'organization' => 'Organization',
        'organizationUnit' => 'OrganizationUnit',
        'parentIdentifier' => 'ParentIdentifier',
        'pathLenConstraint' => 'PathLenConstraint',
        'state' => 'State',
        'years' => 'Years',
    ];

    public function validate() {}

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
        if (null !== $this->crlDay) {
            $res['CrlDay'] = $this->crlDay;
        }
        if (null !== $this->enableCrl) {
            $res['EnableCrl'] = $this->enableCrl;
        }
        if (null !== $this->extendedKeyUsages) {
            $res['ExtendedKeyUsages'] = $this->extendedKeyUsages;
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
        if (null !== $this->pathLenConstraint) {
            $res['PathLenConstraint'] = $this->pathLenConstraint;
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
        if (isset($map['CrlDay'])) {
            $model->crlDay = $map['CrlDay'];
        }
        if (isset($map['EnableCrl'])) {
            $model->enableCrl = $map['EnableCrl'];
        }
        if (isset($map['ExtendedKeyUsages'])) {
            if (!empty($map['ExtendedKeyUsages'])) {
                $model->extendedKeyUsages = $map['ExtendedKeyUsages'];
            }
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
        if (isset($map['PathLenConstraint'])) {
            $model->pathLenConstraint = $map['PathLenConstraint'];
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
