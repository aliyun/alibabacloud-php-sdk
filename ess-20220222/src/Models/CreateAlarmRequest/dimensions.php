<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\CreateAlarmRequest;

use AlibabaCloud\Tea\Model;

class dimensions extends Model
{
    /**
     * @description The dimension key of the metric. The valid values vary based on the metric type.
     *
     *   If you set MetricType to custom, you can specify this parameter based on your business requirements.
     *
     *   If you set MetricType to system, this parameter has the following valid values:
     *
     *   user_id: the ID of your Alibaba Cloud account.
     *   scaling_group: the scaling group that you want to monitor by using the event-triggered task.
     *   device: the NIC type.
     *   state: the status of the TCP connection.
     *
     * @example device
     *
     * @var string
     */
    public $dimensionKey;

    /**
     * @description The dimension value of the metric. The valid values of this parameter vary based on the value of Dimensions.DimensionKey.
     *
     *   If you set MetricType to custom, you can specify this parameter based on your business requirements.
     *
     *   If you set MetricType to system, this parameter has the following valid values:
     *
     *   user_id: The system specifies the value.
     *
     *   scaling_group: The system specifies the value.
     *
     *   device: You can set this parameter to eth0 or eth1.
     *
     *   For instances of the classic network type, eth0 specifies the internal NIC. Only one eth0 NIC exists on each instance that resides in VPCs.
     *   For instances of the classic network type, eth1 specifies the public NIC.
     *
     *   state: You can set this parameter to TCP_TOTAL or ESTABLISHED.
     *
     *   TCP_TOTAL specifies the total number of TCP connections.
     *   ESTABLISHED specifies the number of TCP connections that are established.
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
