<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class CreateDispatchRuleRequest extends Model
{
    /**
     * @description ## Additional information about the **DispatchRule** parameter
     *
     **JSON string example and description**
     *
     * ```
     *
     **Enumerated keys of the tag of the dispatch rule**
     *
     *   `_aliyun_arms_userid`: user ID
     *   `_aliyun_arms_involvedObject_kind`: type of the associated object
     *   `_aliyun_arms_involvedObject_id`: ID of the associated object
     *   `_aliyun_arms_involvedObject_name`: name of the associated object
     *   `_aliyun_arms_alert_name`: alert name
     *   `_aliyun_arms_alert_rule_id`: alert rule ID
     *   `_aliyun_arms_alert_type`: alert type
     *   `_aliyun_arms_alert_level`: alert severity
     *
     * This parameter is required.
     * @example {   "system": false,   "ruleid": 10282,   "name": "Prometheus Alert",   "labelMatchExpressionGrid": {     "labelMatchExpressionGroups": [       {         "labelMatchExpressions": [           {             "key": "_aliyun_arms_involvedObject_kind",             "value": "app",             "operator": "eq"           }         ]       }     ]   },   "dispatchType": "CREATE_ALERT/DISCARD_ALERT",   "isRecover": true,   "groupRules": [     {       "groupId": 1,       "groupingFields": [         "alertname"       ],       "groupWait": 10,       "groupInterval": 15,       "repeatInterval": 20     }   ],   "notifyRules": [     {       "notifyObjects": [         {           "notifyType": "ARMS_CONTACT",           "name": "JohnDoe",           "notifyObjectId": 1         },         {           "notifyType": "ARMS_CONTACT_GROUP",           "name": "JohnDoe_group",           "notifyObjectId": 2         }       ],       "notifyChannels":["dingTalk","wechat","webhook","email"]     },   ], }
     *
     * @var string
     */
    public $dispatchRule;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'dispatchRule' => 'DispatchRule',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dispatchRule) {
            $res['DispatchRule'] = $this->dispatchRule;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDispatchRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DispatchRule'])) {
            $model->dispatchRule = $map['DispatchRule'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
