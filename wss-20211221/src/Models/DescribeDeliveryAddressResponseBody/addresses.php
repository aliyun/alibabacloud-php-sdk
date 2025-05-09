<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wss\V20211221\Models\DescribeDeliveryAddressResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wss\V20211221\Models\DescribeDeliveryAddressResponseBody\addresses\area;
use AlibabaCloud\SDK\Wss\V20211221\Models\DescribeDeliveryAddressResponseBody\addresses\city;
use AlibabaCloud\SDK\Wss\V20211221\Models\DescribeDeliveryAddressResponseBody\addresses\province;
use AlibabaCloud\SDK\Wss\V20211221\Models\DescribeDeliveryAddressResponseBody\addresses\town;

class addresses extends Model
{
    /**
     * @var area
     */
    public $area;

    /**
     * @var city
     */
    public $city;

    /**
     * @var string
     */
    public $contacts;

    /**
     * @var bool
     */
    public $defaultAddress;

    /**
     * @var string
     */
    public $detail;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $postalCode;

    /**
     * @var province
     */
    public $province;

    /**
     * @var town
     */
    public $town;
    protected $_name = [
        'area' => 'Area',
        'city' => 'City',
        'contacts' => 'Contacts',
        'defaultAddress' => 'DefaultAddress',
        'detail' => 'Detail',
        'mobile' => 'Mobile',
        'postalCode' => 'PostalCode',
        'province' => 'Province',
        'town' => 'Town',
    ];

    public function validate()
    {
        if (null !== $this->area) {
            $this->area->validate();
        }
        if (null !== $this->city) {
            $this->city->validate();
        }
        if (null !== $this->province) {
            $this->province->validate();
        }
        if (null !== $this->town) {
            $this->town->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->area) {
            $res['Area'] = null !== $this->area ? $this->area->toArray($noStream) : $this->area;
        }

        if (null !== $this->city) {
            $res['City'] = null !== $this->city ? $this->city->toArray($noStream) : $this->city;
        }

        if (null !== $this->contacts) {
            $res['Contacts'] = $this->contacts;
        }

        if (null !== $this->defaultAddress) {
            $res['DefaultAddress'] = $this->defaultAddress;
        }

        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }

        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }

        if (null !== $this->postalCode) {
            $res['PostalCode'] = $this->postalCode;
        }

        if (null !== $this->province) {
            $res['Province'] = null !== $this->province ? $this->province->toArray($noStream) : $this->province;
        }

        if (null !== $this->town) {
            $res['Town'] = null !== $this->town ? $this->town->toArray($noStream) : $this->town;
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
        if (isset($map['Area'])) {
            $model->area = area::fromMap($map['Area']);
        }

        if (isset($map['City'])) {
            $model->city = city::fromMap($map['City']);
        }

        if (isset($map['Contacts'])) {
            $model->contacts = $map['Contacts'];
        }

        if (isset($map['DefaultAddress'])) {
            $model->defaultAddress = $map['DefaultAddress'];
        }

        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }

        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }

        if (isset($map['PostalCode'])) {
            $model->postalCode = $map['PostalCode'];
        }

        if (isset($map['Province'])) {
            $model->province = province::fromMap($map['Province']);
        }

        if (isset($map['Town'])) {
            $model->town = town::fromMap($map['Town']);
        }

        return $model;
    }
}
