<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\GetCloudMetricLogsResponseBody\metricLogs;

use AlibabaCloud\Tea\Model;

class metricLog extends Model
{
    /**
     * @example vda1
     *
     * @var string
     */
    public $diskDevice;

    /**
     * @example compute000
     *
     * @var string
     */
    public $hostname;

    /**
     * @example i-bp132g97g7zwnvta****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example {\"process|cpusage\":0,\"process|cpuser\":0,\"process|cpusys\":0,******}
     *
     * @var string
     */
    public $metricData;

    /**
     * @example eth1
     *
     * @var string
     */
    public $networkInterface;

    /**
     * @example 1583907780
     *
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
