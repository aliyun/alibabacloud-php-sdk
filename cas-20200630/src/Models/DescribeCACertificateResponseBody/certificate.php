<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models\DescribeCACertificateResponseBody;

use AlibabaCloud\Tea\Model;

class certificate extends Model
{
    /**
     * @description The expiration date of the CA certificate. This value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1665819958000
     *
     * @var int
     */
    public $afterDate;

    /**
     * @description The encryption algorithm of the CA certificate. Valid values:
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
     * @description The issuance date of the CA certificate. This value is a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1634283958000
     *
     * @var int
     */
    public $beforeDate;

    /**
     * @description CA certificate chain.
     *
     * @example -----BEGIN CERTIFICATE-----
     * 用户证书
     * -----END CERTIFICATE-----
     *
     * -----BEGIN CERTIFICATE-----
     * 中间证书
     * -----END CERTIFICATE-----
     *
     * -----BEGIN CERTIFICATE-----
     * 根证书
     * -----END CERTIFICATE-----
     *
     * @var string
     */
    public $caCertChain;

    /**
     * @description The number of certificates issued by private CA instances.
     *
     * @example 10
     *
     * @var int
     */
    public $certIssuedCount;

    /**
     * @description The remaining number of assignable certificate quotas.
     *
     * @example 30
     *
     * @var int
     */
    public $certRemainingCount;

    /**
     * @description The total number of purchased certificate quotas.
     *
     * @example 40
     *
     * @var int
     */
    public $certTotalCount;

    /**
     * @description The type of the CA certificate. Valid values:
     *
     *   **ROOT**: root CA certificate
     *   **SUB_ROOT**: intermediate CA certificate
     *
     * @example SUB_ROOT
     *
     * @var string
     */
    public $certificateType;

    /**
     * @description The common name or abbreviation of the organization that is associated with the CA certificate.
     *
     * @example Aliyun
     *
     * @var string
     */
    public $commonName;

    /**
     * @description The code of the country in which the organization is located.
     *
     * For more information about country codes, see the **"Country codes"** section of the [Manage company profiles](https://help.aliyun.com/document_detail/198289.html) topic.
     *
     * @example CN
     *
     * @var string
     */
    public $countryCode;

    /**
     * @description CRL validity period: 1-365 days.
     *
     * @example 90
     *
     * @var int
     */
    public $crlDay;

    /**
     * @description The status of the certificate revocation list (CRL) feature.
     *
     * @example ACTIVE
     *
     * @var string
     */
    public $crlStatus;

    /**
     * @description The address of the CRL.
     *
     * @example https://crl-cn-publish.oss-cn-hangzhou.aliyuncs.com/pca/crl/1925647866611395/1ed40789-483f-6023-b6b8-29ddd3bb0a9a.crl
     *
     * @var string
     */
    public $crlUrl;

    /**
     * @var string
     */
    public $fullAlgorithm;

    /**
     * @description The unique identifier of the CA certificate.
     *
     * @example 160ae6bb538d538c70c01f81dcf2****
     *
     * @var string
     */
    public $identifier;

    /**
     * @var string
     */
    public $issuerType;

    /**
     * @description The key length of the CA certificate.
     *
     * @example 2048
     *
     * @var int
     */
    public $keySize;

    /**
     * @description The name of the city in which the organization is located.
     *
     * @example Hangzhou
     *
     * @var string
     */
    public $locality;

    /**
     * @description The MD5 fingerprint of the CA certificate.
     *
     * @example 160ae6bb538d538c70c01f81dcf2****
     *
     * @var string
     */
    public $md5;

    /**
     * @description The name of the organization that is associated with the CA certificate.
     *
     * @example Alibaba Cloud Computing Co., Ltd.
     *
     * @var string
     */
    public $organization;

    /**
     * @description The name of the department or branch in the organization that is associated with the CA certificate.
     *
     * @example Security
     *
     * @var string
     */
    public $organizationUnit;

    /**
     * @description The unique identifier of the root CA certificate from which the CA certificate is issued.
     *
     * >  This parameter is returned only if the value of the **CertificateType** parameter is **SUB_ROOT**. The value SUB_ROOT indicates an intermediate CA certificate.
     *
     * @example 1a83bcbb89e562885e40aa0108f5****
     *
     * @var string
     */
    public $parentIdentifier;

    /**
     * @description This parameter is deprecated.
     *
     * @example 1
     *
     * @var string
     */
    public $sans;

    /**
     * @description The serial number of the CA certificate.
     *
     * @example 70e3b2566d92805173767869727fb92e****
     *
     * @var string
     */
    public $serialNumber;

    /**
     * @description The SHA-256 fingerprint of the CA certificate.
     *
     * @example 14dcc8afc7578e1fcec36d658f7e20de18f6957bbac42b373a66bc9de4e9****
     *
     * @var string
     */
    public $sha2;

    /**
     * @description The signature algorithm of the CA certificate.
     *
     * @example SHA256WITHRSA
     *
     * @var string
     */
    public $signAlgorithm;

