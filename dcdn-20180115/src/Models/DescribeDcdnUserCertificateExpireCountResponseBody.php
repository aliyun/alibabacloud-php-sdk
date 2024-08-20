<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnUserCertificateExpireCountResponseBody extends Model
{
    /**
     * @description The number of domain names whose SSL certificates are about to expire within 30 days.
     *
     * @example 0
     *
     * @var int
     */
    public $expireWithin30DaysCount;

    /**
     * @description The number of domain names whose SSL certificates have already expired.
     *
     * @example 6
     *
     * @var int
     */
    public $expiredCount;

    /**
     * @description The ID of the request.
     *
     * @example F5E8DF64-7175-4186-9B06-F002C0BBD0C5
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'expireWithin30DaysCount' => 'ExpireWithin30DaysCount',
        'expiredCount'            => 'ExpiredCount',
        'requestId'               => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expireWithin30DaysCount) {
            $res['ExpireWithin30DaysCount'] = $this->expireWithin30DaysCount;
        }
        if (null !== $this->expiredCount) {
            $res['ExpiredCount'] = $this->expiredCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnUserCertificateExpireCountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpireWithin30DaysCount'])) {
            $model->expireWithin30DaysCount = $map['ExpireWithin30DaysCount'];
        }
        if (isset($map['ExpiredCount'])) {
            $model->expiredCount = $map['ExpiredCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
