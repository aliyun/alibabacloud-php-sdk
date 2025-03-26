<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class DeleteRCInstancesShrinkRequest extends Model
{
    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var bool
     */
    public $force;

    /**
     * @var string
     */
    public $instanceIdShrink;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $terminateSubscription;
    protected $_name = [
        'dryRun' => 'DryRun',
        'force' => 'Force',
        'instanceIdShrink' => 'InstanceId',
        'regionId' => 'RegionId',
        'terminateSubscription' => 'TerminateSubscription',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }

        if (null !== $this->instanceIdShrink) {
            $res['InstanceId'] = $this->instanceIdShrink;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->terminateSubscription) {
            $res['TerminateSubscription'] = $this->terminateSubscription;
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
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceIdShrink = $map['InstanceId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['TerminateSubscription'])) {
            $model->terminateSubscription = $map['TerminateSubscription'];
        }

        return $model;
    }
}
