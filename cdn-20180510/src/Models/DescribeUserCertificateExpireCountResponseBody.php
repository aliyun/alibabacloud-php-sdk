<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeUserCertificateExpireCountResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $expireWithin30DaysCount;

    /**
     * @var int
     */
    public $expiredCount;
    protected $_name = [
        'requestId'               => 'RequestId',
        'expireWithin30DaysCount' => 'ExpireWithin30DaysCount',
        'expiredCount'            => 'ExpiredCount',
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
        if (null !== $this->expireWithin30DaysCount) {
            $res['ExpireWithin30DaysCount'] = $this->expireWithin30DaysCount;
        }
        if (null !== $this->expiredCount) {
            $res['ExpiredCount'] = $this->expiredCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserCertificateExpireCountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ExpireWithin30DaysCount'])) {
            $model->expireWithin30DaysCount = $map['ExpireWithin30DaysCount'];
        }
        if (isset($map['ExpiredCount'])) {
            $model->expiredCount = $map['ExpiredCount'];
        }

        return $model;
    }
}
