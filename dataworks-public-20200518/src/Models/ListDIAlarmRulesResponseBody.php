<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDIAlarmRulesResponseBody\DIAlarmRulePaging;
use AlibabaCloud\Tea\Model;

class ListDIAlarmRulesResponseBody extends Model
{
    /**
     * @var DIAlarmRulePaging
     */
    public $DIAlarmRulePaging;

    /**
     * @example 74C2FECD-5B3A-554A-BCF5-351A36DE9815
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DIAlarmRulePaging' => 'DIAlarmRulePaging',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DIAlarmRulePaging) {
            $res['DIAlarmRulePaging'] = null !== $this->DIAlarmRulePaging ? $this->DIAlarmRulePaging->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDIAlarmRulesResponseBody
     */
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
