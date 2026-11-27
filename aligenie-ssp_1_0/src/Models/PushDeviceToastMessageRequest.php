<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\PushDeviceToastMessageRequest\deviceInfo;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\PushDeviceToastMessageRequest\payload;

class PushDeviceToastMessageRequest extends Model
{
    /**
     * @var string
     */
    public $accessToken;

    /**
     * @var deviceInfo
     */
    public $deviceInfo;

    /**
     * @var payload
     */
    public $payload;
    protected $_name = [
        'accessToken' => 'AccessToken',
        'deviceInfo' => 'DeviceInfo',
        'payload' => 'Payload',
    ];

    public function validate()
    {
        if (null !== $this->deviceInfo) {
            $this->deviceInfo->validate();
        }
        if (null !== $this->payload) {
            $this->payload->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['AccessToken'] = $this->accessToken;
        }

        if (null !== $this->deviceInfo) {
            $res['DeviceInfo'] = null !== $this->deviceInfo ? $this->deviceInfo->toArray($noStream) : $this->deviceInfo;
        }

        if (null !== $this->payload) {
            $res['Payload'] = null !== $this->payload ? $this->payload->toArray($noStream) : $this->payload;
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
        if (isset($map['AccessToken'])) {
            $model->accessToken = $map['AccessToken'];
        }

        if (isset($map['DeviceInfo'])) {
            $model->deviceInfo = deviceInfo::fromMap($map['DeviceInfo']);
        }

        if (isset($map['Payload'])) {
            $model->payload = payload::fromMap($map['Payload']);
        }

        return $model;
    }
}
