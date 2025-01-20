<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models\RgeoCodeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IQS\V20240712\Models\RgeoCodeResponseBody\data\building;
use AlibabaCloud\SDK\IQS\V20240712\Models\RgeoCodeResponseBody\data\businessAreas;
use AlibabaCloud\SDK\IQS\V20240712\Models\RgeoCodeResponseBody\data\neighborhood;
use AlibabaCloud\SDK\IQS\V20240712\Models\RgeoCodeResponseBody\data\streetNumber;

class data extends Model
{
    /**
     * @var building
     */
    public $building;
    /**
     * @var businessAreas[]
     */
    public $businessAreas;
    /**
     * @var string
     */
    public $city;
    /**
     * @var string
     */
    public $cityCode;
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
    public $districtCode;
    /**
     * @var string
     */
    public $formattedAddress;
    /**
     * @var neighborhood
     */
    public $neighborhood;
    /**
     * @var string
     */
    public $province;
    /**
     * @var streetNumber
     */
    public $streetNumber;
    /**
     * @var string
     */
    public $townCode;
    /**
     * @var string
     */
    public $townShip;
    protected $_name = [
        'building'         => 'building',
        'businessAreas'    => 'businessAreas',
        'city'             => 'city',
        'cityCode'         => 'cityCode',
        'country'          => 'country',
        'district'         => 'district',
        'districtCode'     => 'districtCode',
        'formattedAddress' => 'formattedAddress',
        'neighborhood'     => 'neighborhood',
        'province'         => 'province',
        'streetNumber'     => 'streetNumber',
        'townCode'         => 'townCode',
        'townShip'         => 'townShip',
    ];

    public function validate()
    {
        if (null !== $this->building) {
            $this->building->validate();
        }
        if (\is_array($this->businessAreas)) {
            Model::validateArray($this->businessAreas);
        }
        if (null !== $this->neighborhood) {
            $this->neighborhood->validate();
        }
        if (null !== $this->streetNumber) {
            $this->streetNumber->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->building) {
            $res['building'] = null !== $this->building ? $this->building->toArray($noStream) : $this->building;
        }

        if (null !== $this->businessAreas) {
            if (\is_array($this->businessAreas)) {
                $res['businessAreas'] = [];
                $n1                   = 0;
                foreach ($this->businessAreas as $item1) {
                    $res['businessAreas'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->city) {
            $res['city'] = $this->city;
        }

        if (null !== $this->cityCode) {
            $res['cityCode'] = $this->cityCode;
        }

        if (null !== $this->country) {
            $res['country'] = $this->country;
        }

        if (null !== $this->district) {
            $res['district'] = $this->district;
        }

        if (null !== $this->districtCode) {
            $res['districtCode'] = $this->districtCode;
        }

        if (null !== $this->formattedAddress) {
            $res['formattedAddress'] = $this->formattedAddress;
        }

        if (null !== $this->neighborhood) {
            $res['neighborhood'] = null !== $this->neighborhood ? $this->neighborhood->toArray($noStream) : $this->neighborhood;
        }

        if (null !== $this->province) {
            $res['province'] = $this->province;
        }

        if (null !== $this->streetNumber) {
            $res['streetNumber'] = null !== $this->streetNumber ? $this->streetNumber->toArray($noStream) : $this->streetNumber;
        }

        if (null !== $this->townCode) {
            $res['townCode'] = $this->townCode;
        }

        if (null !== $this->townShip) {
            $res['townShip'] = $this->townShip;
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
        if (isset($map['building'])) {
            $model->building = building::fromMap($map['building']);
        }

        if (isset($map['businessAreas'])) {
            if (!empty($map['businessAreas'])) {
                $model->businessAreas = [];
                $n1                   = 0;
                foreach ($map['businessAreas'] as $item1) {
                    $model->businessAreas[$n1++] = businessAreas::fromMap($item1);
                }
            }
        }

        if (isset($map['city'])) {
            $model->city = $map['city'];
        }

        if (isset($map['cityCode'])) {
            $model->cityCode = $map['cityCode'];
        }

        if (isset($map['country'])) {
            $model->country = $map['country'];
        }

        if (isset($map['district'])) {
            $model->district = $map['district'];
        }

        if (isset($map['districtCode'])) {
            $model->districtCode = $map['districtCode'];
        }

        if (isset($map['formattedAddress'])) {
            $model->formattedAddress = $map['formattedAddress'];
        }

        if (isset($map['neighborhood'])) {
            $model->neighborhood = neighborhood::fromMap($map['neighborhood']);
        }

        if (isset($map['province'])) {
            $model->province = $map['province'];
        }

        if (isset($map['streetNumber'])) {
            $model->streetNumber = streetNumber::fromMap($map['streetNumber']);
        }

        if (isset($map['townCode'])) {
            $model->townCode = $map['townCode'];
        }

        if (isset($map['townShip'])) {
            $model->townShip = $map['townShip'];
        }

        return $model;
    }
}
