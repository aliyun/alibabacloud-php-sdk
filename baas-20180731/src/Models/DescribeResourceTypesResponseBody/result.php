<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeResourceTypesResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $cpu;

    /**
     * @var int
     */
    public $disk;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var int
     */
    public $typeId;

    /**
     * @var string
     */
    public $typeName;
    protected $_name = [
        'cpu'      => 'Cpu',
        'disk'     => 'Disk',
        'memory'   => 'Memory',
        'typeId'   => 'TypeId',
        'typeName' => 'TypeName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->disk) {
            $res['Disk'] = $this->disk;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->typeId) {
            $res['TypeId'] = $this->typeId;
        }
        if (null !== $this->typeName) {
            $res['TypeName'] = $this->typeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['Disk'])) {
            $model->disk = $map['Disk'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['TypeId'])) {
            $model->typeId = $map['TypeId'];
        }
        if (isset($map['TypeName'])) {
            $model->typeName = $map['TypeName'];
        }

        return $model;
    }
}
