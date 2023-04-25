<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class SendDtmfSignalingRequest extends Model
{
    /**
     * @example ch:customer:0108989****->1318888****:1609234221870:job-6573574060089****
     *
     * @var string
     */
    public $channelId;

    /**
     * @example device
     *
     * @var string
     */
    public $deviceId;

    /**
     * @example 5
     *
     * @var string
     */
    public $dtmf;

    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example job-6573574060089****
     *
     * @var string
     */
    public $jobId;

    /**
     * @example agent@ccc-test
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'channelId'  => 'ChannelId',
        'deviceId'   => 'DeviceId',
        'dtmf'       => 'Dtmf',
        'instanceId' => 'InstanceId',
        'jobId'      => 'JobId',
        'userId'     => 'UserId',
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
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->dtmf) {
            $res['Dtmf'] = $this->dtmf;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['Dtmf'])) {
            $model->dtmf = $map['Dtmf'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
