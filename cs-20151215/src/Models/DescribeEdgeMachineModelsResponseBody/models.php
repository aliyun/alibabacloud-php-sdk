<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeEdgeMachineModelsResponseBody;

use AlibabaCloud\Tea\Model;

class models extends Model
{
    /**
     * @description The number of CPU cores.
     *
     * @example 6
     *
     * @var int
     */
    public $cpu;

    /**
     * @description The CPU architecture.
     *
     * @example x86_64/arm64
     *
     * @var string
     */
    public $cpuArch;

    /**
     * @description The time when the cloud-native box was created.
     *
     * @example 2021-07-07T20:44:00+08:00
     *
     * @var string
     */
    public $created;

    /**
     * @description The description.
     *
     * @example B010
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether the Docker runtime is managed.
     *
     * @example 0/1
     *
     * @var int
     */
    public $manageRuntime;

    /**
     * @description The memory size. Unit: GB.
     *
     * @example 8
     *
     * @var int
     */
    public $memory;

    /**
     * @description The model of the cloud-native box.
     *
     * @example ACK-V-B010
     *
     * @var string
     */
    public $model;

    /**
     * @description The ID of the cloud-native box.
     *
     * @example c34cc753-8908-4739-bd10-ebd922a4****
     *
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
