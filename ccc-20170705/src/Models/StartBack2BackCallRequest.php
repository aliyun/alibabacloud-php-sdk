<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class StartBack2BackCallRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $workflowId;

    /**
     * @var string
     */
    public $callCenterNumber;

    /**
     * @var string
     */
    public $caller;

    /**
     * @var string
     */
    public $callee;
    protected $_name = [
        'instanceId'       => 'InstanceId',
        'workflowId'       => 'WorkflowId',
        'callCenterNumber' => 'CallCenterNumber',
        'caller'           => 'Caller',
        'callee'           => 'Callee',
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
        if (null !== $this->workflowId) {
            $res['WorkflowId'] = $this->workflowId;
        }
        if (null !== $this->callCenterNumber) {
            $res['CallCenterNumber'] = $this->callCenterNumber;
        }
        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
        }
        if (null !== $this->callee) {
            $res['Callee'] = $this->callee;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartBack2BackCallRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['WorkflowId'])) {
            $model->workflowId = $map['WorkflowId'];
        }
        if (isset($map['CallCenterNumber'])) {
            $model->callCenterNumber = $map['CallCenterNumber'];
        }
        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }
        if (isset($map['Callee'])) {
            $model->callee = $map['Callee'];
        }

        return $model;
    }
}
