<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerHealthStatusResponseBody\ruleHealthStatus\serverGroupInfos\nonNormalServers;

use AlibabaCloud\Tea\Model;

class reason extends Model
{
    /**
     * @description 后端实际的返回码信息
     *
     * @var string
     */
    public $actualResponse;

    /**
     * @description 用户预期的后端返回码信息
     *
     * @var string
     */
    public $expectedResponse;

    /**
     * @description 失败reasonCode
     *
     * @var string
     */
    public $reasonCode;
    protected $_name = [
        'actualResponse'   => 'ActualResponse',
        'expectedResponse' => 'ExpectedResponse',
        'reasonCode'       => 'ReasonCode',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return reason
     */
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
