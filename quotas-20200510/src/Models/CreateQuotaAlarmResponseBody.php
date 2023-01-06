<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\Tea\Model;

class CreateQuotaAlarmResponseBody extends Model
{
    /**
     * @description The ID of the alert.
     *
     * @example 18b3be23-b7b0-4d45-91bc-d0c331aa****
     *
     * @var string
     */
    public $alarmId;

    /**
     * @description The ID of the request.
     *
     * @example BD219E2B-E687-45EE-B5F3-61FB730551B1
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'alarmId'   => 'AlarmId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmId) {
            $res['AlarmId'] = $this->alarmId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateQuotaAlarmResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmId'])) {
            $model->alarmId = $map['AlarmId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
