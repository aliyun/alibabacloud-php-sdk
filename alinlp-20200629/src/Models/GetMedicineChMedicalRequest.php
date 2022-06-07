<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alinlp\V20200629\Models;

use AlibabaCloud\Tea\Model;

class GetMedicineChMedicalRequest extends Model
{
    /**
     * @var string
     */
    public $factory;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $serviceCode;

    /**
     * @var string
     */
    public $specification;

    /**
     * @var string
     */
    public $unit;
    protected $_name = [
        'factory'       => 'Factory',
        'name'          => 'Name',
        'serviceCode'   => 'ServiceCode',
        'specification' => 'Specification',
        'unit'          => 'Unit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->factory) {
            $res['Factory'] = $this->factory;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }
        if (null !== $this->specification) {
            $res['Specification'] = $this->specification;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMedicineChMedicalRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Factory'])) {
            $model->factory = $map['Factory'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }
        if (isset($map['Specification'])) {
            $model->specification = $map['Specification'];
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }

        return $model;
    }
}
