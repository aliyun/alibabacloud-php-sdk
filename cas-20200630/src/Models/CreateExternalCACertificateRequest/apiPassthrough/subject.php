<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models\CreateExternalCACertificateRequest\apiPassthrough;

use AlibabaCloud\Dara\Model;

class subject extends Model
{
    /**
     * @var string
     */
    public $commonName;

    /**
     * @var string
     */
    public $country;

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
    public $state;
    protected $_name = [
        'commonName' => 'CommonName',
        'country' => 'Country',
        'locality' => 'Locality',
        'organization' => 'Organization',
        'organizationUnit' => 'OrganizationUnit',
        'state' => 'State',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commonName) {
            $res['CommonName'] = $this->commonName;
        }

        if (null !== $this->country) {
            $res['Country'] = $this->country;
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

        if (null !== $this->state) {
            $res['State'] = $this->state;
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
        if (isset($map['CommonName'])) {
            $model->commonName = $map['CommonName'];
        }

        if (isset($map['Country'])) {
            $model->country = $map['Country'];
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

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
