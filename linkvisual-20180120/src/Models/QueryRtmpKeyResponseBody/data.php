<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryRtmpKeyResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
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
    public $streamName;
    protected $_name = [
        'pullAuthKey'       => 'PullAuthKey',
        'pullKeyExpireTime' => 'PullKeyExpireTime',
        'pushAuthKey'       => 'PushAuthKey',
        'pushKeyExpireTime' => 'PushKeyExpireTime',
        'streamName'        => 'StreamName',
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
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
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
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }

        return $model;
    }
}
