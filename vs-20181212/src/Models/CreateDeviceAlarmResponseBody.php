<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;

class CreateDeviceAlarmResponseBody extends Model
{
    /**
     * @var int
     */
    public $alarmDelay;

    /**
     * @var string
     */
    public $alarmId;

    /**
     * @var int
     */
    public $expire;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'alarmDelay' => 'AlarmDelay',
        'alarmId' => 'AlarmId',
        'expire' => 'Expire',
        'requestId' => 'RequestId',
        'url' => 'Url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarmDelay) {
            $res['AlarmDelay'] = $this->alarmDelay;
        }

        if (null !== $this->alarmId) {
            $res['AlarmId'] = $this->alarmId;
        }

        if (null !== $this->expire) {
            $res['Expire'] = $this->expire;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['AlarmDelay'])) {
            $model->alarmDelay = $map['AlarmDelay'];
        }

        if (isset($map['AlarmId'])) {
            $model->alarmId = $map['AlarmId'];
        }

        if (isset($map['Expire'])) {
            $model->expire = $map['Expire'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
