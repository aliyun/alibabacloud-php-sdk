<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Dara\Model;

class GetInstanceSqlOptimizeStatisticRequest extends Model
{
    /**
     * @var string
     */
    public $endTime;
    /**
     * @var string
     */
    public $filterEnable;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $nodeId;
    /**
     * @var string
     */
    public $startTime;
    /**
     * @var string
     */
    public $threshold;
    /**
     * @var string
     */
    public $useMerging;
    protected $_name = [
        'endTime'      => 'EndTime',
        'filterEnable' => 'FilterEnable',
        'instanceId'   => 'InstanceId',
        'nodeId'       => 'NodeId',
        'startTime'    => 'StartTime',
        'threshold'    => 'Threshold',
        'useMerging'   => 'UseMerging',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->filterEnable) {
            $res['FilterEnable'] = $this->filterEnable;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }

        if (null !== $this->useMerging) {
            $res['UseMerging'] = $this->useMerging;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['FilterEnable'])) {
            $model->filterEnable = $map['FilterEnable'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }

        if (isset($map['UseMerging'])) {
            $model->useMerging = $map['UseMerging'];
        }

        return $model;
    }
}
