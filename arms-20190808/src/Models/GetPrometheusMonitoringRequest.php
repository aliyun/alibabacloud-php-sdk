<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GetPrometheusMonitoringRequest extends Model
{
    /**
     * @description The ID of the Prometheus instance.
     *
     * This parameter is required.
     * @example cc7a37ee31aea4ed1a059eff8034b****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the monitoring configuration.
     *
     * This parameter is required.
     * @example customJob1
     *
     * @var string
     */
    public $monitoringName;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The type of the monitoring configuration.
     * This parameter is required.
     * @example customJob
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'clusterId'      => 'ClusterId',
        'monitoringName' => 'MonitoringName',
        'regionId'       => 'RegionId',
        'type'           => 'Type',
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
        if (null !== $this->monitoringName) {
            $res['MonitoringName'] = $this->monitoringName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPrometheusMonitoringRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['MonitoringName'])) {
            $model->monitoringName = $map['MonitoringName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
