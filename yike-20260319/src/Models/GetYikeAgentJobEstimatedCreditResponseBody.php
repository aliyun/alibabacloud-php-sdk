<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260319\Models;

use AlibabaCloud\Dara\Model;

class GetYikeAgentJobEstimatedCreditResponseBody extends Model
{
    /**
     * @var float
     */
    public $estimatedCreditCost;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'estimatedCreditCost' => 'EstimatedCreditCost',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->estimatedCreditCost) {
            $res['EstimatedCreditCost'] = $this->estimatedCreditCost;
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
        if (isset($map['EstimatedCreditCost'])) {
            $model->estimatedCreditCost = $map['EstimatedCreditCost'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
