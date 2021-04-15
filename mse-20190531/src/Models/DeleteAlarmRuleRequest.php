<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class DeleteAlarmRuleRequest extends Model
{
    /**
     * @var string
     */
    public $requestPars;

    /**
     * @var string
     */
    public $alarmRuleId;
    protected $_name = [
        'requestPars' => 'RequestPars',
        'alarmRuleId' => 'AlarmRuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestPars) {
            $res['RequestPars'] = $this->requestPars;
        }
        if (null !== $this->alarmRuleId) {
            $res['AlarmRuleId'] = $this->alarmRuleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAlarmRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestPars'])) {
            $model->requestPars = $map['RequestPars'];
        }
        if (isset($map['AlarmRuleId'])) {
            $model->alarmRuleId = $map['AlarmRuleId'];
        }

        return $model;
    }
}
