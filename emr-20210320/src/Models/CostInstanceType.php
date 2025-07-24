<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class CostInstanceType extends Model
{
    /**
     * @description CPU核数。
     *
     * @var int
     */
    public $cpu;

    /**
     * @description 数据盘列表。
     *
     * @var DataDisk[]
     */
    public $dataDisks;

    /**
     * @description 实例类型列表。
     *
     * @example ["ecs.g6.4xlarge"]
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description 内存大小。
     *
     * @var int
     */
    public $memory;

    /**
     * @description 系统盘信息。
     *
     * @var SystemDisk
     */
    public $systemDisk;
    protected $_name = [
        'cpu' => 'Cpu',
        'dataDisks' => 'DataDisks',
        'instanceType' => 'InstanceType',
        'memory' => 'Memory',
        'systemDisk' => 'SystemDisk',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->dataDisks) {
            $res['DataDisks'] = [];
            if (null !== $this->dataDisks && \is_array($this->dataDisks)) {
                $n = 0;
                foreach ($this->dataDisks as $item) {
                    $res['DataDisks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->systemDisk) {
            $res['SystemDisk'] = null !== $this->systemDisk ? $this->systemDisk->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CostInstanceType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['DataDisks'])) {
            if (!empty($map['DataDisks'])) {
                $model->dataDisks = [];
                $n = 0;
                foreach ($map['DataDisks'] as $item) {
                    $model->dataDisks[$n++] = null !== $item ? DataDisk::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['SystemDisk'])) {
            $model->systemDisk = SystemDisk::fromMap($map['SystemDisk']);
        }

        return $model;
    }
}
