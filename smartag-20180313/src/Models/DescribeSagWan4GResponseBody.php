<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Dara\Model;

class DescribeSagWan4GResponseBody extends Model
{
    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $mac;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $strength;

    /**
     * @var string
     */
    public $trafficState;
    protected $_name = [
        'ip' => 'Ip',
        'mac' => 'Mac',
        'priority' => 'Priority',
        'requestId' => 'RequestId',
        'status' => 'Status',
        'strength' => 'Strength',
        'trafficState' => 'TrafficState',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        if (null !== $this->mac) {
            $res['Mac'] = $this->mac;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->strength) {
            $res['Strength'] = $this->strength;
        }

        if (null !== $this->trafficState) {
            $res['TrafficState'] = $this->trafficState;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        if (isset($map['Mac'])) {
            $model->mac = $map['Mac'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Strength'])) {
            $model->strength = $map['Strength'];
        }

        if (isset($map['TrafficState'])) {
            $model->trafficState = $map['TrafficState'];
        }

        return $model;
    }
}
