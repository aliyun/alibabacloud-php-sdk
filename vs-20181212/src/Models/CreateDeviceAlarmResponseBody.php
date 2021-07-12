<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class CreateDeviceAlarmResponseBody extends Model
{
    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $alarmId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $expire;

    /**
     * @var int
     */
    public $alarmDelay;
    protected $_name = [
        'url'        => 'Url',
        'alarmId'    => 'AlarmId',
        'requestId'  => 'RequestId',
        'expire'     => 'Expire',
        'alarmDelay' => 'AlarmDelay',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->alarmId) {
            $res['AlarmId'] = $this->alarmId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->expire) {
            $res['Expire'] = $this->expire;
        }
        if (null !== $this->alarmDelay) {
            $res['AlarmDelay'] = $this->alarmDelay;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDeviceAlarmResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['AlarmId'])) {
            $model->alarmId = $map['AlarmId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Expire'])) {
            $model->expire = $map['Expire'];
        }
        if (isset($map['AlarmDelay'])) {
            $model->alarmDelay = $map['AlarmDelay'];
        }

        return $model;
    }
}
