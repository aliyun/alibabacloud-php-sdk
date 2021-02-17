<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models\GetImageResponseBody;

use AlibabaCloud\Tea\Model;

class address extends Model
{
    /**
     * @var string
     */
    public $township;

    /**
     * @var string
     */
    public $district;

    /**
     * @var string
     */
    public $addressLine;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $province;
    protected $_name = [
        'township'    => 'Township',
        'district'    => 'District',
        'addressLine' => 'AddressLine',
        'country'     => 'Country',
        'city'        => 'City',
        'province'    => 'Province',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->township) {
            $res['Township'] = $this->township;
        }
        if (null !== $this->district) {
            $res['District'] = $this->district;
        }
        if (null !== $this->addressLine) {
            $res['AddressLine'] = $this->addressLine;
        }
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return address
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Township'])) {
            $model->township = $map['Township'];
        }
        if (isset($map['District'])) {
            $model->district = $map['District'];
        }
        if (isset($map['AddressLine'])) {
            $model->addressLine = $map['AddressLine'];
        }
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }

        return $model;
    }
}
