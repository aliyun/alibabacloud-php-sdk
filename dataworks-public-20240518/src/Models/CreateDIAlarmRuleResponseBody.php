<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class CreateDIAlarmRuleResponseBody extends Model
{
    /**
     * @description This parameter is deprecated and is replaced by the Id parameter.
     *
     * @example 1
     *
     * @deprecated
     *
     * @var string
     */
    public $DIAlarmRuleId;

    /**
     * @description The ID of the alert rule.
     *
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @description The request ID. You can use the ID to query logs and troubleshoot issues.
     *
     * @example C636A747-7E4E-594D-94CD-2B4F8A9A9A63
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DIAlarmRuleId' => 'DIAlarmRuleId',
        'id'            => 'Id',
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
