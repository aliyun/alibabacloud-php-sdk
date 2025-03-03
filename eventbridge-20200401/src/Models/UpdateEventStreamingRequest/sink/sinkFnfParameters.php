<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkFnfParameters\executionName;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkFnfParameters\flowName;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkFnfParameters\input;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\sink\sinkFnfParameters\roleName;

class sinkFnfParameters extends Model
{
    /**
     * @var executionName
     */
    public $executionName;
    /**
     * @var flowName
     */
    public $flowName;
    /**
     * @var input
     */
    public $input;
    /**
     * @var roleName
     */
    public $roleName;
    protected $_name = [
        'executionName' => 'ExecutionName',
        'flowName'      => 'FlowName',
        'input'         => 'Input',
        'roleName'      => 'RoleName',
    ];

    public function validate()
    {
        if (null !== $this->executionName) {
            $this->executionName->validate();
        }
        if (null !== $this->flowName) {
            $this->flowName->validate();
        }
        if (null !== $this->input) {
            $this->input->validate();
        }
        if (null !== $this->roleName) {
            $this->roleName->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->executionName) {
            $res['ExecutionName'] = null !== $this->executionName ? $this->executionName->toArray($noStream) : $this->executionName;
        }

        if (null !== $this->flowName) {
            $res['FlowName'] = null !== $this->flowName ? $this->flowName->toArray($noStream) : $this->flowName;
        }

        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toArray($noStream) : $this->input;
        }

        if (null !== $this->roleName) {
            $res['RoleName'] = null !== $this->roleName ? $this->roleName->toArray($noStream) : $this->roleName;
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
        if (isset($map['ExecutionName'])) {
            $model->executionName = executionName::fromMap($map['ExecutionName']);
        }

        if (isset($map['FlowName'])) {
            $model->flowName = flowName::fromMap($map['FlowName']);
        }

        if (isset($map['Input'])) {
            $model->input = input::fromMap($map['Input']);
        }

        if (isset($map['RoleName'])) {
            $model->roleName = roleName::fromMap($map['RoleName']);
        }

        return $model;
    }
}
