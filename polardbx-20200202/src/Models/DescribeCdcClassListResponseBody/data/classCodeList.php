<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeCdcClassListResponseBody\data;

use AlibabaCloud\Dara\Model;

class classCodeList extends Model
{
    /**
     * @var string
     */
    public $classCode;

    /**
     * @var string
     */
    public $cpuCore;

    /**
     * @var string
     */
    public $mem;
    protected $_name = [
        'classCode' => 'ClassCode',
        'cpuCore' => 'CpuCore',
        'mem' => 'Mem',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->classCode) {
            $res['ClassCode'] = $this->classCode;
        }

        if (null !== $this->cpuCore) {
            $res['CpuCore'] = $this->cpuCore;
        }

        if (null !== $this->mem) {
            $res['Mem'] = $this->mem;
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
        if (isset($map['ClassCode'])) {
            $model->classCode = $map['ClassCode'];
        }

        if (isset($map['CpuCore'])) {
            $model->cpuCore = $map['CpuCore'];
        }

        if (isset($map['Mem'])) {
            $model->mem = $map['Mem'];
        }

        return $model;
    }
}
