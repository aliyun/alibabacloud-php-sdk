<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class CreateWHCertificateWithExtensionRequest extends Model
{
    /**
     * @var int
     */
    public $afterTime;

    /**
     * @var string
     */
    public $algorithmKeySize;

    /**
     * @var string
     */
    public $aliasName;

    /**
     * @var bool
     */
    public $appendCrl;

    /**
     * @var bool
     */
    public $basicConstraintsCritical;

    /**
     * @var int
     */
    public $beforeTime;

    /**
     * @var string
     */
    public $certType;

    /**
     * @var string
     */
    public $commonName;

    /**
     * @var string
     */
    public $countryCode;

    /**
     * @var string
     */
    public $csrPemString;

    /**
     * @var int
     */
    public $immediately;

    /**
     * @var string
     */
    public $locality;

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
    public $state;
    protected $_name = [
        'afterTime'                => 'AfterTime',
        'algorithmKeySize'         => 'AlgorithmKeySize',
        'aliasName'                => 'AliasName',
        'appendCrl'                => 'AppendCrl',
        'basicConstraintsCritical' => 'BasicConstraintsCritical',
        'beforeTime'               => 'BeforeTime',
        'certType'                 => 'CertType',
        'commonName'               => 'CommonName',
        'countryCode'              => 'CountryCode',
        'csrPemString'             => 'CsrPemString',
        'immediately'              => 'Immediately',
        'locality'                 => 'Locality',
        'organization'             => 'Organization',
        'organizationUnit'         => 'OrganizationUnit',
        'parentIdentifier'         => 'ParentIdentifier',
        'sans'                     => 'Sans',
        'state'                    => 'State',
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
        if (null !== $this->algorithmKeySize) {
            $res['AlgorithmKeySize'] = $this->algorithmKeySize;
        }
        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }
        if (null !== $this->appendCrl) {
            $res['AppendCrl'] = $this->appendCrl;
        }
        if (null !== $this->basicConstraintsCritical) {
            $res['BasicConstraintsCritical'] = $this->basicConstraintsCritical;
        }
        if (null !== $this->beforeTime) {
            $res['BeforeTime'] = $this->beforeTime;
        }
        if (null !== $this->certType) {
            $res['CertType'] = $this->certType;
        }
        if (null !== $this->commonName) {
            $res['CommonName'] = $this->commonName;
        }
        if (null !== $this->countryCode) {
            $res['CountryCode'] = $this->countryCode;
        }
        if (null !== $this->csrPemString) {
            $res['CsrPemString'] = $this->csrPemString;
        }
        if (null !== $this->immediately) {
            $res['Immediately'] = $this->immediately;
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
        if (null !== $this->sans) {
            $res['Sans'] = $this->sans;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateWHCertificateWithExtensionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AfterTime'])) {
            $model->afterTime = $map['AfterTime'];
        }
        if (isset($map['AlgorithmKeySize'])) {
            $model->algorithmKeySize = $map['AlgorithmKeySize'];
        }
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }
        if (isset($map['AppendCrl'])) {
            $model->appendCrl = $map['AppendCrl'];
        }
        if (isset($map['BasicConstraintsCritical'])) {
            $model->basicConstraintsCritical = $map['BasicConstraintsCritical'];
        }
        if (isset($map['BeforeTime'])) {
            $model->beforeTime = $map['BeforeTime'];
        }
        if (isset($map['CertType'])) {
            $model->certType = $map['CertType'];
        }
        if (isset($map['CommonName'])) {
            $model->commonName = $map['CommonName'];
        }
        if (isset($map['CountryCode'])) {
            $model->countryCode = $map['CountryCode'];
        }
        if (isset($map['CsrPemString'])) {
            $model->csrPemString = $map['CsrPemString'];
        }
        if (isset($map['Immediately'])) {
            $model->immediately = $map['Immediately'];
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
        if (isset($map['Sans'])) {
            $model->sans = $map['Sans'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
