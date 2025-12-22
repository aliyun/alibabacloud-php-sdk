<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models\ListCertResponseBody;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $afterDate;

    /**
     * @var int
     */
    public $afterTime;

    /**
     * @var string
     */
    public $algorithm;

    /**
     * @var string
     */
    public $aliasName;

    /**
     * @var string
     */
    public $beforeDate;

    /**
     * @var int
     */
    public $beforeTime;

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
    public $customIdentifier;

    /**
     * @var string
     */
    public $extra;

    /**
     * @var string
     */
    public $id;

    /**
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
     * @var string
     */
    public $organizationUnit;

    /**
     * @var string
     */
    public $serialNumber;

    /**
     * @var string
     */
    public $status;

    /**
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
        'customIdentifier' => 'CustomIdentifier',
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

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->customIdentifier) {
            $res['CustomIdentifier'] = $this->customIdentifier;
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['CustomIdentifier'])) {
            $model->customIdentifier = $map['CustomIdentifier'];
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
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
