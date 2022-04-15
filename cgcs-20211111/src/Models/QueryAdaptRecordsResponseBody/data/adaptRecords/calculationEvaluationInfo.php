<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models\QueryAdaptRecordsResponseBody\data\adaptRecords;

use AlibabaCloud\SDK\CGCS\V20211111\Models\QueryAdaptRecordsResponseBody\data\adaptRecords\calculationEvaluationInfo\cpu;
use AlibabaCloud\SDK\CGCS\V20211111\Models\QueryAdaptRecordsResponseBody\data\adaptRecords\calculationEvaluationInfo\gpu;
use AlibabaCloud\SDK\CGCS\V20211111\Models\QueryAdaptRecordsResponseBody\data\adaptRecords\calculationEvaluationInfo\mem;
use AlibabaCloud\Tea\Model;

class calculationEvaluationInfo extends Model
{
    /**
     * @var cpu
     */
    public $cpu;

    /**
     * @var gpu
     */
    public $gpu;

    /**
     * @var mem
     */
    public $mem;
    protected $_name = [
        'cpu' => 'Cpu',
        'gpu' => 'Gpu',
        'mem' => 'Mem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['Cpu'] = null !== $this->cpu ? $this->cpu->toMap() : null;
        }
        if (null !== $this->gpu) {
            $res['Gpu'] = null !== $this->gpu ? $this->gpu->toMap() : null;
        }
        if (null !== $this->mem) {
            $res['Mem'] = null !== $this->mem ? $this->mem->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return calculationEvaluationInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cpu'])) {
            $model->cpu = cpu::fromMap($map['Cpu']);
        }
        if (isset($map['Gpu'])) {
            $model->gpu = gpu::fromMap($map['Gpu']);
        }
        if (isset($map['Mem'])) {
            $model->mem = mem::fromMap($map['Mem']);
        }

        return $model;
    }
}
