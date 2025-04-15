<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateDisasterRecoveryPlanRequest\instances;

class CreateDisasterRecoveryPlanRequest extends Model
{
    /**
     * @var bool
     */
    public $autoSyncCheckpoint;

    /**
     * @var instances[]
     */
    public $instances;

    /**
     * @var string
     */
    public $planDesc;

    /**
     * @var string
     */
    public $planName;

    /**
     * @var string
     */
    public $planType;

    /**
     * @var bool
     */
    public $syncCheckpointEnabled;
    protected $_name = [
        'autoSyncCheckpoint' => 'autoSyncCheckpoint',
        'instances' => 'instances',
        'planDesc' => 'planDesc',
        'planName' => 'planName',
        'planType' => 'planType',
        'syncCheckpointEnabled' => 'syncCheckpointEnabled',
    ];

    public function validate()
    {
        if (\is_array($this->instances)) {
            Model::validateArray($this->instances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoSyncCheckpoint) {
            $res['autoSyncCheckpoint'] = $this->autoSyncCheckpoint;
        }

        if (null !== $this->instances) {
            if (\is_array($this->instances)) {
                $res['instances'] = [];
                $n1 = 0;
                foreach ($this->instances as $item1) {
                    $res['instances'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->planDesc) {
            $res['planDesc'] = $this->planDesc;
        }

        if (null !== $this->planName) {
            $res['planName'] = $this->planName;
        }

        if (null !== $this->planType) {
            $res['planType'] = $this->planType;
        }

        if (null !== $this->syncCheckpointEnabled) {
            $res['syncCheckpointEnabled'] = $this->syncCheckpointEnabled;
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
        if (isset($map['autoSyncCheckpoint'])) {
            $model->autoSyncCheckpoint = $map['autoSyncCheckpoint'];
        }

        if (isset($map['instances'])) {
            if (!empty($map['instances'])) {
                $model->instances = [];
                $n1 = 0;
                foreach ($map['instances'] as $item1) {
                    $model->instances[$n1++] = instances::fromMap($item1);
                }
            }
        }

        if (isset($map['planDesc'])) {
            $model->planDesc = $map['planDesc'];
        }

        if (isset($map['planName'])) {
            $model->planName = $map['planName'];
        }

        if (isset($map['planType'])) {
            $model->planType = $map['planType'];
        }

        if (isset($map['syncCheckpointEnabled'])) {
            $model->syncCheckpointEnabled = $map['syncCheckpointEnabled'];
        }

        return $model;
    }
}
