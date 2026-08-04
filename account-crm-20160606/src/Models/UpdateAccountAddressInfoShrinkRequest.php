<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models;

use AlibabaCloud\Dara\Model;

class UpdateAccountAddressInfoShrinkRequest extends Model
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
    public $cityJsonStringShrink;

    /**
     * @var string
     */
    public $districtJsonStringShrink;

    /**
     * @var string
     */
    public $PK;

    /**
     * @var string
     */
    public $postCode;

    /**
     * @var string
     */
    public $provinceJsonStringShrink;
    protected $_name = [
        'address' => 'Address',
        'address2' => 'Address2',
        'cityJsonStringShrink' => 'CityJsonString',
        'districtJsonStringShrink' => 'DistrictJsonString',
        'PK' => 'PK',
        'postCode' => 'PostCode',
        'provinceJsonStringShrink' => 'ProvinceJsonString',
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

        if (null !== $this->cityJsonStringShrink) {
            $res['CityJsonString'] = $this->cityJsonStringShrink;
        }

        if (null !== $this->districtJsonStringShrink) {
            $res['DistrictJsonString'] = $this->districtJsonStringShrink;
        }

        if (null !== $this->PK) {
            $res['PK'] = $this->PK;
        }

        if (null !== $this->postCode) {
            $res['PostCode'] = $this->postCode;
        }

        if (null !== $this->provinceJsonStringShrink) {
            $res['ProvinceJsonString'] = $this->provinceJsonStringShrink;
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

        if (isset($map['CityJsonString'])) {
            $model->cityJsonStringShrink = $map['CityJsonString'];
        }

        if (isset($map['DistrictJsonString'])) {
            $model->districtJsonStringShrink = $map['DistrictJsonString'];
        }

        if (isset($map['PK'])) {
            $model->PK = $map['PK'];
        }

        if (isset($map['PostCode'])) {
            $model->postCode = $map['PostCode'];
        }

        if (isset($map['ProvinceJsonString'])) {
            $model->provinceJsonStringShrink = $map['ProvinceJsonString'];
        }

        return $model;
    }
}
