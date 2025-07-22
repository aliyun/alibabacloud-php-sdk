<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Tea\Model;

class GetFundAccountLowAvailableAmountAlarmResponseBody extends Model
{
    /**
     * @var bool
     */
    public $alarmEnabled;

    /**
     * @example {}
     *
     * @var mixed
     */
    public $metadata;

    /**
     * @example 6000EE23-274B-4E07-A697-FF2E999520A4
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 100
     *
     * @var string
     */
    public $thresholdAmount;
    protected $_name = [
        'alarmEnabled' => 'AlarmEnabled',
        'metadata' => 'Metadata',
        'requestId' => 'RequestId',
        'thresholdAmount' => 'ThresholdAmount',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return GetFundAccountLowAvailableAmountAlarmResponseBody
     */
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
