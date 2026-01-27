<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class RebootRCInstancesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $batchOptimization;

    /**
     * @var bool
     */
    public $forceReboot;

    /**
     * @var string
     */
    public $instanceIdsShrink;

    /**
     * @var string
     */
    public $rebootTime;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'batchOptimization' => 'BatchOptimization',
        'forceReboot' => 'ForceReboot',
        'instanceIdsShrink' => 'InstanceIds',
        'rebootTime' => 'RebootTime',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchOptimization) {
            $res['BatchOptimization'] = $this->batchOptimization;
        }

        if (null !== $this->forceReboot) {
            $res['ForceReboot'] = $this->forceReboot;
        }

        if (null !== $this->instanceIdsShrink) {
            $res['InstanceIds'] = $this->instanceIdsShrink;
        }

        if (null !== $this->rebootTime) {
            $res['RebootTime'] = $this->rebootTime;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['BatchOptimization'])) {
            $model->batchOptimization = $map['BatchOptimization'];
        }

        if (isset($map['ForceReboot'])) {
            $model->forceReboot = $map['ForceReboot'];
        }

        if (isset($map['InstanceIds'])) {
            $model->instanceIdsShrink = $map['InstanceIds'];
        }

        if (isset($map['RebootTime'])) {
            $model->rebootTime = $map['RebootTime'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
