<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class StartJobRequest extends Model
{
    /**
     * @var string[]
     */
    public $callingNumber;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $jobJson;

    /**
     * @var string
     */
    public $scenarioId;

    /**
     * @var bool
     */
    public $selfHostedCallCenter;
    protected $_name = [
        'callingNumber'        => 'CallingNumber',
        'groupId'              => 'GroupId',
        'instanceId'           => 'InstanceId',
        'jobJson'              => 'JobJson',
        'scenarioId'           => 'ScenarioId',
        'selfHostedCallCenter' => 'SelfHostedCallCenter',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callingNumber) {
            $res['CallingNumber'] = $this->callingNumber;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->jobJson) {
            $res['JobJson'] = $this->jobJson;
        }
        if (null !== $this->scenarioId) {
            $res['ScenarioId'] = $this->scenarioId;
        }
        if (null !== $this->selfHostedCallCenter) {
            $res['SelfHostedCallCenter'] = $this->selfHostedCallCenter;
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
        if (isset($map['CallingNumber'])) {
            if (!empty($map['CallingNumber'])) {
                $model->callingNumber = $map['CallingNumber'];
            }
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['JobJson'])) {
            $model->jobJson = $map['JobJson'];
        }
        if (isset($map['ScenarioId'])) {
            $model->scenarioId = $map['ScenarioId'];
        }
        if (isset($map['SelfHostedCallCenter'])) {
            $model->selfHostedCallCenter = $map['SelfHostedCallCenter'];
        }

        return $model;
    }
}
