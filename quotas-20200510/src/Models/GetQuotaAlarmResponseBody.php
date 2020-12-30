<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\SDK\Quotas\V20200510\Models\GetQuotaAlarmResponseBody\quotaAlarm;
use AlibabaCloud\Tea\Model;

class GetQuotaAlarmResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var quotaAlarm
     */
    public $quotaAlarm;
    protected $_name = [
        'requestId'  => 'RequestId',
        'quotaAlarm' => 'QuotaAlarm',
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
        if (null !== $this->quotaAlarm) {
            $res['QuotaAlarm'] = null !== $this->quotaAlarm ? $this->quotaAlarm->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetQuotaAlarmResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['QuotaAlarm'])) {
            $model->quotaAlarm = quotaAlarm::fromMap($map['QuotaAlarm']);
        }

        return $model;
    }
}
