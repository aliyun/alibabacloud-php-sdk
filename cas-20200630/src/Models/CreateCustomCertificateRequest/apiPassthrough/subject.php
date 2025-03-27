<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models\CreateCustomCertificateRequest\apiPassthrough;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cas\V20200630\Models\CreateCustomCertificateRequest\apiPassthrough\subject\customAttributes;

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
     * @var customAttributes[]
     */
    public $customAttributes;

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
        'customAttributes' => 'CustomAttributes',
        'locality' => 'Locality',
        'organization' => 'Organization',
        'organizationUnit' => 'OrganizationUnit',
        'state' => 'State',
    ];

    public function validate()
    {
        if (\is_array($this->customAttributes)) {
            Model::validateArray($this->customAttributes);
        }
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

        if (null !== $this->customAttributes) {
            if (\is_array($this->customAttributes)) {
                $res['CustomAttributes'] = [];
                $n1 = 0;
                foreach ($this->customAttributes as $item1) {
                    $res['CustomAttributes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['CustomAttributes'])) {
            if (!empty($map['CustomAttributes'])) {
                $model->customAttributes = [];
                $n1 = 0;
                foreach ($map['CustomAttributes'] as $item1) {
                    $model->customAttributes[$n1++] = customAttributes::fromMap($item1);
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

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
