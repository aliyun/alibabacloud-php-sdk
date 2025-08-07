<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models\DescribeCACertificateResponseBody;

use AlibabaCloud\Dara\Model;

class certificate extends Model
{
    /**
     * @var int
     */
    public $afterDate;

    /**
     * @var string
     */
    public $algorithm;

    /**
     * @var int
     */
    public $beforeDate;

    /**
     * @var string
     */
    public $caCertChain;

    /**
     * @var int
     */
    public $certIssuedCount;

    /**
     * @var int
     */
    public $certRemainingCount;

    /**
     * @var int
     */
    public $certTotalCount;

    /**
     * @var string
     */
    public $certificateType;

    /**
     * @var string
     */
    public $commonName;

    /**
     * @var string
     */
    public $countryCode;

    /**
     * @var int
     */
    public $crlDay;

    /**
     * @var string
     */
    public $crlStatus;

    /**
     * @var string
     */
    public $crlUrl;

    /**
     * @var string
     */
    public $fullAlgorithm;

    /**
     * @var string
     */
    public $identifier;

    /**
     * @var string
     */
    public $issuerType;

    /**
     * @var int
     */
    public $keySize;

    /**
     * @var string
     */
    public $locality;

    /**
     * @var string
     */
    public $md5;

    /**
     * @var string
     */
    public $organization;

    /**
     * @var string
     */
    public $organizationUnit;

    /**
     * @var string
     */
    public $parentIdentifier;

    /**
     * @var string
     */
    public $sans;

    /**
     * @var string
     */
    public $serialNumber;

    /**
     * @var string
     */
    public $sha2;

    /**
     * @var string
     */
    public $signAlgorithm;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $subjectDN;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
