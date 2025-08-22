<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Dara\Model;

class DescribeDcdnUserCertificateExpireCountResponseBody extends Model
{
    /**
     * @var int
     */
    public $expireWithin30DaysCount;

    /**
     * @var int
     */
    public $expiredCount;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'expireWithin30DaysCount' => 'ExpireWithin30DaysCount',
        'expiredCount' => 'ExpiredCount',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
