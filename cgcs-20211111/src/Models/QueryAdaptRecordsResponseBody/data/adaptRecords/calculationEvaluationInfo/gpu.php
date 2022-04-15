<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models\QueryAdaptRecordsResponseBody\data\adaptRecords\calculationEvaluationInfo;

use AlibabaCloud\SDK\CGCS\V20211111\Models\QueryAdaptRecordsResponseBody\data\adaptRecords\calculationEvaluationInfo\gpu\gpuUsedutilization;
use AlibabaCloud\SDK\CGCS\V20211111\Models\QueryAdaptRecordsResponseBody\data\adaptRecords\calculationEvaluationInfo\gpu\memUsedutilization;
use AlibabaCloud\Tea\Model;

class gpu extends Model
{
    /**
     * @var gpuUsedutilization
     */
    public $gpuUsedutilization;

    /**
     * @var memUsedutilization
     */
    public $memUsedutilization;
    protected $_name = [
        'gpuUsedutilization' => 'GpuUsedutilization',
        'memUsedutilization' => 'MemUsedutilization',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gpuUsedutilization) {
            $res['GpuUsedutilization'] = null !== $this->gpuUsedutilization ? $this->gpuUsedutilization->toMap() : null;
        }
        if (null !== $this->memUsedutilization) {
            $res['MemUsedutilization'] = null !== $this->memUsedutilization ? $this->memUsedutilization->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return gpu
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GpuUsedutilization'])) {
            $model->gpuUsedutilization = gpuUsedutilization::fromMap($map['GpuUsedutilization']);
        }
        if (isset($map['MemUsedutilization'])) {
            $model->memUsedutilization = memUsedutilization::fromMap($map['MemUsedutilization']);
        }

        return $model;
    }
}
