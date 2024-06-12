<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeAlarmsResponseBody\alarmList;

use AlibabaCloud\Tea\Model;

class dimensions extends Model
{
    /**
     * @description The dimension key of the metric. Valid values:
     *
     *   user_id: the ID of your Alibaba Cloud account.
     *   scaling_group: the scaling group that is monitored by the event-triggered task.
     *   device: the NIC type.
     *   state: the status of the TCP connection.
     *
     * @example device
     *
     * @var string
     */
    public $dimensionKey;

    /**
     * @description The dimension value of the metric. The value of DimensionValue varies based on the value of DimensionKey.
     *
     *   If you set DimensionKey to `user_id`, the system specifies the value of DimensionValue.
     *
     *   If you set DimensionKey to `scaling_group`, the system specifies the value of DimensionValue.
     *
     *   If you set DimensionKey to `device`, you can set DimensionValue to eth0 or eth1.
     *
     *   For instances of the classic network type, eth0 indicates the internal NIC. Only one eth0 NIC exists on each instance that resides in VPCs.
     *   For instances of the classic network type, eth1 indicates the public NIC.
     *
     *   If you set DimensionKey to `state`, you can set DimensionValue to TCP_TOTAL or ESTABLISHED.
     *
     *   TCP_TOTAL indicates the total number of TCP connections.
     *   ESTABLISHED indicates the number of TCP connections that are established.
     *
     * @example eth0
     *
     * @var string
     */
    public $dimensionValue;
    protected $_name = [
        'dimensionKey'   => 'DimensionKey',
        'dimensionValue' => 'DimensionValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dimensionKey) {
            $res['DimensionKey'] = $this->dimensionKey;
        }
        if (null !== $this->dimensionValue) {
            $res['DimensionValue'] = $this->dimensionValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dimensions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DimensionKey'])) {
            $model->dimensionKey = $map['DimensionKey'];
        }
        if (isset($map['DimensionValue'])) {
            $model->dimensionValue = $map['DimensionValue'];
        }

        return $model;
    }
}
