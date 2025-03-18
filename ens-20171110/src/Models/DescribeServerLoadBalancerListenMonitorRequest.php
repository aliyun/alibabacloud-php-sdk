<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeServerLoadBalancerListenMonitorRequest extends Model
{
    /**
     * @description The end of the time range to query. The maximum range between StartTime and EndTime is 24 hours.
     *
     * This parameter is required.
     *
     * @example 2024-05-16 16:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the ELB instance.
     *
     * This parameter is required.
     *
     * @example lb-5rcvo1n1t3hykfhhjwjgqp****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description The request protocol, such as http, https, or tcp.
     *
     * @example tcp
     *
     * @var string
     */
    public $proto;

    /**
     * @description The beginning of the time range to query. Specify the time in the yyyy-MM-ddTHH:mm:ssZ format.
     *
     * This parameter is required.
     *
     * @example 2024-05-16 15:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The virtual IP address (VIP) port, such as 80, 8080, or 443.
     *
     * @example 80
     *
     * @var string
     */
    public $VPort;
    protected $_name = [
        'endTime' => 'EndTime',
        'loadBalancerId' => 'LoadBalancerId',
        'proto' => 'Proto',
        'startTime' => 'StartTime',
        'VPort' => 'VPort',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->proto) {
            $res['Proto'] = $this->proto;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->VPort) {
            $res['VPort'] = $this->VPort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServerLoadBalancerListenMonitorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['Proto'])) {
            $model->proto = $map['Proto'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['VPort'])) {
            $model->VPort = $map['VPort'];
        }

        return $model;
    }
}
