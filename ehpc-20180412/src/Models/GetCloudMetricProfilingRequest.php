<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class GetCloudMetricProfilingRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $profilingId;
    protected $_name = [
        'regionId'    => 'RegionId',
        'clusterId'   => 'ClusterId',
        'profilingId' => 'ProfilingId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->profilingId) {
            $res['ProfilingId'] = $this->profilingId;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ProfilingId'])) {
            $model->profilingId = $map['ProfilingId'];
        }

        return $model;
    }
}
