<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class StartJobRequest extends Model
{
    /**
     * @example 10086
     *
     * @var string[]
     */
    public $callingNumber;

    /**
     * @example da37319b-6c83-4268-9f19-814aed62e401
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 4f21446e-324e-46f2-bf62-7f341fb004ea
     *
     * @var string
     */
    public $jobGroupId;

    /**
     * @var string
     */
    public $jobJson;

    /**
     * @example af81a389-91f0-4157-8d82-720edd02b66a
     *
     * @var string
     */
    public $scenarioId;

    /**
     * @example b9ff4e88-65f9-4eb3-987c-11ba51f3f24d
     *
     * @var string
     */
    public $scriptId;
    protected $_name = [
        'callingNumber' => 'CallingNumber',
        'instanceId'    => 'InstanceId',
        'jobGroupId'    => 'JobGroupId',
        'jobJson'       => 'JobJson',
        'scenarioId'    => 'ScenarioId',
        'scriptId'      => 'ScriptId',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->jobGroupId) {
            $res['JobGroupId'] = $this->jobGroupId;
        }
        if (null !== $this->jobJson) {
            $res['JobJson'] = $this->jobJson;
        }
        if (null !== $this->scenarioId) {
            $res['ScenarioId'] = $this->scenarioId;
        }
        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['JobGroupId'])) {
            $model->jobGroupId = $map['JobGroupId'];
        }
        if (isset($map['JobJson'])) {
            $model->jobJson = $map['JobJson'];
        }
        if (isset($map['ScenarioId'])) {
            $model->scenarioId = $map['ScenarioId'];
        }
        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }

        return $model;
    }
}
