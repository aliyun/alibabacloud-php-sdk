<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeJobGroupsResponseBody\jobGroups\jobGroup;

use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeJobGroupsResponseBody\jobGroups\jobGroup\computeJobs\computeJob;
use AlibabaCloud\Tea\Model;

class computeJobs extends Model
{
    /**
     * @var computeJob[]
     */
    public $computeJob;
    protected $_name = [
        'computeJob' => 'ComputeJob',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->computeJob) {
            $res['ComputeJob'] = [];
            if (null !== $this->computeJob && \is_array($this->computeJob)) {
                $n = 0;
                foreach ($this->computeJob as $item) {
                    $res['ComputeJob'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return computeJobs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComputeJob'])) {
            if (!empty($map['ComputeJob'])) {
                $model->computeJob = [];
                $n                 = 0;
                foreach ($map['ComputeJob'] as $item) {
                    $model->computeJob[$n++] = null !== $item ? computeJob::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
