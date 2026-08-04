<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models;

use AlibabaCloud\Dara\Model;

class UpdateOrInsertEnterpriseInfoShrinkRequest extends Model
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
     * @var string
     */
    public $cityJsonStringShrink;

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
     * @var string
     */
    public $provinceJsonStringShrink;

    /**
     * @var string
     */
    public $years;
    protected $_name = [
        'address' => 'Address',
        'alias' => 'Alias',
        'cityJsonStringShrink' => 'CityJsonString',
        'enterpriseSize' => 'EnterpriseSize',
        'fax' => 'Fax',
        'name' => 'Name',
        'PK' => 'PK',
        'phone' => 'Phone',
        'provinceJsonStringShrink' => 'ProvinceJsonString',
        'years' => 'Years',
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

        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }

        if (null !== $this->cityJsonStringShrink) {
            $res['CityJsonString'] = $this->cityJsonStringShrink;
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

        if (null !== $this->provinceJsonStringShrink) {
            $res['ProvinceJsonString'] = $this->provinceJsonStringShrink;
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
            $model->cityJsonStringShrink = $map['CityJsonString'];
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
            $model->provinceJsonStringShrink = $map['ProvinceJsonString'];
        }

        if (isset($map['Years'])) {
            $model->years = $map['Years'];
        }

        return $model;
    }
}
