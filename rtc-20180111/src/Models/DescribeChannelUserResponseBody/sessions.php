<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelUserResponseBody;

use AlibabaCloud\Tea\Model;

class sessions extends Model
{
    /**
     * @example 1557909133
     *
     * @var int
     */
    public $joined;

    /**
     * @example xa744sxx8rtobgj****
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example 1811****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'joined'    => 'Joined',
        'sessionId' => 'SessionId',
        'userId'    => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->joined) {
            $res['Joined'] = $this->joined;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sessions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Joined'])) {
            $model->joined = $map['Joined'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
