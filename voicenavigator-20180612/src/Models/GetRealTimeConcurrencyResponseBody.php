<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Tea\Model;

class GetRealTimeConcurrencyResponseBody extends Model
{
    /**
     * @var int
     */
    public $maxConcurrency;

    /**
     * @var int
     */
    public $realTimeConcurrency;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'maxConcurrency'      => 'MaxConcurrency',
        'realTimeConcurrency' => 'RealTimeConcurrency',
        'requestId'           => 'RequestId',
        'timestamp'           => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxConcurrency) {
            $res['MaxConcurrency'] = $this->maxConcurrency;
        }
        if (null !== $this->realTimeConcurrency) {
            $res['RealTimeConcurrency'] = $this->realTimeConcurrency;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRealTimeConcurrencyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxConcurrency'])) {
            $model->maxConcurrency = $map['MaxConcurrency'];
        }
        if (isset($map['RealTimeConcurrency'])) {
            $model->realTimeConcurrency = $map['RealTimeConcurrency'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
