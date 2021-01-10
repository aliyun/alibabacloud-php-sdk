<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListConnectLogsResponseBody\logs;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $sid;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $time;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $systemVersion;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $netWorking;

    /**
     * @var string
     */
    public $terminal;
    protected $_name = [
        'sid'           => 'Sid',
        'status'        => 'Status',
        'time'          => 'Time',
        'deviceId'      => 'DeviceId',
        'systemVersion' => 'SystemVersion',
        'ip'            => 'Ip',
        'netWorking'    => 'NetWorking',
        'terminal'      => 'Terminal',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sid) {
            $res['Sid'] = $this->sid;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->systemVersion) {
            $res['SystemVersion'] = $this->systemVersion;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->netWorking) {
            $res['NetWorking'] = $this->netWorking;
        }
        if (null !== $this->terminal) {
            $res['Terminal'] = $this->terminal;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Sid'])) {
            $model->sid = $map['Sid'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['SystemVersion'])) {
            $model->systemVersion = $map['SystemVersion'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['NetWorking'])) {
            $model->netWorking = $map['NetWorking'];
        }
        if (isset($map['Terminal'])) {
            $model->terminal = $map['Terminal'];
        }

        return $model;
    }
}
