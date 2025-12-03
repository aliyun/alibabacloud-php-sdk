<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bss\V20140714\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Bss\V20140714\Models\DescribeCouponListResponseBody\coupons;

class DescribeCouponListResponseBody extends Model
{
    /**
     * @var coupons
     */
    public $coupons;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'coupons' => 'Coupons',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->coupons) {
            $this->coupons->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->coupons) {
            $res['Coupons'] = null !== $this->coupons ? $this->coupons->toArray($noStream) : $this->coupons;
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
        if (isset($map['Coupons'])) {
            $model->coupons = coupons::fromMap($map['Coupons']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
