<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class CreateSDGRequest extends Model
{
    /**
     * @var string
     */
    public $billingCycle;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $diskType;

    /**
     * @var string
     */
    public $fromSDGId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $performanceLevel;

    /**
     * @var string
     */
    public $size;
    protected $_name = [
        'billingCycle' => 'BillingCycle',
        'description' => 'Description',
        'diskType' => 'DiskType',
        'fromSDGId' => 'FromSDGId',
        'instanceId' => 'InstanceId',
        'performanceLevel' => 'PerformanceLevel',
        'size' => 'Size',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billingCycle) {
            $res['BillingCycle'] = $this->billingCycle;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }

        if (null !== $this->fromSDGId) {
            $res['FromSDGId'] = $this->fromSDGId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->performanceLevel) {
            $res['PerformanceLevel'] = $this->performanceLevel;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
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
        if (isset($map['BillingCycle'])) {
            $model->billingCycle = $map['BillingCycle'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }

        if (isset($map['FromSDGId'])) {
            $model->fromSDGId = $map['FromSDGId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['PerformanceLevel'])) {
            $model->performanceLevel = $map['PerformanceLevel'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
