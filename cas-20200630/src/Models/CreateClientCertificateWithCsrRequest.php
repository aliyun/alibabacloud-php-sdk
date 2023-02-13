<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models;

use AlibabaCloud\Tea\Model;

class CreateClientCertificateWithCsrRequest extends Model
{
    /**
     * @description The expiration time of the client certificate. This value is a UNIX timestamp. Unit: seconds.
     *
     * >  The **BeforeTime** and **AfterTime** parameters must be both empty or both specified.
     * @example 1665819958
     *
     * @var int
     */
    public $afterTime;

    /**
     * @description The key algorithm of the client certificate. The key algorithm is in the `<Encryption algorithm>_<Key length>` format. Valid values:
     *
     *   **RSA\_1024**: The signature algorithm is Sha256WithRSA.
     *   **RSA\_2048**: The signature algorithm is Sha256WithRSA.
     *   **RSA\_4096**: The signature algorithm is Sha256WithRSA.
     *   **ECC\_256**: The signature algorithm is Sha256WithECDSA.
     *   **ECC\_384**: The signature algorithm is Sha256WithECDSA.
     *   **ECC\_512**: The signature algorithm is Sha256WithECDSA.
     *   **SM2\_256**: The signature algorithm is SM3WithSM2.
     *
     * >  You can call the [DescribeCACertificate](~~328096~~) operation to query the key algorithm of an intermediate CA certificate.
     * @example RSA_2048
     *
     * @var string
     */
    public $algorithm;

    /**
     * @description The issuance time of the client certificate. This value is a UNIX timestamp. The default value is the time when you call this operation. Unit: seconds.
     *
     * >  The **BeforeTime** and **AfterTime** parameters must be both empty or both specified.
     * @example 1634283958
     *
     * @var int
     */
    public $beforeTime;

    /**
     * @description The common name of the certificate. The value can contain letters.
     *
     * >  If you specify the **CsrPemString** parameter, the value of the **CommonName** parameter is determined by the **CsrPemString** parameter.
     * @example aliyundoc.com
     *
     * @var string
     */
    public $commonName;

    /**
     * @description The code of the country in which the organization is located, such as **CN** and **US**.
     *
     * @example CN
     *
     * @var string
     */
    public $country;

    /**
     * @description The content of the CSR file. You can generate a CSR file by using the OpenSSL tool or Keytool. For more information, see [How do I create a CSR file?](~~42218~~) You can also create a CSR file in the Certificate Management Service console. For more information, see [Create a CSR](~~313297~~).
     *
     * @example -----BEGIN CERTIFICATE REQUEST-----   ...... -----END CERTIFICATE REQUEST-----
     *
     * @var string
     */
    public $csr;

    /**
     * @description The content of the CSR file. You can generate a CSR file by using the OpenSSL tool or Keytool. For more information, see [How do I create a CSR file?](~~42218~~) You can also create a CSR file in the Certificate Management Service console. For more information, see [Create a CSR](~~313297~~).
     *
     * @example -----BEGIN CERTIFICATE REQUEST-----   ...... -----END CERTIFICATE REQUEST-----
     *
     * @var string
     */
    public $csr1;

    /**
     * @description The validity period of the client certificate. Unit: days. You must specify at least one of the **Days**, **BeforeTime**, and **AfterTime** parameters. The **BeforeTime** and **AfterTime** parameters must be both empty or both specified. The following list describes how to specify these parameters:
     *
     *   If you specify the **Days** parameter, you can specify both the **BeforeTime** and **AfterTime** parameters or leave them both empty.********
     *   If you do not specify the **Days** parameter, you must specify both the **BeforeTime** and **AfterTime** parameters.
     *
     * >
     *
     *   If you specify the **Days**, **BeforeTime**, and **AfterTime** parameters together, the validity period of the client certificate is determined by the value of the **Days** parameter.
     *
     *   The validity period of the client certificate cannot exceed the validity period of the intermediate CA certificate. You can call the [DescribeCACertificate](~~328096~~) operation to query the validity period of an intermediate CA certificate.
     *
     * @example 365
     *
     * @var int
     */
    public $days;

    /**
     * @description Specifies whether to return the certificate. Valid values:
     *
     *   **0**: does not return the certificate. This is the default value.
     *   **1**: returns the certificate.
     *   **2**: returns the certificate and the certificate chain of the certificate.
     *
     * @example 1
     *
     * @var int
     */
    public $immediately;

    /**
     * @description The name of the city in which the organization is located. The value can contain letters. The default value is the name of the city in which the organization is located. The organization is associated with the intermediate CA certificate from which the certificate is issued.
     *
     * @example Hangzhou
     *
     * @var string
     */
    public $locality;

