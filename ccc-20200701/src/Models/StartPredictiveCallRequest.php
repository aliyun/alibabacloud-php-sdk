<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class StartPredictiveCallRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $caller;

    /**
     * @var string
     */
    public $callee;

    /**
     * @var int
     */
    public $timeoutSeconds;

    /**
     * @var string
     */
    public $contactFlowId;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $contactFlowVariables;
    protected $_name = [
        'instanceId'           => 'InstanceId',
        'caller'               => 'Caller',
        'callee'               => 'Callee',
        'timeoutSeconds'       => 'TimeoutSeconds',
        'contactFlowId'        => 'ContactFlowId',
        'tags'                 => 'Tags',
        'contactFlowVariables' => 'ContactFlowVariables',
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
        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
        }
        if (null !== $this->callee) {
            $res['Callee'] = $this->callee;
        }
        if (null !== $this->timeoutSeconds) {
            $res['TimeoutSeconds'] = $this->timeoutSeconds;
        }
        if (null !== $this->contactFlowId) {
            $res['ContactFlowId'] = $this->contactFlowId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->contactFlowVariables) {
            $res['ContactFlowVariables'] = $this->contactFlowVariables;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }
        if (isset($map['Callee'])) {
            $model->callee = $map['Callee'];
        }
        if (isset($map['TimeoutSeconds'])) {
            $model->timeoutSeconds = $map['TimeoutSeconds'];
        }
        if (isset($map['ContactFlowId'])) {
            $model->contactFlowId = $map['ContactFlowId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['ContactFlowVariables'])) {
            $model->contactFlowVariables = $map['ContactFlowVariables'];
        }

        return $model;
    }
}
