<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models\DescribeClientCertificateResponseBody;

use AlibabaCloud\Tea\Model;

class certificate extends Model
{
    /**
     * @description The expiration date of the certificate. This value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1665819958000
     *
     * @var int
     */
    public $afterDate;

    /**
     * @description The type of the encryption algorithm of the certificate. Valid values:
     *
     *   **RSA**: the Rivest-Shamir-Adleman (RSA) algorithm.
     *   **ECC**: the elliptic curve cryptography (ECC) algorithm.
     *   **SM2**: the SM2 algorithm, which is developed and approved by the State Cryptography Administration of China.
     *
     * @example RSA
     *
     * @var string
     */
    public $algorithm;

    /**
     * @description The issuance date of the certificate. This value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1634283958000
     *
     * @var int
     */
    public $beforeDate;

    /**
     * @description The type of the certificate. Valid values:
     *
     *   **CLIENT**: client certificate
     *   **SERVER**: server certificate
     *
     * @example SERVER
     *
     * @var string
     */
    public $certificateType;

    /**
     * @description The common name of the certificate.
     *
     * @example aliyun.com
     *
     * @var string
     */
    public $commonName;

    /**
     * @description The code of the country in which the organization is located. The organization is associated with the intermediate certificate from which the certificate is issued.
     *
     * For more information about country codes, see the **"Country codes"** section of the [Manage company profiles](~~198289~~) topic.
     * @example CN
     *
     * @var string
     */
    public $countryCode;

    /**
     * @description The validity period of the certificate. Unit: days.
     *
     * @example 365
     *
     * @var int
     */
    public $days;

    /**
     * @description The unique identifier of the certificate.
     *
     * @example d3b95700998e47afc4d95f886579****
     *
     * @var string
     */
    public $identifier;

    /**
     * @description The key length of the certificate.
     *
     * @example 4096
     *
     * @var int
     */
    public $keySize;

    /**
     * @description The name of the city in which the organization is located. The organization is associated with the intermediate certificate from which the certificate is issued.
     *
     * @example Hangzhou
     *
     * @var string
     */
    public $locality;

    /**
     * @description The MD5 fingerprint of the certificate.
     *
     * @example d3b95700998e47afc4d95f886579****
     *
     * @var string
     */
    public $md5;

    /**
     * @description The name of the organization. The organization is associated with the intermediate certificate from which the certificate is issued.
     *
     * @example Alibaba Cloud Computing Co., Ltd.
     *
     * @var string
     */
    public $organization;

    /**
     * @description The name of the department in the organization. The organization is associated with the intermediate certificate authority (CA) certificate from which the certificate is issued.
     *
     * @example Security
     *
     * @var string
     */
    public $organizationUnit;

    /**
     * @description The unique identifier of the intermediate certificate from which the client certificate is issued.
     *
     * @example 160ae6bb538d538c70c01f81dcf2****
     *
     * @var string
     */
    public $parentIdentifier;

    /**
     * @description The subject alternative name (SAN) extension of the certificate. The value indicates additional information, including the additional domain names or IP addresses that are associated with the certificate.
     *
     * The value is a string that consists of JSON arrays. Each element in a JSON array is a JSON struct that corresponds to a SAN extension. A SAN extension struct contains the following parameters:
     *
     *   **Type**: the type of the extension. Data type: integer. Valid values:
     *
     *   **1**: an email address
     *   **2**: a domain name
     *   **6**: a Uniform Resource Identifier (URI)
     *   **7**: an IP address
     *
     *   **Value**: the value of the extension. Data type: string.
     *
     * @example [ {"Type": 7, "Value": "192.0.XX.XX"}, {"Type": 2, "Value": "www.aliyundoc.com"}, ]
     *
     * @var string
     */
    public $sans;

    /**
     * @description The serial number of the certificate.
     *
     * @example 62b2b943a32d96883a6650e672ea0276****
     *
     * @var string
     */
    public $serialNumber;

    /**
     * @description The SHA-256 fingerprint of the certificate.
     *
     * @example 14dcc8afc7578e1fcec36d658f7e20de18f6957bbac42b373a66bc9de4e9****
     *
     * @var string
     */
    public $sha2;

    /**
     * @description The signature algorithm of the certificate.
     *
     * @example SHA256WITHRSA
     *
     * @var string
     */
    public $signAlgorithm;

    /**
     * @description The name of the province, municipality, or autonomous region in which the organization is located. The organization is associated with the intermediate certificate from which the certificate is issued.
     *
     * @example Zhejiang
     *
     * @var string
     */
    public $state;

