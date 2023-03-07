<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\GetCloudMetricLogsResponseBody\metricLogs;

use AlibabaCloud\Tea\Model;

class metricLog extends Model
{
    /**
     * @description The name of the disk.
     *
     * @example vda1
     *
     * @var string
     */
    public $diskDevice;

    /**
     * @description The hostname of the node.
     *
     * @example compute000
     *
     * @var string
     */
    public $hostname;

    /**
     * @description The ID of the node.
     *
     * @example i-bp132g97g7zwnvta****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description A JSON-serialized string that contains values for multiple performance metrics.
     *
     * @example {\"process|cpusage\":0,\"process|cpuser\":0,\"process|cpusys\":0,******}
     *
     * @var string
     */
    public $metricData;

    /**
     * @description The name of the network interface.
     *
     * @example eth1
     *
     * @var string
     */
    public $networkInterface;

    /**
     * @description The timestamp of the log. This value is a UNIX timestamp representing the number of seconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     *
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
