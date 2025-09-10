<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quotas\V20200510\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Quotas\V20200510\Models\GetQuotaAlarmResponseBody\quotaAlarm;

class GetQuotaAlarmResponseBody extends Model
{
    /**
     * @var quotaAlarm
     */
    public $quotaAlarm;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'quotaAlarm' => 'QuotaAlarm',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->quotaAlarm) {
            $this->quotaAlarm->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->quotaAlarm) {
            $res['QuotaAlarm'] = null !== $this->quotaAlarm ? $this->quotaAlarm->toArray($noStream) : $this->quotaAlarm;
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
        if (isset($map['QuotaAlarm'])) {
            $model->quotaAlarm = quotaAlarm::fromMap($map['QuotaAlarm']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
