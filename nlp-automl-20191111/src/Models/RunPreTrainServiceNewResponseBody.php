<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlpautoml\V20191111\Models;

use AlibabaCloud\Tea\Model;

class RunPreTrainServiceNewResponseBody extends Model
{
    /**
     * @var int
     */
    public $billingCount;

    /**
     * @var string
     */
    public $predictResult;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'billingCount'  => 'BillingCount',
        'predictResult' => 'PredictResult',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billingCount) {
            $res['BillingCount'] = $this->billingCount;
        }
        if (null !== $this->predictResult) {
            $res['PredictResult'] = $this->predictResult;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunPreTrainServiceNewResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillingCount'])) {
            $model->billingCount = $map['BillingCount'];
        }
        if (isset($map['PredictResult'])) {
            $model->predictResult = $map['PredictResult'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
