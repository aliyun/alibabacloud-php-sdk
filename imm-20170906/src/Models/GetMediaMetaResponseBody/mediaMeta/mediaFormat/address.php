<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models\GetMediaMetaResponseBody\mediaMeta\mediaFormat;

use AlibabaCloud\Tea\Model;

class address extends Model
{
    /**
     * @var string
     */
    public $addressLine;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $district;

    /**
     * @var string
     */
    public $province;

    /**
     * @var string
     */
    public $township;
    protected $_name = [
        'addressLine' => 'AddressLine',
        'city'        => 'City',
        'country'     => 'Country',
        'district'    => 'District',
        'province'    => 'Province',
        'township'    => 'Township',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressLine) {
            $res['AddressLine'] = $this->addressLine;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->district) {
            $res['District'] = $this->district;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }
        if (null !== $this->township) {
            $res['Township'] = $this->township;
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
        if (isset($map['AddressLine'])) {
            $model->addressLine = $map['AddressLine'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['District'])) {
            $model->district = $map['District'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }
        if (isset($map['Township'])) {
            $model->township = $map['Township'];
        }

        return $model;
    }
}