    /**
     * @description The status of the certificate. Valid values:
     *
     *   **ISSUE**: issued
     *   **REVOKE**: revoked
     *
     * @example ISSUE
     *
     * @var string
     */
    public $status;

    /**
     * @description The distinguished name (DN) extension of the certificate, which indicates the user of the certificate. The DN extension includes the following information:
     *
     *   **C**: the country
     *   **O**: the organization
     *   **OU**: the department
     *   **L**: the city
     *   **ST**: the province, municipality, or autonomous region
     *   **CN**: the common name
     *
     * @example C=CN,O=Alibaba Cloud Computing Co., Ltd.,OU=Security,L=Hangzhou,ST=Zhejiang,CN=Aliyun
     *
     * @var string
     */
    public $subjectDN;

    /**
     * @description The content of the certificate.
     *
     * @example -----BEGIN CERTIFICATE-----  ...... -----END CERTIFICATE-----
     *
     * @var string
     */
    public $x509Certificate;
    protected $_name = [
        'afterDate'        => 'AfterDate',
        'algorithm'        => 'Algorithm',
        'beforeDate'       => 'BeforeDate',
        'certificateType'  => 'CertificateType',
        'commonName'       => 'CommonName',
        'countryCode'      => 'CountryCode',
        'days'             => 'Days',
        'identifier'       => 'Identifier',
        'keySize'          => 'KeySize',
        'locality'         => 'Locality',
        'md5'              => 'Md5',
        'organization'     => 'Organization',
        'organizationUnit' => 'OrganizationUnit',
        'parentIdentifier' => 'ParentIdentifier',
        'sans'             => 'Sans',
        'serialNumber'     => 'SerialNumber',
        'sha2'             => 'Sha2',
        'signAlgorithm'    => 'SignAlgorithm',
        'state'            => 'State',
        'status'           => 'Status',
        'subjectDN'        => 'SubjectDN',
        'x509Certificate'  => 'X509Certificate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->afterDate) {
            $res['AfterDate'] = $this->afterDate;
        }
        if (null !== $this->algorithm) {
            $res['Algorithm'] = $this->algorithm;
        }
        if (null !== $this->beforeDate) {
            $res['BeforeDate'] = $this->beforeDate;
        }
        if (null !== $this->certificateType) {
            $res['CertificateType'] = $this->certificateType;
        }
        if (null !== $this->commonName) {
            $res['CommonName'] = $this->commonName;
        }
        if (null !== $this->countryCode) {
            $res['CountryCode'] = $this->countryCode;
        }
        if (null !== $this->days) {
            $res['Days'] = $this->days;
        }
        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }
        if (null !== $this->keySize) {
            $res['KeySize'] = $this->keySize;
        }
        if (null !== $this->locality) {
            $res['Locality'] = $this->locality;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
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
        if (null !== $this->sans) {
            $res['Sans'] = $this->sans;
        }
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->sha2) {
            $res['Sha2'] = $this->sha2;
        }
        if (null !== $this->signAlgorithm) {
            $res['SignAlgorithm'] = $this->signAlgorithm;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subjectDN) {
            $res['SubjectDN'] = $this->subjectDN;
        }
        if (null !== $this->x509Certificate) {
            $res['X509Certificate'] = $this->x509Certificate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return certificate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AfterDate'])) {
            $model->afterDate = $map['AfterDate'];
        }
        if (isset($map['Algorithm'])) {
            $model->algorithm = $map['Algorithm'];
        }
        if (isset($map['BeforeDate'])) {
            $model->beforeDate = $map['BeforeDate'];
        }
        if (isset($map['CertificateType'])) {
            $model->certificateType = $map['CertificateType'];
        }
        if (isset($map['CommonName'])) {
            $model->commonName = $map['CommonName'];
        }
        if (isset($map['CountryCode'])) {
            $model->countryCode = $map['CountryCode'];
        }
        if (isset($map['Days'])) {
            $model->days = $map['Days'];
        }
        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }
        if (isset($map['KeySize'])) {
            $model->keySize = $map['KeySize'];
        }
        if (isset($map['Locality'])) {
            $model->locality = $map['Locality'];
        }
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
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
        if (isset($map['Sans'])) {
            $model->sans = $map['Sans'];
        }
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['Sha2'])) {
            $model->sha2 = $map['Sha2'];
        }
        if (isset($map['SignAlgorithm'])) {
            $model->signAlgorithm = $map['SignAlgorithm'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubjectDN'])) {
            $model->subjectDN = $map['SubjectDN'];
        }
        if (isset($map['X509Certificate'])) {
            $model->x509Certificate = $map['X509Certificate'];
        }

        return $model;
    }
}
