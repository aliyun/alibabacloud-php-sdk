<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;

class GetFundAccountLowAvailableAmountAlarmResponseBody extends Model
{
    /**
     * @var bool
     */
    public $alarmEnabled;
    /**
     * @var mixed
     */
    public $metadata;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $thresholdAmount;
    protected $_name = [
        'alarmEnabled'    => 'AlarmEnabled',
        'metadata'        => 'Metadata',
        'requestId'       => 'RequestId',
        'thresholdAmount' => 'ThresholdAmount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarmEnabled) {
            $res['AlarmEnabled'] = $this->alarmEnabled;
        }

        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->thresholdAmount) {
            $res['ThresholdAmount'] = $this->thresholdAmount;
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
        if (isset($map['AlarmEnabled'])) {
            $model->alarmEnabled = $map['AlarmEnabled'];
        }

        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ThresholdAmount'])) {
            $model->thresholdAmount = $map['ThresholdAmount'];
        }

        return $model;
    }
}
