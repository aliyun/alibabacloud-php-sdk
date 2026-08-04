<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class SpotBidPreviewItem extends Model
{
    /**
     * @var bool
     */
    public $active;

    /**
     * @var bool
     */
    public $allowCrossHpnZone;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $gcLevel;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @var float
     */
    public $maxDiscount;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $phase;

    /**
     * @var int
     */
    public $replicas;
    protected $_name = [
        'active' => 'active',
        'allowCrossHpnZone' => 'allowCrossHpnZone',
        'clusterId' => 'clusterId',
        'gcLevel' => 'gcLevel',
        'instanceType' => 'instanceType',
        'jobName' => 'jobName',
        'maxDiscount' => 'maxDiscount',
        'message' => 'message',
        'name' => 'name',
        'phase' => 'phase',
        'replicas' => 'replicas',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->active) {
            $res['active'] = $this->active;
        }

        if (null !== $this->allowCrossHpnZone) {
            $res['allowCrossHpnZone'] = $this->allowCrossHpnZone;
        }

        if (null !== $this->clusterId) {
            $res['clusterId'] = $this->clusterId;
        }

        if (null !== $this->gcLevel) {
            $res['gcLevel'] = $this->gcLevel;
        }

        if (null !== $this->instanceType) {
            $res['instanceType'] = $this->instanceType;
        }

        if (null !== $this->jobName) {
            $res['jobName'] = $this->jobName;
        }

        if (null !== $this->maxDiscount) {
            $res['maxDiscount'] = $this->maxDiscount;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->phase) {
            $res['phase'] = $this->phase;
        }

        if (null !== $this->replicas) {
            $res['replicas'] = $this->replicas;
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
        if (isset($map['active'])) {
            $model->active = $map['active'];
        }

        if (isset($map['allowCrossHpnZone'])) {
            $model->allowCrossHpnZone = $map['allowCrossHpnZone'];
        }

        if (isset($map['clusterId'])) {
            $model->clusterId = $map['clusterId'];
        }

        if (isset($map['gcLevel'])) {
            $model->gcLevel = $map['gcLevel'];
        }

        if (isset($map['instanceType'])) {
            $model->instanceType = $map['instanceType'];
        }

        if (isset($map['jobName'])) {
            $model->jobName = $map['jobName'];
        }

        if (isset($map['maxDiscount'])) {
            $model->maxDiscount = $map['maxDiscount'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['phase'])) {
            $model->phase = $map['phase'];
        }

        if (isset($map['replicas'])) {
            $model->replicas = $map['replicas'];
        }

        return $model;
    }
}
