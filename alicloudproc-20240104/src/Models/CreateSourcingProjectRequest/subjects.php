<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alicloudproc\V20240104\Models\CreateSourcingProjectRequest;

use AlibabaCloud\SDK\Alicloudproc\V20240104\Models\CreateSourcingProjectRequest\subjects\address;
use AlibabaCloud\Tea\Model;

class subjects extends Model
{
    /**
     * @example {"provinceCode":"530000","cityCode":"530600","districtCode":"530624","detail":"蒙姑镇XXX"}
     *
     * @var address
     */
    public $address;

    /**
     * @example 标的编码XXX
     *
     * @var string
     */
    public $code;

    /**
     * @example {"deliveryTime":"2023-11-16T00:01:59Z","deliveryDesc":"交货期描述XXX","desc":"XXX标准XXX要求","brand":"XXX品牌"}
     *
     * @var string[]
     */
    public $extendInfo;

    /**
     * @example 标的名称XXX
     *
     * @var string
     */
    public $name;

    /**
     * @example 888.00
     *
     * @var float
     */
    public $quantity;

    /**
     * @example 规格型号XXX
     *
     * @var string
     */
    public $spec;

    /**
     * @example 单位XX
     *
     * @var string
     */
    public $unit;
    protected $_name = [
        'address'    => 'Address',
        'code'       => 'Code',
        'extendInfo' => 'ExtendInfo',
        'name'       => 'Name',
        'quantity'   => 'Quantity',
        'spec'       => 'Spec',
        'unit'       => 'Unit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = null !== $this->address ? $this->address->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->extendInfo) {
            $res['ExtendInfo'] = $this->extendInfo;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subjects
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = address::fromMap($map['Address']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ExtendInfo'])) {
            $model->extendInfo = $map['ExtendInfo'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }

        return $model;
    }
}
