<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcUserCntDataResponseBody\userCntDataPerInterval;

class DescribeRtcUserCntDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var userCntDataPerInterval
     */
    public $userCntDataPerInterval;
    protected $_name = [
        'requestId'              => 'RequestId',
        'userCntDataPerInterval' => 'UserCntDataPerInterval',
    ];

    public function validate()
    {
        if (null !== $this->userCntDataPerInterval) {
            $this->userCntDataPerInterval->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->userCntDataPerInterval) {
            $res['UserCntDataPerInterval'] = null !== $this->userCntDataPerInterval ? $this->userCntDataPerInterval->toArray($noStream) : $this->userCntDataPerInterval;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UserCntDataPerInterval'])) {
            $model->userCntDataPerInterval = userCntDataPerInterval::fromMap($map['UserCntDataPerInterval']);
        }

        return $model;
    }
}
