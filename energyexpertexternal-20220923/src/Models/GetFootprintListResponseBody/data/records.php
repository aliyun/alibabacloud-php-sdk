<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetFootprintListResponseBody\data;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @description The amount of the product.
     *
     * @example 100.0000000000000000000000000
     *
     * @var float
     */
    public $amount;

    /**
     * @description Authentication status enumeration value, please refer to [link](https://carbon-doc.oss-cn-hangzhou.aliyuncs.com/CarbonFootprintAppendices-en.pdf).
     *
     * @example 1
     *
     * @var int
     */
    public $authStatus;

    /**
     * @description Calculation end time.
     *
     * @example 2024/01/31
     *
     * @var string
     */
    public $checkEndTime;

    /**
     * @description Calculation start time.
     *
     * @example 2024/01/01
     *
     * @var string
     */
    public $checkStartTime;

    /**
     * @description The enterprise code.
     *
     * @example C-20080808-1
     *
     * @var string
     */
    public $code;

    /**
     * @description The user who created it.
     *
     * @example Energy Expert
     *
     * @var string
     */
    public $createdBy;

    /**
     * @description The product ID.
     *
     * @example 1024
     *
     * @var int
     */
    public $id;

    /**
     * @description Indicates whether the demo model is a built-in model. A value of 1 indicates a true value and a value of 0 indicates a false value.
     *
     * @example 1
     *
     * @var int
     */
    public $isDemoModel;

    /**
     * @description The literal expression corresponding to lifeCycleType, `From Cradle to Gate` and `From Cradle to Grave`.
     *
     * @example From Cradle to Gate
     *
     * @var string
     */
    public $lifeCycle;

    /**
     * @description 1 is `From Cradle to Gate`, and 2 is `From Cradle to Grave`.
     *
     * @example 1
     *
     * @var int
     */
    public $lifeCycleType;

    /**
     * @description The product name.
     *
     * @example Carbon-footprint-demo
     *
     * @var string
     */
    public $name;

    /**
     * @description Product category enumeration value, please refer to [Carbon Footprint Appendices](https://carbon-doc.oss-cn-hangzhou.aliyuncs.com/CarbonFootprintAppendices-en.pdf).
     *
     * @example 158-159
     *
     * @var string
     */
    public $type;

    /**
     * @description Unit enumeration value. Please refer to [Carbon Footprint Appendices](https://carbon-doc.oss-cn-hangzhou.aliyuncs.com/CarbonFootprintAppendices-en.pdf).
     *
     * @example 1-4
     *
     * @var string
     */
    public $unit;
    protected $_name = [
        'amount'         => 'amount',
        'authStatus'     => 'authStatus',
        'checkEndTime'   => 'checkEndTime',
        'checkStartTime' => 'checkStartTime',
        'code'           => 'code',
        'createdBy'      => 'createdBy',
        'id'             => 'id',
        'isDemoModel'    => 'isDemoModel',
        'lifeCycle'      => 'lifeCycle',
        'lifeCycleType'  => 'lifeCycleType',
        'name'           => 'name',
        'type'           => 'type',
        'unit'           => 'unit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['amount'] = $this->amount;
        }
        if (null !== $this->authStatus) {
            $res['authStatus'] = $this->authStatus;
        }
        if (null !== $this->checkEndTime) {
            $res['checkEndTime'] = $this->checkEndTime;
        }
        if (null !== $this->checkStartTime) {
            $res['checkStartTime'] = $this->checkStartTime;
        }
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->createdBy) {
            $res['createdBy'] = $this->createdBy;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->isDemoModel) {
            $res['isDemoModel'] = $this->isDemoModel;
        }
        if (null !== $this->lifeCycle) {
            $res['lifeCycle'] = $this->lifeCycle;
        }
        if (null !== $this->lifeCycleType) {
            $res['lifeCycleType'] = $this->lifeCycleType;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->unit) {
            $res['unit'] = $this->unit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['amount'])) {
            $model->amount = $map['amount'];
        }
        if (isset($map['authStatus'])) {
            $model->authStatus = $map['authStatus'];
        }
        if (isset($map['checkEndTime'])) {
            $model->checkEndTime = $map['checkEndTime'];
        }
        if (isset($map['checkStartTime'])) {
            $model->checkStartTime = $map['checkStartTime'];
        }
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['createdBy'])) {
            $model->createdBy = $map['createdBy'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['isDemoModel'])) {
            $model->isDemoModel = $map['isDemoModel'];
        }
        if (isset($map['lifeCycle'])) {
            $model->lifeCycle = $map['lifeCycle'];
        }
        if (isset($map['lifeCycleType'])) {
            $model->lifeCycleType = $map['lifeCycleType'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['unit'])) {
            $model->unit = $map['unit'];
        }

        return $model;
    }
}
