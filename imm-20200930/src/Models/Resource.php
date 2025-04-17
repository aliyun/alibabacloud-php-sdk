<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class Resource extends Model
{
    /**
     * @var int
     */
    public $CPU;

    /**
     * @var string
     */
    public $ECSInstance;

    /**
     * @var string
     */
    public $GPUModel;

    /**
     * @var int
     */
    public $GPUNum;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $RAM;
    protected $_name = [
        'CPU' => 'CPU',
        'ECSInstance' => 'ECSInstance',
        'GPUModel' => 'GPUModel',
        'GPUNum' => 'GPUNum',
        'name' => 'Name',
        'RAM' => 'RAM',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
