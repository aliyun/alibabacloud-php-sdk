<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models\CreateCustomCertificateRequest\apiPassthrough;

use AlibabaCloud\SDK\Cas\V20200630\Models\CreateCustomCertificateRequest\apiPassthrough\subject\customAttributes;
use AlibabaCloud\Tea\Model;

class subject extends Model
{
    /**
     * @description The common name of the certificate user.
     *
     * @example Bob
     *
     * @var string
     */
    public $commonName;

    /**
     * @description The code of the country. The value is an alpha-2 country code that complies with the ISO 3166-1 standard. For more information about country codes, visit <https://www.iso.org/obp/ui/#search/code/>.
     *
     * @example CN
     *
     * @var string
     */
    public $country;

    /**
     * @description Customize the Subject attributes of the certificate.
     *
     * @var customAttributes[]
     */
    public $customAttributes;

    /**
     * @description The name of the city in which the organization is located. The value can contain letters.
     *
     * @example Hangzhou
     *
     * @var string
     */
    public $locality;

    /**
     * @description The name of the organization.
     *
     * @example XXX company
     *
     * @var string
     */
    public $organization;

    /**
     * @description The name of the department or branch in the organization.
     *
     * @example XXX department
     *
     * @var string
     */
    public $organizationUnit;

    /**
     * @description The name of the province or state in which the organization associated with the certificate is located.
     *
     * @example Zhejiang
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->commonName) {
            $res['CommonName'] = $this->commonName;
        }
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->customAttributes) {
            $res['CustomAttributes'] = [];
            if (null !== $this->customAttributes && \is_array($this->customAttributes)) {
                $n = 0;
                foreach ($this->customAttributes as $item) {
                    $res['CustomAttributes'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return subject
     */
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
                $n = 0;
                foreach ($map['CustomAttributes'] as $item) {
                    $model->customAttributes[$n++] = null !== $item ? customAttributes::fromMap($item) : $item;
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
