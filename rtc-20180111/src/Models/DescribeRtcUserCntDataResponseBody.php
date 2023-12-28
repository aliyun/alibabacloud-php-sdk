<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcUserCntDataResponseBody\userCntDataPerInterval;
use AlibabaCloud\Tea\Model;

class DescribeRtcUserCntDataResponseBody extends Model
{
    /**
     * @example 16A96B9A-F203-4EC5-8E43-CB92E68F4CD8
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->userCntDataPerInterval) {
            $res['UserCntDataPerInterval'] = null !== $this->userCntDataPerInterval ? $this->userCntDataPerInterval->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRtcUserCntDataResponseBody
     */
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
