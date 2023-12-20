<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryVisionDeviceInfoResponseBody\data;

use AlibabaCloud\Tea\Model;

class rtmpDeviceInfo extends Model
{
    /**
     * @var string
     */
    public $pullAuthKey;

    /**
     * @var int
     */
    public $pullKeyExpireTime;

    /**
     * @var string
     */
    public $pushAuthKey;

    /**
     * @var int
     */
    public $pushKeyExpireTime;

    /**
     * @var string
     */
    public $pushUrlSample;

    /**
     * @var string
     */
    public $streamName;

    /**
     * @var int
     */
    public $streamStatus;
    protected $_name = [
        'pullAuthKey'       => 'PullAuthKey',
        'pullKeyExpireTime' => 'PullKeyExpireTime',
        'pushAuthKey'       => 'PushAuthKey',
        'pushKeyExpireTime' => 'PushKeyExpireTime',
        'pushUrlSample'     => 'PushUrlSample',
        'streamName'        => 'StreamName',
        'streamStatus'      => 'StreamStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pullAuthKey) {
            $res['PullAuthKey'] = $this->pullAuthKey;
        }
        if (null !== $this->pullKeyExpireTime) {
            $res['PullKeyExpireTime'] = $this->pullKeyExpireTime;
        }
        if (null !== $this->pushAuthKey) {
            $res['PushAuthKey'] = $this->pushAuthKey;
        }
        if (null !== $this->pushKeyExpireTime) {
            $res['PushKeyExpireTime'] = $this->pushKeyExpireTime;
        }
        if (null !== $this->pushUrlSample) {
            $res['PushUrlSample'] = $this->pushUrlSample;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->streamStatus) {
            $res['StreamStatus'] = $this->streamStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rtmpDeviceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PullAuthKey'])) {
            $model->pullAuthKey = $map['PullAuthKey'];
        }
        if (isset($map['PullKeyExpireTime'])) {
            $model->pullKeyExpireTime = $map['PullKeyExpireTime'];
        }
        if (isset($map['PushAuthKey'])) {
            $model->pushAuthKey = $map['PushAuthKey'];
        }
        if (isset($map['PushKeyExpireTime'])) {
            $model->pushKeyExpireTime = $map['PushKeyExpireTime'];
        }
        if (isset($map['PushUrlSample'])) {
            $model->pushUrlSample = $map['PushUrlSample'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['StreamStatus'])) {
            $model->streamStatus = $map['StreamStatus'];
        }

        return $model;
    }
}
