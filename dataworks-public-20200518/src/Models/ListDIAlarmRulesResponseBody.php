<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDIAlarmRulesResponseBody\DIAlarmRulePaging;

class ListDIAlarmRulesResponseBody extends Model
{
    /**
     * @var DIAlarmRulePaging
     */
    public $DIAlarmRulePaging;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DIAlarmRulePaging' => 'DIAlarmRulePaging',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->DIAlarmRulePaging) {
            $this->DIAlarmRulePaging->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DIAlarmRulePaging) {
            $res['DIAlarmRulePaging'] = null !== $this->DIAlarmRulePaging ? $this->DIAlarmRulePaging->toArray($noStream) : $this->DIAlarmRulePaging;
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
        if (isset($map['DIAlarmRulePaging'])) {
            $model->DIAlarmRulePaging = DIAlarmRulePaging::fromMap($map['DIAlarmRulePaging']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
