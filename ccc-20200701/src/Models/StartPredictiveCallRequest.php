<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class StartPredictiveCallRequest extends Model
{
    /**
     * @example 1312353****
     *
     * @var string
     */
    public $callee;

    /**
     * @example 0109810****
     *
     * @var string
     */
    public $caller;

    /**
     * @example 9774c36c-12fe-4e37-adce-89bc77ce****
     *
     * @var string
     */
    public $contactFlowId;

    /**
     * @var string
     */
    public $contactFlowVariables;

    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 1312353****
     *
     * @var string
     */
    public $maskedCallee;

    /**
     * @example skillgroup@ccc-test
     *
     * @var string
     */
    public $skillGroupId;

    /**
     * @var string
     */
    public $tags;

    /**
     * @example 10
     *
     * @var int
     */
    public $timeoutSeconds;
    protected $_name = [
        'callee'               => 'Callee',
        'caller'               => 'Caller',
        'contactFlowId'        => 'ContactFlowId',
        'contactFlowVariables' => 'ContactFlowVariables',
        'instanceId'           => 'InstanceId',
        'maskedCallee'         => 'MaskedCallee',
        'skillGroupId'         => 'SkillGroupId',
        'tags'                 => 'Tags',
        'timeoutSeconds'       => 'TimeoutSeconds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callee) {
            $res['Callee'] = $this->callee;
        }
        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
        }
        if (null !== $this->contactFlowId) {
            $res['ContactFlowId'] = $this->contactFlowId;
        }
        if (null !== $this->contactFlowVariables) {
            $res['ContactFlowVariables'] = $this->contactFlowVariables;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->maskedCallee) {
            $res['MaskedCallee'] = $this->maskedCallee;
        }
        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->timeoutSeconds) {
            $res['TimeoutSeconds'] = $this->timeoutSeconds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartPredictiveCallRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Callee'])) {
            $model->callee = $map['Callee'];
        }
        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }
        if (isset($map['ContactFlowId'])) {
            $model->contactFlowId = $map['ContactFlowId'];
        }
        if (isset($map['ContactFlowVariables'])) {
            $model->contactFlowVariables = $map['ContactFlowVariables'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MaskedCallee'])) {
            $model->maskedCallee = $map['MaskedCallee'];
        }
        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['TimeoutSeconds'])) {
            $model->timeoutSeconds = $map['TimeoutSeconds'];
        }

        return $model;
    }
}
