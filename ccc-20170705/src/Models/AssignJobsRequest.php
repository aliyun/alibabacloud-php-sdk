<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class AssignJobsRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $scenarioId;

    /**
     * @var string
     */
    public $strategyJson;

    /**
     * @var string[]
     */
    public $callingNumber;

    /**
     * @var string[]
     */
    public $jobsJson;
    protected $_name = [
        'instanceId'    => 'InstanceId',
        'groupId'       => 'GroupId',
        'scenarioId'    => 'ScenarioId',
        'strategyJson'  => 'StrategyJson',
        'callingNumber' => 'CallingNumber',
        'jobsJson'      => 'JobsJson',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->scenarioId) {
            $res['ScenarioId'] = $this->scenarioId;
        }
        if (null !== $this->strategyJson) {
            $res['StrategyJson'] = $this->strategyJson;
        }
        if (null !== $this->callingNumber) {
            $res['CallingNumber'] = $this->callingNumber;
        }
        if (null !== $this->jobsJson) {
            $res['JobsJson'] = $this->jobsJson;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssignJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['ScenarioId'])) {
            $model->scenarioId = $map['ScenarioId'];
        }
        if (isset($map['StrategyJson'])) {
            $model->strategyJson = $map['StrategyJson'];
        }
        if (isset($map['CallingNumber'])) {
            if (!empty($map['CallingNumber'])) {
                $model->callingNumber = $map['CallingNumber'];
            }
        }
        if (isset($map['JobsJson'])) {
            if (!empty($map['JobsJson'])) {
                $model->jobsJson = $map['JobsJson'];
            }
        }

        return $model;
    }
}
