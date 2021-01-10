<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models;

use AlibabaCloud\Tea\Model;

class JoinLiveRequest extends Model
{
    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $rtcCode;
    protected $_name = [
        'userId'  => 'UserId',
        'channel' => 'Channel',
        'rtcCode' => 'RtcCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }
        if (null !== $this->rtcCode) {
            $res['RtcCode'] = $this->rtcCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return JoinLiveRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }
        if (isset($map['RtcCode'])) {
            $model->rtcCode = $map['RtcCode'];
        }

        return $model;
    }
}
