<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class DeleteRCInstancesRequest extends Model
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
     * @var string[]
     */
    public $instanceId;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var bool
     */
    public $terminateSubscription;
    protected $_name = [
        'dryRun'                => 'DryRun',
        'force'                 => 'Force',
        'instanceId'            => 'InstanceId',
        'regionId'              => 'RegionId',
        'terminateSubscription' => 'TerminateSubscription',
    ];

    public function validate()
    {
        if (\is_array($this->instanceId)) {
            Model::validateArray($this->instanceId);
        }
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

        if (null !== $this->instanceId) {
            if (\is_array($this->instanceId)) {
                $res['InstanceId'] = [];
                $n1                = 0;
                foreach ($this->instanceId as $item1) {
                    $res['InstanceId'][$n1++] = $item1;
                }
            }
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
            if (!empty($map['InstanceId'])) {
                $model->instanceId = [];
                $n1                = 0;
                foreach ($map['InstanceId'] as $item1) {
                    $model->instanceId[$n1++] = $item1;
                }
            }
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
