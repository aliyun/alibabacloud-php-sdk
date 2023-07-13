<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class GetRuleActionRequest extends Model
{
    /**
     * @description The error code returned if the call fails. For more information, see [Error codes](~~87387~~).
     *
     * @example 100001
     *
     * @var int
     */
    public $actionId;

    /**
     * @description The rule action ID that you want to query.
     *
     * You can query the rule action ID by using the following methods:
     *
     *   Call the [CreateRuleAction](~~69586~~) operation and view the **ActionId** parameter in the response.
     *   Call the [ListRuleActions](~~69517~~) operation and view the **Id** parameter in the response.
     *
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;
    protected $_name = [
        'actionId'      => 'ActionId',
        'iotInstanceId' => 'IotInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionId) {
            $res['ActionId'] = $this->actionId;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRuleActionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionId'])) {
            $model->actionId = $map['ActionId'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        return $model;
    }
}
