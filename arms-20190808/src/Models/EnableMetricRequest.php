<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class EnableMetricRequest extends Model
{
    /**
     * @example ccfa5e34a5c1f4ce6b916a40a12151d88
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example kube_pod_container_status_ready
     *
     * @var string
     */
    public $dropMetric;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clusterId'  => 'ClusterId',
        'dropMetric' => 'DropMetric',
        'regionId'   => 'RegionId',
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
        if (null !== $this->dropMetric) {
            $res['DropMetric'] = $this->dropMetric;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnableMetricRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DropMetric'])) {
            $model->dropMetric = $map['DropMetric'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
