<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetDisasterRecoveryPlanResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetDisasterRecoveryPlanResponseBody\data\instances;

class data extends Model
{
    /**
     * @var bool
     */
    public $autoSyncCheckpoint;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string[]
     */
    public $extInfo;

    /**
     * @var instances[]
     */
    public $instances;

    /**
     * @var string
     */
    public $planDesc;

    /**
     * @var int
     */
    public $planId;

    /**
     * @var string
     */
    public $planName;

    /**
     * @var string
     */
    public $planStatus;

    /**
     * @var string
     */
    public $planType;

    /**
     * @var bool
     */
    public $syncCheckpointEnabled;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'autoSyncCheckpoint' => 'autoSyncCheckpoint',
        'createTime' => 'createTime',
        'extInfo' => 'extInfo',
        'instances' => 'instances',
        'planDesc' => 'planDesc',
        'planId' => 'planId',
        'planName' => 'planName',
        'planStatus' => 'planStatus',
        'planType' => 'planType',
        'syncCheckpointEnabled' => 'syncCheckpointEnabled',
        'updateTime' => 'updateTime',
    ];

    public function validate()
    {
        if (\is_array($this->extInfo)) {
            Model::validateArray($this->extInfo);
        }
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

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->extInfo) {
            if (\is_array($this->extInfo)) {
                $res['extInfo'] = [];
                foreach ($this->extInfo as $key1 => $value1) {
                    $res['extInfo'][$key1] = $value1;
                }
            }
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

        if (null !== $this->planId) {
            $res['planId'] = $this->planId;
        }

        if (null !== $this->planName) {
            $res['planName'] = $this->planName;
        }

        if (null !== $this->planStatus) {
            $res['planStatus'] = $this->planStatus;
        }

        if (null !== $this->planType) {
            $res['planType'] = $this->planType;
        }

        if (null !== $this->syncCheckpointEnabled) {
            $res['syncCheckpointEnabled'] = $this->syncCheckpointEnabled;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
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

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['extInfo'])) {
            if (!empty($map['extInfo'])) {
                $model->extInfo = [];
                foreach ($map['extInfo'] as $key1 => $value1) {
                    $model->extInfo[$key1] = $value1;
                }
            }
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

        if (isset($map['planId'])) {
            $model->planId = $map['planId'];
        }

        if (isset($map['planName'])) {
            $model->planName = $map['planName'];
        }

        if (isset($map['planStatus'])) {
            $model->planStatus = $map['planStatus'];
        }

        if (isset($map['planType'])) {
            $model->planType = $map['planType'];
        }

        if (isset($map['syncCheckpointEnabled'])) {
            $model->syncCheckpointEnabled = $map['syncCheckpointEnabled'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
