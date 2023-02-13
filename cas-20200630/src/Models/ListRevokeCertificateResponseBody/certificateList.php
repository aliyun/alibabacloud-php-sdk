<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models\ListRevokeCertificateResponseBody;

use AlibabaCloud\Tea\Model;

class certificateList extends Model
{
    /**
     * @description The expiration date of the certificate. The date is in the `yyyy-MM-ddT00:00Z` format. For example, the value `2021-12-31T00:00Z` indicates December 31, 2021.
     *
     * @example 2021-12-31T00:00Z
     *
     * @var string
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
     * @description The issuance date of the certificate. The date is in the `yyyy-MM-ddT00:00Z` format. For example, the value `2021-01-01T00:00Z` indicates January 1, 2021.
     *
     * @example 2021-01-01T00:00Z
     *
     * @var string
     */
    public $beforeDate;

    /**
     * @description The type of the certificate.
     *
     * @example SERVER
     *
     * @var string
     */
    public $certificateType;

    /**
     * @description The common name of the certificate.
     *
     * @example aliyundoc.com
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
     * @description The unique identifier of the certificate.
     *
     * @example 05e148d8d3ecc9976d9ecd2b2f25****
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
     * @example 05e148d8d3ecc9976d9ecd2b2f25****
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
     * @description The identifier of the root certificate.
     *
     * @example 160ae6bb538d538c70c01f81dcf2****
     *
     * @var string
     */
    public $parentIdentifier;

    /**
     * @description The date on which the certificate was revoked. The value is in the `yyyy-MM-ddT00:00Z` format. For example, the value `2021-09-01T00:00Z` indicates September 1, 2021.
     *
     * @example 2021-09-01T00:00Z
     *
     * @var string
     */
    public $revokeDate;

    /**
     * @description The subject alternative name (SAN) extension of the certificate.
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
     * @example 168b12c42e62339f8d2340ff530f9365****
     *
     * @var string
     */
    public $serialNumber;

    /**
     * @description The SHA-256 fingerprint of the certificate.
     *
     * @example b60eff7e04323ff662f9ab5e6986f849f626a9c7bf2c59dcc752fa23779a****
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
     * @description The status.
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
     * @example C=CN,O=Alibaba Cloud Computing Co., Ltd.,OU=Security,L=ZheJiang,ST=HangZhou,CN=aliyundoc.com
     *
     * @var string
     */
    public $subjectDN;
    protected $_name = [
        'afterDate'        => 'AfterDate',
        'algorithm'        => 'Algorithm',
        'beforeDate'       => 'BeforeDate',
        'certificateType'  => 'CertificateType',
        'commonName'       => 'CommonName',
        'countryCode'      => 'CountryCode',
        'identifier'       => 'Identifier',
        'keySize'          => 'KeySize',
        'locality'         => 'Locality',
        'md5'              => 'Md5',
        'organization'     => 'Organization',
        'organizationUnit' => 'OrganizationUnit',
        'parentIdentifier' => 'ParentIdentifier',
        'revokeDate'       => 'RevokeDate',
        'sans'             => 'Sans',
        'serialNumber'     => 'SerialNumber',
        'sha2'             => 'Sha2',
        'signAlgorithm'    => 'SignAlgorithm',
        'state'            => 'State',
        'status'           => 'Status',
        'subjectDN'        => 'SubjectDN',
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
        if (null !== $this->revokeDate) {
            $res['RevokeDate'] = $this->revokeDate;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return certificateList
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
        if (isset($map['RevokeDate'])) {
            $model->revokeDate = $map['RevokeDate'];
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

        return $model;
    }
}
