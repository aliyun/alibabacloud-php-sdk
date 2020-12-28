<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\GetCloudMetricLogsResponseBody;

use AlibabaCloud\Tea\Model;

class metricLogs extends Model
{
    /**
     * @var int
     */
    public $time;

    /**
     * @var string
     */
    public $diskDevice;

    /**
     * @var string
     */
    public $networkInterface;

    /**
     * @var string
     */
    public $metricData;

    /**
     * @var string
     */
    public $hostname;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'time'             => 'Time',
        'diskDevice'       => 'DiskDevice',
        'networkInterface' => 'NetworkInterface',
        'metricData'       => 'MetricData',
        'hostname'         => 'Hostname',
        'instanceId'       => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->diskDevice) {
            $res['DiskDevice'] = $this->diskDevice;
        }
        if (null !== $this->networkInterface) {
            $res['NetworkInterface'] = $this->networkInterface;
        }
        if (null !== $this->metricData) {
            $res['MetricData'] = $this->metricData;
        }
        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metricLogs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['DiskDevice'])) {
            $model->diskDevice = $map['DiskDevice'];
        }
        if (isset($map['NetworkInterface'])) {
            $model->networkInterface = $map['NetworkInterface'];
        }
        if (isset($map['MetricData'])) {
            $model->metricData = $map['MetricData'];
        }
        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
