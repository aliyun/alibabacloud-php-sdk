<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models;

use AlibabaCloud\Dara\Model;

class UpdateAccountAddressInfoRequest extends Model
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
     * @var mixed[]
     */
    public $cityJsonString;

    /**
     * @var mixed[]
     */
    public $districtJsonString;

    /**
     * @var string
     */
    public $PK;

    /**
     * @var string
     */
    public $postCode;

    /**
     * @var mixed[]
     */
    public $provinceJsonString;
    protected $_name = [
        'address' => 'Address',
        'address2' => 'Address2',
        'cityJsonString' => 'CityJsonString',
        'districtJsonString' => 'DistrictJsonString',
        'PK' => 'PK',
        'postCode' => 'PostCode',
        'provinceJsonString' => 'ProvinceJsonString',
    ];

    public function validate()
    {
        if (\is_array($this->cityJsonString)) {
            Model::validateArray($this->cityJsonString);
        }
        if (\is_array($this->districtJsonString)) {
            Model::validateArray($this->districtJsonString);
        }
        if (\is_array($this->provinceJsonString)) {
            Model::validateArray($this->provinceJsonString);
        }
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

        if (null !== $this->cityJsonString) {
            if (\is_array($this->cityJsonString)) {
                $res['CityJsonString'] = [];
                foreach ($this->cityJsonString as $key1 => $value1) {
                    $res['CityJsonString'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->districtJsonString) {
            if (\is_array($this->districtJsonString)) {
                $res['DistrictJsonString'] = [];
                foreach ($this->districtJsonString as $key1 => $value1) {
                    $res['DistrictJsonString'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->PK) {
            $res['PK'] = $this->PK;
        }

        if (null !== $this->postCode) {
            $res['PostCode'] = $this->postCode;
        }

        if (null !== $this->provinceJsonString) {
            if (\is_array($this->provinceJsonString)) {
                $res['ProvinceJsonString'] = [];
                foreach ($this->provinceJsonString as $key1 => $value1) {
                    $res['ProvinceJsonString'][$key1] = $value1;
                }
            }
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
            if (!empty($map['CityJsonString'])) {
                $model->cityJsonString = [];
                foreach ($map['CityJsonString'] as $key1 => $value1) {
                    $model->cityJsonString[$key1] = $value1;
                }
            }
        }

        if (isset($map['DistrictJsonString'])) {
            if (!empty($map['DistrictJsonString'])) {
                $model->districtJsonString = [];
                foreach ($map['DistrictJsonString'] as $key1 => $value1) {
                    $model->districtJsonString[$key1] = $value1;
                }
            }
        }

        if (isset($map['PK'])) {
            $model->PK = $map['PK'];
        }

        if (isset($map['PostCode'])) {
            $model->postCode = $map['PostCode'];
        }

        if (isset($map['ProvinceJsonString'])) {
            if (!empty($map['ProvinceJsonString'])) {
                $model->provinceJsonString = [];
                foreach ($map['ProvinceJsonString'] as $key1 => $value1) {
                    $model->provinceJsonString[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
