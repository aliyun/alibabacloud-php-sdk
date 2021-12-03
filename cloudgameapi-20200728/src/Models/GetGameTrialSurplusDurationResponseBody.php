<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models;

use AlibabaCloud\Tea\Model;

class GetGameTrialSurplusDurationResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 状态
     *
     * @var float
     */
    public $status;

    /**
     * @description 剩余试玩时长
     *
     * @var float
     */
    public $surplusDuration;
    protected $_name = [
        'requestId'       => 'RequestId',
        'status'          => 'Status',
        'surplusDuration' => 'SurplusDuration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->surplusDuration) {
            $res['SurplusDuration'] = $this->surplusDuration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetGameTrialSurplusDurationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SurplusDuration'])) {
            $model->surplusDuration = $map['SurplusDuration'];
        }

        return $model;
    }
}
