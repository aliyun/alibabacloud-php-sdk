<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models;

use AlibabaCloud\Dara\Model;

class UpdateOrInsertEnterpriseInfoRequest extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $alias;

    /**
     * @var mixed[]
     */
    public $cityJsonString;

    /**
     * @var string
     */
    public $enterpriseSize;

    /**
     * @var string
     */
    public $fax;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $PK;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var mixed[]
     */
    public $provinceJsonString;

    /**
     * @var string
     */
    public $years;
    protected $_name = [
        'address' => 'Address',
        'alias' => 'Alias',
        'cityJsonString' => 'CityJsonString',
        'enterpriseSize' => 'EnterpriseSize',
        'fax' => 'Fax',
        'name' => 'Name',
        'PK' => 'PK',
        'phone' => 'Phone',
        'provinceJsonString' => 'ProvinceJsonString',
        'years' => 'Years',
    ];

    public function validate()
    {
        if (\is_array($this->cityJsonString)) {
            Model::validateArray($this->cityJsonString);
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

        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }

        if (null !== $this->cityJsonString) {
            if (\is_array($this->cityJsonString)) {
                $res['CityJsonString'] = [];
                foreach ($this->cityJsonString as $key1 => $value1) {
                    $res['CityJsonString'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->enterpriseSize) {
            $res['EnterpriseSize'] = $this->enterpriseSize;
        }

        if (null !== $this->fax) {
            $res['Fax'] = $this->fax;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->PK) {
            $res['PK'] = $this->PK;
        }

        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }

        if (null !== $this->provinceJsonString) {
            if (\is_array($this->provinceJsonString)) {
                $res['ProvinceJsonString'] = [];
                foreach ($this->provinceJsonString as $key1 => $value1) {
                    $res['ProvinceJsonString'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->years) {
            $res['Years'] = $this->years;
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

        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }

        if (isset($map['CityJsonString'])) {
            if (!empty($map['CityJsonString'])) {
                $model->cityJsonString = [];
                foreach ($map['CityJsonString'] as $key1 => $value1) {
                    $model->cityJsonString[$key1] = $value1;
                }
            }
        }

        if (isset($map['EnterpriseSize'])) {
            $model->enterpriseSize = $map['EnterpriseSize'];
        }

        if (isset($map['Fax'])) {
            $model->fax = $map['Fax'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PK'])) {
            $model->PK = $map['PK'];
        }

        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }

        if (isset($map['ProvinceJsonString'])) {
            if (!empty($map['ProvinceJsonString'])) {
                $model->provinceJsonString = [];
                foreach ($map['ProvinceJsonString'] as $key1 => $value1) {
                    $model->provinceJsonString[$key1] = $value1;
                }
            }
        }

        if (isset($map['Years'])) {
            $model->years = $map['Years'];
        }

        return $model;
    }
}
