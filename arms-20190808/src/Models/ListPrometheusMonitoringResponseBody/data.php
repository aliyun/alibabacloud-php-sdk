<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListPrometheusMonitoringResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Prometheus实例ID。
     *
     * @example c589a1b8db05c4561aefbb898ca8fb1cf
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The monitoring configuration. The value is a YAML string.
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
     * @description The status of the monitoring configuration.
     *
     * @example run
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the monitoring configuration.
     *
     * @example podMonitor
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'clusterId'      => 'ClusterId',
        'configYaml'     => 'ConfigYaml',
        'monitoringName' => 'MonitoringName',
        'status'         => 'Status',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
