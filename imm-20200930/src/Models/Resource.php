<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class Resource extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $CPU;

    /**
     * @example ecs.gn5i-c2g1.large
     *
     * @var string
     */
    public $ECSInstance;

    /**
     * @example string	NVIDIA_P4
     *
     * @var string
     */
    public $GPUModel;

    /**
     * @example 1
     *
     * @var int
     */
    public $GPUNum;

    /**
     * @example string	ecs.gn5i-c2g1.large-2vCPU-8GB-1*NVIDIA_P4
     *
     * @var string
     */
    public $name;

    /**
     * @example 8
     *
     * @var int
     */
    public $RAM;
    protected $_name = [
        'CPU'         => 'CPU',
        'ECSInstance' => 'ECSInstance',
        'GPUModel'    => 'GPUModel',
        'GPUNum'      => 'GPUNum',
        'name'        => 'Name',
        'RAM'         => 'RAM',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->CPU) {
            $res['CPU'] = $this->CPU;
        }
        if (null !== $this->ECSInstance) {
            $res['ECSInstance'] = $this->ECSInstance;
        }
        if (null !== $this->GPUModel) {
            $res['GPUModel'] = $this->GPUModel;
        }
        if (null !== $this->GPUNum) {
            $res['GPUNum'] = $this->GPUNum;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->RAM) {
            $res['RAM'] = $this->RAM;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CPU'])) {
            $model->CPU = $map['CPU'];
        }
        if (isset($map['ECSInstance'])) {
            $model->ECSInstance = $map['ECSInstance'];
        }
        if (isset($map['GPUModel'])) {
            $model->GPUModel = $map['GPUModel'];
        }
        if (isset($map['GPUNum'])) {
            $model->GPUNum = $map['GPUNum'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RAM'])) {
            $model->RAM = $map['RAM'];
        }

        return $model;
    }
}
