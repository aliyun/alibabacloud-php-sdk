<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetFootprintListResponseBody\data;

use AlibabaCloud\Dara\Model;

class records extends Model
{
    /**
     * @var float
     */
    public $amount;

    /**
     * @var int
     */
    public $authStatus;

    /**
     * @var string
     */
    public $checkEndTime;

    /**
     * @var string
     */
    public $checkStartTime;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $createdBy;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $isDemoModel;

    /**
     * @var string
     */
    public $lifeCycle;

    /**
     * @var int
     */
    public $lifeCycleType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $unit;
    protected $_name = [
        'amount' => 'amount',
        'authStatus' => 'authStatus',
        'checkEndTime' => 'checkEndTime',
        'checkStartTime' => 'checkStartTime',
        'code' => 'code',
        'createdBy' => 'createdBy',
        'id' => 'id',
        'isDemoModel' => 'isDemoModel',
        'lifeCycle' => 'lifeCycle',
        'lifeCycleType' => 'lifeCycleType',
        'name' => 'name',
        'type' => 'type',
        'unit' => 'unit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
