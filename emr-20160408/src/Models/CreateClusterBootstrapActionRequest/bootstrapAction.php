<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\CreateClusterBootstrapActionRequest;

use AlibabaCloud\Tea\Model;

class bootstrapAction extends Model
{
    /**
     * @var string
     */
    public $executionFailStrategy;

    /**
     * @var string
     */
    public $arg;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $executionTarget;

    /**
     * @var string
     */
    public $executionMoment;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'executionFailStrategy' => 'ExecutionFailStrategy',
        'arg'                   => 'Arg',
        'path'                  => 'Path',
        'executionTarget'       => 'ExecutionTarget',
        'executionMoment'       => 'ExecutionMoment',
        'name'                  => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->executionFailStrategy) {
            $res['ExecutionFailStrategy'] = $this->executionFailStrategy;
        }
        if (null !== $this->arg) {
            $res['Arg'] = $this->arg;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->executionTarget) {
            $res['ExecutionTarget'] = $this->executionTarget;
        }
        if (null !== $this->executionMoment) {
            $res['ExecutionMoment'] = $this->executionMoment;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['ExecutionFailStrategy'])) {
            $model->executionFailStrategy = $map['ExecutionFailStrategy'];
        }
        if (isset($map['Arg'])) {
            $model->arg = $map['Arg'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['ExecutionTarget'])) {
            $model->executionTarget = $map['ExecutionTarget'];
        }
        if (isset($map['ExecutionMoment'])) {
            $model->executionMoment = $map['ExecutionMoment'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
