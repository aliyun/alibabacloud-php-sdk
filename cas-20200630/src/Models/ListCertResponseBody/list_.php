<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models\ListCertResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example 2024-05-13 12:59:45
     *
     * @var string
     */
    public $afterDate;

    /**
     * @example 1728921600000
     *
     * @var int
     */
    public $afterTime;

    /**
     * @example RSA
     *
     * @var string
     */
    public $algorithm;

    /**
     * @var string
     */
    public $aliasName;

    /**
     * @example 2026-05-19
     *
     * @var string
     */
    public $beforeDate;

    /**
     * @example 1728921600000
     *
     * @var int
     */
    public $beforeTime;

    /**
     * @example Server
     *
     * @var string
     */
    public $certificateType;

    /**
     * @example www.kfsjn.xyz
     *
     * @var string
     */
    public $commonName;

    /**
     * @example {\\"appId\\":\\"APP_PFHMIGUHKDUW6S3N7ZL2\\"}
     *
     * @var string
     */
    public $extra;

    /**
     * @example 1806958
     *
     * @var string
     */
    public $id;

    /**
     * @example 1ef539a8-1e1f-6b88-8c11-21cf01a203e9
     *
     * @var string
     */
    public $identifier;

    /**
     * @var bool
     */
    public $keyExportable;

    /**
     * @var string
     */
    public $organization;

    /**
     * @example IT
     *
     * @var string
     */
    public $organizationUnit;

    /**
     * @example 3a3ee3c3597d675e
     *
     * @var string
     */
    public $serialNumber;

    /**
     * @example complete
     *
     * @var string
     */
    public $status;

    /**
     * @example SubjectDn
     *
     * @var string
     */
    public $subjectDn;

    /**
     * @var string[]
     */
    public $tags;
    protected $_name = [
        'afterDate' => 'AfterDate',
        'afterTime' => 'AfterTime',
        'algorithm' => 'Algorithm',
        'aliasName' => 'AliasName',
        'beforeDate' => 'BeforeDate',
        'beforeTime' => 'BeforeTime',
        'certificateType' => 'CertificateType',
        'commonName' => 'CommonName',
        'extra' => 'Extra',
        'id' => 'Id',
        'identifier' => 'Identifier',
        'keyExportable' => 'KeyExportable',
        'organization' => 'Organization',
        'organizationUnit' => 'OrganizationUnit',
        'serialNumber' => 'SerialNumber',
        'status' => 'Status',
        'subjectDn' => 'SubjectDn',
        'tags' => 'Tags',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->afterDate) {
            $res['AfterDate'] = $this->afterDate;
        }
        if (null !== $this->afterTime) {
            $res['AfterTime'] = $this->afterTime;
        }
        if (null !== $this->algorithm) {
            $res['Algorithm'] = $this->algorithm;
        }
        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }
        if (null !== $this->beforeDate) {
            $res['BeforeDate'] = $this->beforeDate;
        }
        if (null !== $this->beforeTime) {
            $res['BeforeTime'] = $this->beforeTime;
        }
        if (null !== $this->certificateType) {
            $res['CertificateType'] = $this->certificateType;
        }
        if (null !== $this->commonName) {
            $res['CommonName'] = $this->commonName;
        }
        if (null !== $this->extra) {
            $res['Extra'] = $this->extra;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }
        if (null !== $this->keyExportable) {
            $res['KeyExportable'] = $this->keyExportable;
        }
        if (null !== $this->organization) {
            $res['Organization'] = $this->organization;
        }
        if (null !== $this->organizationUnit) {
            $res['OrganizationUnit'] = $this->organizationUnit;
        }
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subjectDn) {
            $res['SubjectDn'] = $this->subjectDn;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AfterDate'])) {
            $model->afterDate = $map['AfterDate'];
        }
        if (isset($map['AfterTime'])) {
            $model->afterTime = $map['AfterTime'];
        }
        if (isset($map['Algorithm'])) {
            $model->algorithm = $map['Algorithm'];
        }
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }
        if (isset($map['BeforeDate'])) {
            $model->beforeDate = $map['BeforeDate'];
        }
        if (isset($map['BeforeTime'])) {
            $model->beforeTime = $map['BeforeTime'];
        }
        if (isset($map['CertificateType'])) {
            $model->certificateType = $map['CertificateType'];
        }
        if (isset($map['CommonName'])) {
            $model->commonName = $map['CommonName'];
        }
        if (isset($map['Extra'])) {
            $model->extra = $map['Extra'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }
        if (isset($map['KeyExportable'])) {
            $model->keyExportable = $map['KeyExportable'];
        }
        if (isset($map['Organization'])) {
            $model->organization = $map['Organization'];
        }
        if (isset($map['OrganizationUnit'])) {
            $model->organizationUnit = $map['OrganizationUnit'];
        }
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubjectDn'])) {
            $model->subjectDn = $map['SubjectDn'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = $map['Tags'];
            }
        }

        return $model;
    }
}
