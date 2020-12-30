<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Tea\Model;

class DescribeSagWan4GResponseBody extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $trafficState;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $strength;

    /**
     * @var string
     */
    public $mac;
    protected $_name = [
        'status'       => 'Status',
        'trafficState' => 'TrafficState',
        'requestId'    => 'RequestId',
        'priority'     => 'Priority',
        'ip'           => 'Ip',
        'strength'     => 'Strength',
        'mac'          => 'Mac',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->trafficState) {
            $res['TrafficState'] = $this->trafficState;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->strength) {
            $res['Strength'] = $this->strength;
        }
        if (null !== $this->mac) {
            $res['Mac'] = $this->mac;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSagWan4GResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TrafficState'])) {
            $model->trafficState = $map['TrafficState'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Strength'])) {
            $model->strength = $map['Strength'];
        }
        if (isset($map['Mac'])) {
            $model->mac = $map['Mac'];
        }

        return $model;
    }
}
