<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models;

use AlibabaCloud\Dara\Model;

class QueryPrevLimitNewResponseBody extends Model
{
    /**
     * @var int
     */
    public $hourLimit;

    /**
     * @var int
     */
    public $increaseRate;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $successRate;
    protected $_name = [
        'hourLimit' => 'HourLimit',
        'increaseRate' => 'IncreaseRate',
        'requestId' => 'RequestId',
        'successRate' => 'SuccessRate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hourLimit) {
            $res['HourLimit'] = $this->hourLimit;
        }

        if (null !== $this->increaseRate) {
            $res['IncreaseRate'] = $this->increaseRate;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->successRate) {
            $res['SuccessRate'] = $this->successRate;
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
        if (isset($map['HourLimit'])) {
            $model->hourLimit = $map['HourLimit'];
        }

        if (isset($map['IncreaseRate'])) {
            $model->increaseRate = $map['IncreaseRate'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SuccessRate'])) {
            $model->successRate = $map['SuccessRate'];
        }

        return $model;
    }
}
