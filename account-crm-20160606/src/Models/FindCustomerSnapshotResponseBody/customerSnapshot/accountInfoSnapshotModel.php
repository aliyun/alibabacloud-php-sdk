<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models\FindCustomerSnapshotResponseBody\customerSnapshot;

use AlibabaCloud\Dara\Model;

class accountInfoSnapshotModel extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $address2;

    /**
     * @var string
     */
    public $address3;

    /**
     * @var string
     */
    public $address4;

    /**
     * @var string
     */
    public $address5;

    /**
     * @var string
     */
    public $address6;

    /**
     * @var string
     */
    public $cityId;

    /**
     * @var string
     */
    public $cityName;

    /**
     * @var string
     */
    public $postCode;

    /**
     * @var string
     */
    public $provinceId;

    /**
     * @var string
     */
    public $provinceName;

    /**
     * @var string
     */
    public $trueName;
    protected $_name = [
        'address' => 'Address',
        'address2' => 'Address2',
        'address3' => 'Address3',
        'address4' => 'Address4',
        'address5' => 'Address5',
        'address6' => 'Address6',
        'cityId' => 'CityId',
        'cityName' => 'CityName',
        'postCode' => 'PostCode',
        'provinceId' => 'ProvinceId',
        'provinceName' => 'ProvinceName',
        'trueName' => 'TrueName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }

        if (null !== $this->address2) {
            $res['Address2'] = $this->address2;
        }

        if (null !== $this->address3) {
            $res['Address3'] = $this->address3;
        }

        if (null !== $this->address4) {
            $res['Address4'] = $this->address4;
        }

        if (null !== $this->address5) {
            $res['Address5'] = $this->address5;
        }

        if (null !== $this->address6) {
            $res['Address6'] = $this->address6;
        }

        if (null !== $this->cityId) {
            $res['CityId'] = $this->cityId;
        }

        if (null !== $this->cityName) {
            $res['CityName'] = $this->cityName;
        }

        if (null !== $this->postCode) {
            $res['PostCode'] = $this->postCode;
        }

        if (null !== $this->provinceId) {
            $res['ProvinceId'] = $this->provinceId;
        }

        if (null !== $this->provinceName) {
            $res['ProvinceName'] = $this->provinceName;
        }

        if (null !== $this->trueName) {
            $res['TrueName'] = $this->trueName;
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

        if (isset($map['Address2'])) {
            $model->address2 = $map['Address2'];
        }

        if (isset($map['Address3'])) {
            $model->address3 = $map['Address3'];
        }

        if (isset($map['Address4'])) {
            $model->address4 = $map['Address4'];
        }

        if (isset($map['Address5'])) {
            $model->address5 = $map['Address5'];
        }

        if (isset($map['Address6'])) {
            $model->address6 = $map['Address6'];
        }

        if (isset($map['CityId'])) {
            $model->cityId = $map['CityId'];
        }

        if (isset($map['CityName'])) {
            $model->cityName = $map['CityName'];
        }

        if (isset($map['PostCode'])) {
            $model->postCode = $map['PostCode'];
        }

        if (isset($map['ProvinceId'])) {
            $model->provinceId = $map['ProvinceId'];
        }

        if (isset($map['ProvinceName'])) {
            $model->provinceName = $map['ProvinceName'];
        }

        if (isset($map['TrueName'])) {
            $model->trueName = $map['TrueName'];
        }

        return $model;
    }
}
