<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerHealthStatusResponseBody\listenerHealthStatus\serverGroupInfos\nonNormalServers;

use AlibabaCloud\Dara\Model;

class reason extends Model
{
    /**
     * @var string
     */
    public $actualResponse;

    /**
     * @var string
     */
    public $expectedResponse;

    /**
     * @var string
     */
    public $reasonCode;
    protected $_name = [
        'actualResponse' => 'ActualResponse',
        'expectedResponse' => 'ExpectedResponse',
        'reasonCode' => 'ReasonCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actualResponse) {
            $res['ActualResponse'] = $this->actualResponse;
        }

        if (null !== $this->expectedResponse) {
            $res['ExpectedResponse'] = $this->expectedResponse;
        }

        if (null !== $this->reasonCode) {
            $res['ReasonCode'] = $this->reasonCode;
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
        if (isset($map['ActualResponse'])) {
            $model->actualResponse = $map['ActualResponse'];
        }

        if (isset($map['ExpectedResponse'])) {
            $model->expectedResponse = $map['ExpectedResponse'];
        }

        if (isset($map['ReasonCode'])) {
            $model->reasonCode = $map['ReasonCode'];
        }

        return $model;
    }
}
