<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models;

use AlibabaCloud\Tea\Model;

class ListComputeJobLogsRequest extends Model
{
    /**
     * @var string
     */
    public $jobGroupId;

    /**
     * @var string
     */
    public $computeJobId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'jobGroupId'   => 'JobGroupId',
        'computeJobId' => 'ComputeJobId',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobGroupId) {
            $res['JobGroupId'] = $this->jobGroupId;
        }
        if (null !== $this->computeJobId) {
            $res['ComputeJobId'] = $this->computeJobId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListComputeJobLogsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobGroupId'])) {
            $model->jobGroupId = $map['JobGroupId'];
        }
        if (isset($map['ComputeJobId'])) {
            $model->computeJobId = $map['ComputeJobId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