    /**
     * @description The name of the province, municipality, or autonomous region in which the organization is located.
     *
     * @example Zhejiang
     *
     * @var string
     */
    public $state;

    /**
     * @description The status of the CA certificate. Valid values:
     *
     *   **ISSUE**: The CA certificate is issued.
     *   **REVOKE**: The CA certificate is revoked.
     *
     * @example ISSUE
     *
     * @var string
     */
    public $status;

    /**
     * @description The user attribute of the CA certificate, which contains the following information:
     *
     *   **C**: the country code in which the organization is located
     *   **O**: the name of the organization
     *   **OU**: the name of the department or branch in the organization
     *   **L**: the name of the city in which the organization is located
     *   **ST**: the name of the province, municipality, or autonomous region in which the organization is located
     *   **CN**: the common name or abbreviation of the organization
     *
     * @example C=CN,O=Alibaba Cloud Computing Co., Ltd.,OU=Security,L=Hangzhou,ST=Zhejiang,CN=Aliyun
     *
     * @var string
     */
    public $subjectDN;

    /**
     * @description The content of the CA certificate.
     *
     * @example -----BEGIN CERTIFICATE----- …… -----END CERTIFICATE-----
     *
     * @var string
     */
    public $x509Certificate;

    /**
     * @var int
     */
    public $years;
    protected $_name = [
        'afterDate' => 'AfterDate',
        'algorithm' => 'Algorithm',
        'beforeDate' => 'BeforeDate',
        'caCertChain' => 'CaCertChain',
        'certIssuedCount' => 'CertIssuedCount',
        'certRemainingCount' => 'CertRemainingCount',
        'certTotalCount' => 'CertTotalCount',
        'certificateType' => 'CertificateType',
        'commonName' => 'CommonName',
        'countryCode' => 'CountryCode',
        'crlDay' => 'CrlDay',
        'crlStatus' => 'CrlStatus',
        'crlUrl' => 'CrlUrl',
        'fullAlgorithm' => 'FullAlgorithm',
        'identifier' => 'Identifier',
        'issuerType' => 'IssuerType',
        'keySize' => 'KeySize',
        'locality' => 'Locality',
        'md5' => 'Md5',
        'organization' => 'Organization',
        'organizationUnit' => 'OrganizationUnit',
        'parentIdentifier' => 'ParentIdentifier',
        'sans' => 'Sans',
        'serialNumber' => 'SerialNumber',
        'sha2' => 'Sha2',
        'signAlgorithm' => 'SignAlgorithm',
        'state' => 'State',
        'status' => 'Status',
        'subjectDN' => 'SubjectDN',
        'x509Certificate' => 'X509Certificate',
        'years' => 'Years',
    ];

    public function validate() {}

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
        if (null !== $this->caCertChain) {
            $res['CaCertChain'] = $this->caCertChain;
        }
        if (null !== $this->certIssuedCount) {
            $res['CertIssuedCount'] = $this->certIssuedCount;
        }
        if (null !== $this->certRemainingCount) {
            $res['CertRemainingCount'] = $this->certRemainingCount;
        }
        if (null !== $this->certTotalCount) {
            $res['CertTotalCount'] = $this->certTotalCount;
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
        if (null !== $this->crlDay) {
            $res['CrlDay'] = $this->crlDay;
        }
        if (null !== $this->crlStatus) {
            $res['CrlStatus'] = $this->crlStatus;
        }
        if (null !== $this->crlUrl) {
            $res['CrlUrl'] = $this->crlUrl;
        }
        if (null !== $this->fullAlgorithm) {
            $res['FullAlgorithm'] = $this->fullAlgorithm;
        }
        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }
        if (null !== $this->issuerType) {
            $res['IssuerType'] = $this->issuerType;
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
        if (null !== $this->years) {
            $res['Years'] = $this->years;
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
        if (isset($map['CaCertChain'])) {
            $model->caCertChain = $map['CaCertChain'];
        }
        if (isset($map['CertIssuedCount'])) {
            $model->certIssuedCount = $map['CertIssuedCount'];
        }
        if (isset($map['CertRemainingCount'])) {
            $model->certRemainingCount = $map['CertRemainingCount'];
        }
        if (isset($map['CertTotalCount'])) {
            $model->certTotalCount = $map['CertTotalCount'];
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
        if (isset($map['CrlDay'])) {
            $model->crlDay = $map['CrlDay'];
        }
        if (isset($map['CrlStatus'])) {
            $model->crlStatus = $map['CrlStatus'];
        }
        if (isset($map['CrlUrl'])) {
            $model->crlUrl = $map['CrlUrl'];
        }
        if (isset($map['FullAlgorithm'])) {
            $model->fullAlgorithm = $map['FullAlgorithm'];
        }
        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }
        if (isset($map['IssuerType'])) {
            $model->issuerType = $map['IssuerType'];
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
        if (isset($map['Years'])) {
            $model->years = $map['Years'];
        }

        return $model;
    }
}
