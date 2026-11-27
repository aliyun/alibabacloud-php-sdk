<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Dara\Model;

class PushDeviceToastMessageShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $accessToken;

    /**
     * @var string
     */
    public $deviceInfoShrink;

    /**
     * @var string
     */
    public $payloadShrink;
    protected $_name = [
        'accessToken' => 'AccessToken',
        'deviceInfoShrink' => 'DeviceInfo',
        'payloadShrink' => 'Payload',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['AccessToken'] = $this->accessToken;
        }

        if (null !== $this->deviceInfoShrink) {
            $res['DeviceInfo'] = $this->deviceInfoShrink;
        }

        if (null !== $this->payloadShrink) {
            $res['Payload'] = $this->payloadShrink;
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
            $model->deviceInfoShrink = $map['DeviceInfo'];
        }

        if (isset($map['Payload'])) {
            $model->payloadShrink = $map['Payload'];
        }

        return $model;
    }
}
