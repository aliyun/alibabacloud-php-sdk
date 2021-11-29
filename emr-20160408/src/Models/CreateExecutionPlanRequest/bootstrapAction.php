<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\CreateExecutionPlanRequest;

use AlibabaCloud\Tea\Model;

class bootstrapAction extends Model
{
    /**
     * @var string
     */
    public $arg;

    /**
     * @var string
     */
    public $executionFailStrategy;

    /**
     * @var string
     */
    public $executionMoment;

    /**
     * @var string
     */
    public $executionTarget;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $path;
    protected $_name = [
        'arg'                   => 'Arg',
        'executionFailStrategy' => 'ExecutionFailStrategy',
        'executionMoment'       => 'ExecutionMoment',
        'executionTarget'       => 'ExecutionTarget',
        'name'                  => 'Name',
        'path'                  => 'Path',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arg) {
            $res['Arg'] = $this->arg;
        }
        if (null !== $this->executionFailStrategy) {
            $res['ExecutionFailStrategy'] = $this->executionFailStrategy;
        }
        if (null !== $this->executionMoment) {
            $res['ExecutionMoment'] = $this->executionMoment;
        }
        if (null !== $this->executionTarget) {
            $res['ExecutionTarget'] = $this->executionTarget;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bootstrapAction
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Arg'])) {
            $model->arg = $map['Arg'];
        }
        if (isset($map['ExecutionFailStrategy'])) {
            $model->executionFailStrategy = $map['ExecutionFailStrategy'];
        }
        if (isset($map['ExecutionMoment'])) {
            $model->executionMoment = $map['ExecutionMoment'];
        }
        if (isset($map['ExecutionTarget'])) {
            $model->executionTarget = $map['ExecutionTarget'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        return $model;
    }
}
