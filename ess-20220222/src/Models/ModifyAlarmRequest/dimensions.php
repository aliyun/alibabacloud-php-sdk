<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\ModifyAlarmRequest;

use AlibabaCloud\Tea\Model;

class dimensions extends Model
{
    /**
     * @description The dimension key of the metric. Valid values of DimensionKey vary based on the value of MetricType.
     *
     *   If you set MetricType to custom, you can specify this parameter based on your business requirements.
     *
     *   If you set MetricType to system, DimensionKey has the following valid values:
     *
     *   user_id: the ID of your Alibaba Cloud account
     *   scaling_group: the scaling group that is monitored by the event-triggered task.
     *   device: the type of the NIC.
     *   state: the state of the TCP connection
     *
     * @example device
     *
     * @var string
     */
    public $dimensionKey;

    /**
     * @description The dimension value of the metric. Valid values of DimensionValue vary based on the value of DimensionKey.
     *
     *   If you set MetricType to custom, you can specify this parameter based on your business requirements.
     *
     *   If you set MetricType to system, DimensionKey has the following valid values:
     *
     *   user_id: The system specifies the value.
     *
     *   scaling_group: The system specifies the value.
     *
     *   If you set DimensionKey to device, you can set DimensionValue to eth0 or eth1.
     *
     *   For instances that reside in the classic network, eth0 specifies the internal NIC. Only one eth0 NIC exists on each instance that resides in a VPC.
     *   For instances that reside in the classic network, eth1 specifies the public NIC.
     *
     *   If you set DimensionKey to state, you can set DimensionValue to TCP_TOTAL or ESTABLISHED.
     *
     *   TCP_TOTAL specifies the total number of TCP connections.
     *   ESTABLISHED specifies the number of established TCP connections.
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
