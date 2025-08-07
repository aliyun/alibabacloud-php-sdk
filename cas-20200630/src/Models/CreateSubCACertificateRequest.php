<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models;

use AlibabaCloud\Dara\Model;

class CreateSubCACertificateRequest extends Model
{
    /**
     * @var string
     */
    public $algorithm;

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
     * @var bool
     */
    public $enableCrl;

    /**
     * @var string[]
     */
    public $extendedKeyUsages;

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
     * @var int
     */
    public $pathLenConstraint;

    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $years;
    protected $_name = [
        'algorithm' => 'Algorithm',
        'commonName' => 'CommonName',
        'countryCode' => 'CountryCode',
        'crlDay' => 'CrlDay',
        'enableCrl' => 'EnableCrl',
        'extendedKeyUsages' => 'ExtendedKeyUsages',
        'locality' => 'Locality',
        'organization' => 'Organization',
        'organizationUnit' => 'OrganizationUnit',
        'parentIdentifier' => 'ParentIdentifier',
        'pathLenConstraint' => 'PathLenConstraint',
        'state' => 'State',
        'years' => 'Years',
    ];

    public function validate()
    {
        if (\is_array($this->extendedKeyUsages)) {
            Model::validateArray($this->extendedKeyUsages);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->crlDay) {
            $res['CrlDay'] = $this->crlDay;
        }

        if (null !== $this->enableCrl) {
            $res['EnableCrl'] = $this->enableCrl;
        }

        if (null !== $this->extendedKeyUsages) {
            if (\is_array($this->extendedKeyUsages)) {
                $res['ExtendedKeyUsages'] = [];
                $n1 = 0;
                foreach ($this->extendedKeyUsages as $item1) {
                    $res['ExtendedKeyUsages'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->pathLenConstraint) {
            $res['PathLenConstraint'] = $this->pathLenConstraint;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
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
        if (isset($map['Algorithm'])) {
            $model->algorithm = $map['Algorithm'];
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

        if (isset($map['EnableCrl'])) {
            $model->enableCrl = $map['EnableCrl'];
        }

        if (isset($map['ExtendedKeyUsages'])) {
            if (!empty($map['ExtendedKeyUsages'])) {
                $model->extendedKeyUsages = [];
                $n1 = 0;
                foreach ($map['ExtendedKeyUsages'] as $item1) {
                    $model->extendedKeyUsages[$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['PathLenConstraint'])) {
            $model->pathLenConstraint = $map['PathLenConstraint'];
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
