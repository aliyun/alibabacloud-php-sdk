<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models;

use AlibabaCloud\Dara\Model;

class QueryFlowLimitNewResponseBody extends Model
{
    /**
     * @var int
     */
    public $dailyLimit;

    /**
     * @var int
     */
    public $hourLimit;

    /**
     * @var int
     */
    public $minuteLimit;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dailyLimit' => 'DailyLimit',
        'hourLimit' => 'HourLimit',
        'minuteLimit' => 'MinuteLimit',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dailyLimit) {
            $res['DailyLimit'] = $this->dailyLimit;
        }

        if (null !== $this->hourLimit) {
            $res['HourLimit'] = $this->hourLimit;
        }

        if (null !== $this->minuteLimit) {
            $res['MinuteLimit'] = $this->minuteLimit;
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
        if (isset($map['DailyLimit'])) {
            $model->dailyLimit = $map['DailyLimit'];
        }

        if (isset($map['HourLimit'])) {
            $model->hourLimit = $map['HourLimit'];
        }

        if (isset($map['MinuteLimit'])) {
            $model->minuteLimit = $map['MinuteLimit'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
