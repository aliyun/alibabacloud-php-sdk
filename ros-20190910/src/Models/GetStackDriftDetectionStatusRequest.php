<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GetStackDriftDetectionStatusRequest extends Model
{
    /**
     * @description The ID of the drift detection operation.
     *
     * You can call the [ListStackResourceDrifts](~~155098~~) operation to obtain the ID of the drift detection operation.
     * @example a7044f0d-6f2e-4128-a307-4524ef88****
     *
     * @var string
     */
    public $driftDetectionId;

    /**
     * @description The region ID of the stack to be detected for drift.
     *
     * You can call the [DescribeRegions](~~131035~~) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'driftDetectionId' => 'DriftDetectionId',
        'regionId'         => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->driftDetectionId) {
            $res['DriftDetectionId'] = $this->driftDetectionId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStackDriftDetectionStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DriftDetectionId'])) {
            $model->driftDetectionId = $map['DriftDetectionId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
