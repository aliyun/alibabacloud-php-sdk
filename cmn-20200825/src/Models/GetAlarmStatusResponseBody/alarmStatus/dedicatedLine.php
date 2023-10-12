<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\GetAlarmStatusResponseBody\alarmStatus;

use AlibabaCloud\Tea\Model;

class dedicatedLine extends Model
{
    /**
     * @example 100
     *
     * @var string
     */
    public $bandwidth;

    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $dedicatedLineGateway;

    /**
     * @example 银泰武林店_电信
     *
     * @var string
     */
    public $dedicatedLineName;

    /**
     * @example device-jrjb476ub06
     *
     * @var string
     */
    public $deviceId;

    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $ip;

    /**
     * @example GigabitEthernet1/0/0
     *
     * @var string
     */
    public $portName;

    /**
     * @example 银泰武林店
     *
     * @var string
     */
    public $space;
    protected $_name = [
        'bandwidth'            => 'Bandwidth',
        'dedicatedLineGateway' => 'DedicatedLineGateway',
        'dedicatedLineName'    => 'DedicatedLineName',
        'deviceId'             => 'DeviceId',
        'ip'                   => 'Ip',
        'portName'             => 'PortName',
        'space'                => 'Space',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->dedicatedLineGateway) {
            $res['DedicatedLineGateway'] = $this->dedicatedLineGateway;
        }
        if (null !== $this->dedicatedLineName) {
            $res['DedicatedLineName'] = $this->dedicatedLineName;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->portName) {
            $res['PortName'] = $this->portName;
        }
        if (null !== $this->space) {
            $res['Space'] = $this->space;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dedicatedLine
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['DedicatedLineGateway'])) {
            $model->dedicatedLineGateway = $map['DedicatedLineGateway'];
        }
        if (isset($map['DedicatedLineName'])) {
            $model->dedicatedLineName = $map['DedicatedLineName'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['PortName'])) {
            $model->portName = $map['PortName'];
        }
        if (isset($map['Space'])) {
            $model->space = $map['Space'];
        }

        return $model;
    }
}
