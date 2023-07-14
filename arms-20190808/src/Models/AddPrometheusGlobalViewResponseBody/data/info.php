<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\AddPrometheusGlobalViewResponseBody\data;

use AlibabaCloud\Tea\Model;

class info extends Model
{
    /**
     * @description The list of instances that failed to be added.
     *
     * @example \[{"sourceName": "Data source name- ArmsPrometheus","sourceType":"AlibabaPrometheus","userId":"UserID","clusterId":"ClusterId",}]
     *
     * @var string
     */
    public $failedInstances;

    /**
     * @description The ID of the global aggregation instance.
     *
     * @example global-v2-cn-1483223059272121-jmjjfznz
     *
     * @var string
     */
    public $globalViewClusterId;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'failedInstances'     => 'FailedInstances',
        'globalViewClusterId' => 'GlobalViewClusterId',
        'regionId'            => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failedInstances) {
            $res['FailedInstances'] = $this->failedInstances;
        }
        if (null !== $this->globalViewClusterId) {
            $res['GlobalViewClusterId'] = $this->globalViewClusterId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return info
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailedInstances'])) {
            $model->failedInstances = $map['FailedInstances'];
        }
        if (isset($map['GlobalViewClusterId'])) {
            $model->globalViewClusterId = $map['GlobalViewClusterId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
