<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class StartJobRequest extends Model
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
    public $jobJson;

    /**
     * @var bool
     */
    public $selfHostedCallCenter;

    /**
     * @var string[]
     */
    public $callingNumber;
    protected $_name = [
        'instanceId'           => 'InstanceId',
        'groupId'              => 'GroupId',
        'scenarioId'           => 'ScenarioId',
        'jobJson'              => 'JobJson',
        'selfHostedCallCenter' => 'SelfHostedCallCenter',
        'callingNumber'        => 'CallingNumber',
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
        if (null !== $this->jobJson) {
            $res['JobJson'] = $this->jobJson;
        }
        if (null !== $this->selfHostedCallCenter) {
            $res['SelfHostedCallCenter'] = $this->selfHostedCallCenter;
        }
        if (null !== $this->callingNumber) {
            $res['CallingNumber'] = $this->callingNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartJobRequest
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
        if (isset($map['JobJson'])) {
            $model->jobJson = $map['JobJson'];
        }
        if (isset($map['SelfHostedCallCenter'])) {
            $model->selfHostedCallCenter = $map['SelfHostedCallCenter'];
        }
        if (isset($map['CallingNumber'])) {
            if (!empty($map['CallingNumber'])) {
                $model->callingNumber = $map['CallingNumber'];
            }
        }

        return $model;
    }
}
