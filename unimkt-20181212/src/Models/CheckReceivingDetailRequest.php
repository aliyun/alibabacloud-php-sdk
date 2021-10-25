<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\UniMkt\V20181212\Models;

use AlibabaCloud\Tea\Model;

class CheckReceivingDetailRequest extends Model
{
    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $deviceCode;

    /**
     * @var string
     */
    public $v;
    protected $_name = [
        'channelId'  => 'ChannelId',
        'deviceCode' => 'DeviceCode',
        'v'          => 'V',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->deviceCode) {
            $res['DeviceCode'] = $this->deviceCode;
        }
        if (null !== $this->v) {
            $res['V'] = $this->v;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckReceivingDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['DeviceCode'])) {
            $model->deviceCode = $map['DeviceCode'];
        }
        if (isset($map['V'])) {
            $model->v = $map['V'];
        }

        return $model;
    }
}
