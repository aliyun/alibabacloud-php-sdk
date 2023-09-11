<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class UpdatePrometheusMonitoringRequest extends Model
{
    /**
     * @description The ID of the Prometheus instance.
     *
     * @example cc7a37ee31aea4ed1a059eff8034b****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The monitoring configuration. Specify a YAML string.
     *
     * @var string
     */
    public $configYaml;

    /**
     * @description The name of the monitoring configuration.
     *
     * @example podMonitor1
     *
     * @var string
     */
    public $monitoringName;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The type of the monitoring configuration.
     * Valid values for a Prometheus instance for ECS: customJob and probe.
     * @example podMonitor
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'clusterId'      => 'ClusterId',
        'configYaml'     => 'ConfigYaml',
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
        if (null !== $this->configYaml) {
            $res['ConfigYaml'] = $this->configYaml;
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
     * @return UpdatePrometheusMonitoringRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ConfigYaml'])) {
            $model->configYaml = $map['ConfigYaml'];
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
