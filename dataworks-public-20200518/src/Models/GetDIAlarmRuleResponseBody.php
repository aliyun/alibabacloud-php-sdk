<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDIAlarmRuleResponseBody\DIAlarmRule;

class GetDIAlarmRuleResponseBody extends Model
{
    /**
     * @var DIAlarmRule
     */
    public $DIAlarmRule;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DIAlarmRule' => 'DIAlarmRule',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->DIAlarmRule) {
            $this->DIAlarmRule->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DIAlarmRule) {
            $res['DIAlarmRule'] = null !== $this->DIAlarmRule ? $this->DIAlarmRule->toArray($noStream) : $this->DIAlarmRule;
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
        if (isset($map['DIAlarmRule'])) {
            $model->DIAlarmRule = DIAlarmRule::fromMap($map['DIAlarmRule']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
