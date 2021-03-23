<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListConnectLogsResponseBody\logs;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
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
    public $terminal;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $netWorking;

    /**
     * @var int
     */
    public $time;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $sid;
    protected $_name = [
        'deviceId'      => 'DeviceId',
        'systemVersion' => 'SystemVersion',
        'terminal'      => 'Terminal',
        'ip'            => 'Ip',
        'netWorking'    => 'NetWorking',
        'time'          => 'Time',
        'status'        => 'Status',
        'sid'           => 'Sid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->systemVersion) {
            $res['SystemVersion'] = $this->systemVersion;
        }
        if (null !== $this->terminal) {
            $res['Terminal'] = $this->terminal;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->netWorking) {
            $res['NetWorking'] = $this->netWorking;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->sid) {
            $res['Sid'] = $this->sid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['SystemVersion'])) {
            $model->systemVersion = $map['SystemVersion'];
        }
        if (isset($map['Terminal'])) {
            $model->terminal = $map['Terminal'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['NetWorking'])) {
            $model->netWorking = $map['NetWorking'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Sid'])) {
            $model->sid = $map['Sid'];
        }

        return $model;
    }
}
