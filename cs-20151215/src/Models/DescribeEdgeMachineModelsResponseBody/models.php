<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeEdgeMachineModelsResponseBody;

use AlibabaCloud\Tea\Model;

class models extends Model
{
    /**
     * @var int
     */
    public $cpu;

    /**
     * @var string
     */
    public $cpuArch;

    /**
     * @var string
     */
    public $created;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $manageRuntime;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $modelId;
    protected $_name = [
        'cpu'           => 'cpu',
        'cpuArch'       => 'cpu_arch',
        'created'       => 'created',
        'description'   => 'description',
        'manageRuntime' => 'manage_runtime',
        'memory'        => 'memory',
        'model'         => 'model',
        'modelId'       => 'model_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['cpu'] = $this->cpu;
        }
        if (null !== $this->cpuArch) {
            $res['cpu_arch'] = $this->cpuArch;
        }
        if (null !== $this->created) {
            $res['created'] = $this->created;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->manageRuntime) {
            $res['manage_runtime'] = $this->manageRuntime;
        }
        if (null !== $this->memory) {
            $res['memory'] = $this->memory;
        }
        if (null !== $this->model) {
            $res['model'] = $this->model;
        }
        if (null !== $this->modelId) {
            $res['model_id'] = $this->modelId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return models
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cpu'])) {
            $model->cpu = $map['cpu'];
        }
        if (isset($map['cpu_arch'])) {
            $model->cpuArch = $map['cpu_arch'];
        }
        if (isset($map['created'])) {
            $model->created = $map['created'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['manage_runtime'])) {
            $model->manageRuntime = $map['manage_runtime'];
        }
        if (isset($map['memory'])) {
            $model->memory = $map['memory'];
        }
        if (isset($map['model'])) {
            $model->model = $map['model'];
        }
        if (isset($map['model_id'])) {
            $model->modelId = $map['model_id'];
        }

        return $model;
    }
}
