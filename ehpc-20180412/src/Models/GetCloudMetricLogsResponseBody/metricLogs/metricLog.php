<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\GetCloudMetricLogsResponseBody\metricLogs;

use AlibabaCloud\Tea\Model;

class metricLog extends Model
{
    /**
     * @var string
     */
    public $diskDevice;

    /**
     * @var string
     */
    public $hostname;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $metricData;

    /**
     * @var string
     */
    public $networkInterface;

    /**
     * @var int
     */
    public $time;
    protected $_name = [
        'diskDevice'       => 'DiskDevice',
        'hostname'         => 'Hostname',
        'instanceId'       => 'InstanceId',
        'metricData'       => 'MetricData',
        'networkInterface' => 'NetworkInterface',
        'time'             => 'Time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskDevice) {
            $res['DiskDevice'] = $this->diskDevice;
        }
        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->metricData) {
            $res['MetricData'] = $this->metricData;
        }
        if (null !== $this->networkInterface) {
            $res['NetworkInterface'] = $this->networkInterface;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metricLog
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskDevice'])) {
            $model->diskDevice = $map['DiskDevice'];
        }
        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MetricData'])) {
            $model->metricData = $map['MetricData'];
        }
        if (isset($map['NetworkInterface'])) {
            $model->networkInterface = $map['NetworkInterface'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
