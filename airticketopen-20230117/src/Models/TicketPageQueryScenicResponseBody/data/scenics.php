<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\TicketPageQueryScenicResponseBody\data;

use AlibabaCloud\Dara\Model;

class scenics extends Model
{
    /**
     * @var string
     */
    public $address;

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
    public $description;

    /**
     * @var string[]
     */
    public $images;

    /**
     * @var float
     */
    public $latitude;

    /**
     * @var string
     */
    public $level;

    /**
     * @var float
     */
    public $longitude;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $openingTime;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $preferentialPolicy;

    /**
     * @var string
     */
    public $province;

    /**
     * @var string
     */
    public $residenceTime;

    /**
     * @var int
     */
    public $scenicId;

    /**
     * @var string
     */
    public $timezone;
    protected $_name = [
        'address' => 'Address',
        'city' => 'City',
        'country' => 'Country',
        'description' => 'Description',
        'images' => 'Images',
        'latitude' => 'Latitude',
        'level' => 'Level',
        'longitude' => 'Longitude',
        'name' => 'Name',
        'openingTime' => 'OpeningTime',
        'phone' => 'Phone',
        'preferentialPolicy' => 'PreferentialPolicy',
        'province' => 'Province',
        'residenceTime' => 'ResidenceTime',
        'scenicId' => 'ScenicId',
        'timezone' => 'Timezone',
    ];

    public function validate()
    {
        if (\is_array($this->images)) {
            Model::validateArray($this->images);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }

        if (null !== $this->city) {
            $res['City'] = $this->city;
        }

        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->images) {
            if (\is_array($this->images)) {
                $res['Images'] = [];
                $n1 = 0;
                foreach ($this->images as $item1) {
                    $res['Images'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->latitude) {
            $res['Latitude'] = $this->latitude;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->longitude) {
            $res['Longitude'] = $this->longitude;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->openingTime) {
            $res['OpeningTime'] = $this->openingTime;
        }

        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }

        if (null !== $this->preferentialPolicy) {
            $res['PreferentialPolicy'] = $this->preferentialPolicy;
        }

        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }

        if (null !== $this->residenceTime) {
            $res['ResidenceTime'] = $this->residenceTime;
        }

        if (null !== $this->scenicId) {
            $res['ScenicId'] = $this->scenicId;
        }

        if (null !== $this->timezone) {
            $res['Timezone'] = $this->timezone;
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
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }

        if (isset($map['City'])) {
            $model->city = $map['City'];
        }

        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Images'])) {
            if (!empty($map['Images'])) {
                $model->images = [];
                $n1 = 0;
                foreach ($map['Images'] as $item1) {
                    $model->images[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Latitude'])) {
            $model->latitude = $map['Latitude'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['Longitude'])) {
            $model->longitude = $map['Longitude'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OpeningTime'])) {
            $model->openingTime = $map['OpeningTime'];
        }

        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }

        if (isset($map['PreferentialPolicy'])) {
            $model->preferentialPolicy = $map['PreferentialPolicy'];
        }

        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }

        if (isset($map['ResidenceTime'])) {
            $model->residenceTime = $map['ResidenceTime'];
        }

        if (isset($map['ScenicId'])) {
            $model->scenicId = $map['ScenicId'];
        }

        if (isset($map['Timezone'])) {
            $model->timezone = $map['Timezone'];
        }

        return $model;
    }
}
