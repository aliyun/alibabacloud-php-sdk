<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class CreateDeviceAlarmResponseBody extends Model
{
    /**
     * @example 60
     *
     * @var int
     */
    public $alarmDelay;

    /**
     * @example 0hyNgTdgv2D000195842
     *
     * @var string
     */
    public $alarmId;

    /**
     * @example 3600
     *
     * @var int
     */
    public $expire;

    /**
     * @example 76E11E6A-4441-51C9-AF60-D354362257A7
     *
     * @var string
     */
    public $requestId;

    /**
     * @example rtmp://demo.aliyundoc.com/live/310101*****7542007?auth_key=1639130258-0-0-b2b04fe85ece6*****a6b1a42bc7e
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'alarmDelay' => 'AlarmDelay',
        'alarmId'    => 'AlarmId',
        'expire'     => 'Expire',
        'requestId'  => 'RequestId',
        'url'        => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CreateDeviceAlarmResponseBody
     */
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
