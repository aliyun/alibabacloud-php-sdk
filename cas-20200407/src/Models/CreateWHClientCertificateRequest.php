<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class CreateWHClientCertificateRequest extends Model
{
    /**
     * @example 1665819958
     *
     * @var int
     */
    public $afterTime;

    /**
     * @example RSA_2048
     *
     * @var string
     */
    public $algorithm;

    /**
     * @example 1634283958
     *
     * @var int
     */
    public $beforeTime;

    /**
     * @example aliyun
     *
     * @var string
     */
    public $commonName;

    /**
     * @example CN
     *
     * @var string
     */
    public $country;

    /**
     * @example -----BEGIN CERTIFICATE REQUEST----- ...... -----END CERTIFICATE REQUEST-----
     *
     * @var string
     */
    public $csr;

    /**
     * @example 365
     *
     * @var int
     */
    public $days;

    /**
     * @example 1
     *
     * @var int
     */
    public $immediately;

    /**
     * @example Hangzhou
     *
     * @var string
     */
    public $locality;

    /**
     * @example 12
     *
     * @var int
     */
    public $months;

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
     * @example 273ae6bb538d538c70c01f81jh2****
     *
     * @var string
     */
    public $parentIdentifier;

    /**
     * @example 2
     *
     * @var int
     */
    public $sanType;

    /**
     * @example example.com
     *
     * @var string
     */
    public $sanValue;

    /**
     * @example Zhejiang
     *
     * @var string
     */
    public $state;

    /**
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
     * @return CreateWHClientCertificateRequest
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
