<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelUserResponseBody;

use AlibabaCloud\Dara\Model;

class sessions extends Model
{
    /**
     * @var int
     */
    public $joined;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'joined' => 'Joined',
        'sessionId' => 'SessionId',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
