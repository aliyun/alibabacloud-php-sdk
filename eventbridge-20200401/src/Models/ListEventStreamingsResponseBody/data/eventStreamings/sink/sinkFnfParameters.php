<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkFnfParameters\executionName;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkFnfParameters\flowName;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkFnfParameters\input;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListEventStreamingsResponseBody\data\eventStreamings\sink\sinkFnfParameters\roleName;
use AlibabaCloud\Tea\Model;

class sinkFnfParameters extends Model
{
    /**
     * @description The execution name.
     *
     * @var executionName
     */
    public $executionName;

    /**
     * @description The flow name.
     *
     * @var flowName
     */
    public $flowName;

    /**
     * @description The input information of the execution.
     *
     * @var input
     */
    public $input;

    /**
     * @description The role name.
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->executionName) {
            $res['ExecutionName'] = null !== $this->executionName ? $this->executionName->toMap() : null;
        }
        if (null !== $this->flowName) {
            $res['FlowName'] = null !== $this->flowName ? $this->flowName->toMap() : null;
        }
        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toMap() : null;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = null !== $this->roleName ? $this->roleName->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sinkFnfParameters
     */
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
