<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class SendDtmfSignalingRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $dtmf;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'userId'     => 'UserId',
        'deviceId'   => 'DeviceId',
        'jobId'      => 'JobId',
        'channelId'  => 'ChannelId',
        'dtmf'       => 'Dtmf',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->dtmf) {
            $res['Dtmf'] = $this->dtmf;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendDtmfSignalingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['Dtmf'])) {
            $model->dtmf = $map['Dtmf'];
        }

        return $model;
    }
}
