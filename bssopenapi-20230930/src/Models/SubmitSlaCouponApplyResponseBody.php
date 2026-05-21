<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;

class SubmitSlaCouponApplyResponseBody extends Model
{
    /**
     * @var mixed
     */
    public $metadata;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var float
     */
    public $sumCoupon;

    /**
     * @var string
     */
    public $validEndTime;

    /**
     * @var string
     */
    public $validStartTime;
    protected $_name = [
        'metadata' => 'Metadata',
        'requestId' => 'RequestId',
        'sumCoupon' => 'SumCoupon',
        'validEndTime' => 'ValidEndTime',
        'validStartTime' => 'ValidStartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sumCoupon) {
            $res['SumCoupon'] = $this->sumCoupon;
        }

        if (null !== $this->validEndTime) {
            $res['ValidEndTime'] = $this->validEndTime;
        }

        if (null !== $this->validStartTime) {
            $res['ValidStartTime'] = $this->validStartTime;
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
        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SumCoupon'])) {
            $model->sumCoupon = $map['SumCoupon'];
        }

        if (isset($map['ValidEndTime'])) {
            $model->validEndTime = $map['ValidEndTime'];
        }

        if (isset($map['ValidStartTime'])) {
            $model->validStartTime = $map['ValidStartTime'];
        }

        return $model;
    }
}
