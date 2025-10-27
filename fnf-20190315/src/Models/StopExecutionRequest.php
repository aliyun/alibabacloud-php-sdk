<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\Dara\Model;

class StopExecutionRequest extends Model
{
    /**
     * @var string
     */
    public $cause;

    /**
     * @var string
     */
    public $error;

    /**
     * @var string
     */
    public $executionName;

    /**
     * @var string
     */
    public $flowName;
    protected $_name = [
        'cause' => 'Cause',
        'error' => 'Error',
        'executionName' => 'ExecutionName',
        'flowName' => 'FlowName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cause) {
            $res['Cause'] = $this->cause;
        }

        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }

        if (null !== $this->executionName) {
            $res['ExecutionName'] = $this->executionName;
        }

        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
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
        if (isset($map['Cause'])) {
            $model->cause = $map['Cause'];
        }

        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }

        if (isset($map['ExecutionName'])) {
            $model->executionName = $map['ExecutionName'];
        }

        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }

        return $model;
    }
}
