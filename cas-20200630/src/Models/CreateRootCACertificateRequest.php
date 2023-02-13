<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models;

use AlibabaCloud\Tea\Model;

class CreateRootCACertificateRequest extends Model
{
    /**
     * @description The key algorithm of the root CA certificate. The key algorithm is in the `<Encryption algorithm>_<Key length>` format. Valid values:
     *
     *   **RSA\_1024**: The signature algorithm is Sha256WithRSA.
     *   **RSA\_2048**: The signature algorithm is Sha256WithRSA.
     *   **RSA\_4096**: The signature algorithm is Sha256WithRSA.
     *   **ECC\_256**: The signature algorithm is Sha256WithECDSA.
     *   **ECC\_384**: The signature algorithm is Sha256WithECDSA.
     *   **ECC\_512**: The signature algorithm is Sha256WithECDSA.
     *   **SM2\_256**: The signature algorithm is SM3WithSM2.
     *
     * The encryption algorithm of the root CA certificate must be consistent with the **encryption algorithm** of the private root CA instance that you purchase. For example, if the **encryption algorithm** of the private root CA instance that you purchase is **RSA**, the key algorithm of the root CA certificate must be **RSA\_1024**, **RSA\_2048**, or **RSA\_4096**.
     * @example RSA_2048
     *
     * @var string
     */
    public $algorithm;

    /**
     * @description The common name or abbreviation of the organization. The value can contain letters.
     *
     * @example Alibaba
     *
     * @var string
     */
    public $commonName;

    /**
     * @description The code of the country or region in which the organization is located. You can enter an alpha-2 code. For example, you can use **CN** to indicate China and use **US** to indicate the United States.
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
     * @description The name of the organization that is associated with the root CA certificate. You can enter the name of your enterprise or company. The value can contain letters.
     *
     * @example Alibaba
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
     * @description The name of the province, municipality, or autonomous region in which the organization is located. The value can contain letters.
     *
     * @example Zhejiang
     *
     * @var string
     */
    public $state;

    /**
     * @description The validity period of the root CA certificate. Unit: years.
     *
     * >  We recommend that you set this parameter to a value from 5 to 10.
     * @example 10
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
     * @return CreateRootCACertificateRequest
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
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Years'])) {
            $model->years = $map['Years'];
        }

        return $model;
    }
}
