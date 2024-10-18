<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class CreateDIAlarmRuleResponseBody extends Model
{
    /**
     * @description 代表资源一级ID的资源属性字段
     *
     * @example 1
     *
     * @var string
     */
    public $DIAlarmRuleId;

    /**
     * @example C636A747-7E4E-594D-94CD-2B4F8A9A9A63
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DIAlarmRuleId' => 'DIAlarmRuleId',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DIAlarmRuleId) {
            $res['DIAlarmRuleId'] = $this->DIAlarmRuleId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDIAlarmRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DIAlarmRuleId'])) {
            $model->DIAlarmRuleId = $map['DIAlarmRuleId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