    /**
     * @description The validity period of the client certificate. Unit: months.
     *
     * @example 12
     *
     * @var int
     */
    public $months;

    /**
     * @description The name of the organization. Default value: Alibaba Inc.
     *
     * @example Alibaba Cloud Computing Co., Ltd.
     *
     * @var string
     */
    public $organization;

    /**
     * @description The name of the department. Default value: Aliyun CDN.
     *
     * @example Security
     *
     * @var string
     */
    public $organizationUnit;

    /**
     * @description The unique identifier of the intermediate CA certificate from which the client certificate is issued.
     *
     * >  You can call the [DescribeCACertificateList](~~328095~~) operation to query the unique identifier of an intermediate CA certificate.
     * @example 270ae6bb538d538c70c01f81fg3****
     *
     * @var string
     */
    public $parentIdentifier;

    /**
     * @description The type of the Subject Alternative Name (SAN) extension that is supported by the client certificate. Valid values:
     *
     *   **1**: an email address
     *   **6**: a Uniform Resource Identifier (URI)
     *
     * @example 1
     *
     * @var int
     */
    public $sanType;

    /**
     * @description The content of the extension. You can specify multiple SAN extensions. If you want to specify multiple SAN extensions, separate them with commas (,).
     *
     * @example somebody@example.com
     *
     * @var string
     */
    public $sanValue;

    /**
     * @description The province, municipality, or autonomous region in which the organization is located. The value can contain letters. The default value is the name of the province, municipality, or autonomous region in which the organization is located. The organization is associated with the intermediate CA certificate from which the certificate is issued.
     *
     * @example Zhejiang
     *
     * @var string
     */
    public $state;

    /**
     * @description The validity period of the client certificate. Unit: years.
     *
     * @example 1
     *
     * @var int
     */
    public $years;
    protected $_name = [
        'afterTime'        => 'AfterTime',
        'algorithm'        => 'Algorithm',
        'beforeTime'       => 'BeforeTime',
        'commonName'       => 'CommonName',
        'country'          => 'Country',
        'csr'              => 'Csr',
        'csr1'             => 'Csr1',
        'days'             => 'Days',
        'immediately'      => 'Immediately',
        'locality'         => 'Locality',
        'months'           => 'Months',
        'organization'     => 'Organization',
        'organizationUnit' => 'OrganizationUnit',
        'parentIdentifier' => 'ParentIdentifier',
        'sanType'          => 'SanType',
        'sanValue'         => 'SanValue',
        'state'            => 'State',
        'years'            => 'Years',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->afterTime) {
            $res['AfterTime'] = $this->afterTime;
        }
        if (null !== $this->algorithm) {
            $res['Algorithm'] = $this->algorithm;
        }
        if (null !== $this->beforeTime) {
            $res['BeforeTime'] = $this->beforeTime;
        }
        if (null !== $this->commonName) {
            $res['CommonName'] = $this->commonName;
        }
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->csr) {
            $res['Csr'] = $this->csr;
        }
        if (null !== $this->csr1) {
            $res['Csr1'] = $this->csr1;
        }
        if (null !== $this->days) {
            $res['Days'] = $this->days;
        }
        if (null !== $this->immediately) {
            $res['Immediately'] = $this->immediately;
        }
        if (null !== $this->locality) {
            $res['Locality'] = $this->locality;
        }
        if (null !== $this->months) {
            $res['Months'] = $this->months;
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
        if (null !== $this->sanType) {
            $res['SanType'] = $this->sanType;
        }
        if (null !== $this->sanValue) {
            $res['SanValue'] = $this->sanValue;
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
     * @return CreateClientCertificateWithCsrRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AfterTime'])) {
            $model->afterTime = $map['AfterTime'];
        }
        if (isset($map['Algorithm'])) {
            $model->algorithm = $map['Algorithm'];
        }
        if (isset($map['BeforeTime'])) {
            $model->beforeTime = $map['BeforeTime'];
        }
        if (isset($map['CommonName'])) {
            $model->commonName = $map['CommonName'];
        }
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['Csr'])) {
            $model->csr = $map['Csr'];
        }
        if (isset($map['Csr1'])) {
            $model->csr1 = $map['Csr1'];
        }
        if (isset($map['Days'])) {
            $model->days = $map['Days'];
        }
        if (isset($map['Immediately'])) {
            $model->immediately = $map['Immediately'];
        }
        if (isset($map['Locality'])) {
            $model->locality = $map['Locality'];
        }
        if (isset($map['Months'])) {
            $model->months = $map['Months'];
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
        if (isset($map['SanType'])) {
            $model->sanType = $map['SanType'];
        }
        if (isset($map['SanValue'])) {
            $model->sanValue = $map['SanValue'];
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
