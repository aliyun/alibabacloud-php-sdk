<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class LifecycleTask extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var LifecycleRule
     */
    public $lifecycleRule;

    /**
     * @var string
     */
    public $name;

    /**
     * @var WorkflowInstance
     */
    public $workflowInstance;
    protected $_name = [
        'bizId'            => 'BizId',
        'lifecycleRule'    => 'LifecycleRule',
        'name'             => 'Name',
        'workflowInstance' => 'WorkflowInstance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->lifecycleRule) {
            $res['LifecycleRule'] = null !== $this->lifecycleRule ? $this->lifecycleRule->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->workflowInstance) {
            $res['WorkflowInstance'] = null !== $this->workflowInstance ? $this->workflowInstance->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LifecycleTask
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['LifecycleRule'])) {
            $model->lifecycleRule = LifecycleRule::fromMap($map['LifecycleRule']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['WorkflowInstance'])) {
            $model->workflowInstance = WorkflowInstance::fromMap($map['WorkflowInstance']);
        }

        return $model;
    }
}
