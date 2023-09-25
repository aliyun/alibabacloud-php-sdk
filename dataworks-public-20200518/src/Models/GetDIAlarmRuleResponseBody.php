<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDIAlarmRuleResponseBody\DIAlarmRule;
use AlibabaCloud\Tea\Model;

class GetDIAlarmRuleResponseBody extends Model
{
    /**
     * @var DIAlarmRule
     */
    public $DIAlarmRule;

    /**
     * @example 4A807D85-AC9F-55F7-A58F-998D5249CAD9
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DIAlarmRule' => 'DIAlarmRule',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DIAlarmRule) {
            $res['DIAlarmRule'] = null !== $this->DIAlarmRule ? $this->DIAlarmRule->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDIAlarmRuleResponseBody
     */
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
