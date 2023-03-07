<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class GetCloudMetricProfilingRequest extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * @example ehpc-hz-jeJki6****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The profiling ID. You can call the [ListCloudMetricProfilings](~~188711~~) operation to obtain the profiling ID.
     *
     * @example ehpc-hz-i-bplukzqgl****_21687_2019-09-09-02-37-40
     *
     * @var string
     */
    public $profilingId;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clusterId'   => 'ClusterId',
        'profilingId' => 'ProfilingId',
        'regionId'    => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->profilingId) {
            $res['ProfilingId'] = $this->profilingId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCloudMetricProfilingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ProfilingId'])) {
            $model->profilingId = $map['ProfilingId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
