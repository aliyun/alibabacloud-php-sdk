<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class CreateOrUpdateIMRobotRequest extends Model
{
    /**
     * @description The configurations of the alert card template. For more information about the parameters in the template, see the following section.
     *
     * @example {     "button": [         "claim",         "close",         "follow",         "send_itsm",         "block",         "unResolvedIncident"     ],     "field": [         {             "fieldName": "alarmName",             "visible": true         },         {             "fieldName": "notificationPolicy",             "visible": true         },         {             "fieldName": "alarmContent",             "visible": true         },         {             "fieldName": "alarmTime",             "visible": true         },         {             "fieldName": "seriesChart",             "visible": true         },         {             "fieldName": "includeEvent",             "visible": true         },         {             "fieldName": "assigned",             "visible": true         },         {             "fieldName": "similarAlarm",             "visible": true         },         {             "fieldName": "operator",             "visible": true         }     ] }
     *
     * @var string
     */
    public $cardTemplate;

    /**
     * @description Specifies whether to send daily statistics. Valid values:
     *
     *   `false` (default): Daily statistics are not sent.
     *   `true`: Daily statistics are sent. If you set the value to `true`, the **DailyNocTime** parameter is required.
     *
     * @example true
     *
     * @var bool
     */
    public $dailyNoc;

    /**
     * @description The points in time at which the daily statistics are sent. Separate multiple points in time with commas (,). The points in time are in the HH:SS format. The information that ARMS sends at the specified points in time includes the total number of alerts generated on the current day, the number of cleared alerts, and the number of alerts to be cleared.
     *
     * @example 09:30,17:00
     *
     * @var string
     */
    public $dailyNocTime;

    /**
     * @description The signature key of DingTalk. If you specify a signature key, DingTalk authentication is performed by using the signature key. If you do not specify a signature key, a whitelist is used for authentication by default. The keyword of the whitelist is **Alert**.
     *
     * @example ******
     *
     * @var string
     */
    public $dingSignKey;

    /**
     * @description Specifies whether to enable the Outgoing feature.
     *
     * @example true
     *
     * @var bool
     */
    public $enableOutgoing;

    /**
     * @description The webhook URL of the IM chatbot.
     *
     * This parameter is required.
     * @example https://oapi.dingtalk.com/robot/send?access_token=e1a049121******
     *
     * @var string
     */
    public $robotAddress;

    /**
     * @description The ID of the IM chatbot.
     * > If you do not specify the parameter, a new IM chatbot is created.
     * @example 123
     *
     * @var int
     */
    public $robotId;

    /**
     * @description The name of the IM chatbot.
     *
     * This parameter is required.
     * @example Chatbot name
     *
     * @var string
     */
    public $robotName;

    /**
     * @description The token required to enable the Outgoing feature.
     *
     * @example 1656558719183be1245ab44********
     *
     * @var string
     */
    public $token;

    /**
     * @description The type of the IM chatbot. Valid values:
     *
     *   `dingding`: DingTalk chatbot
     *   `wechat`: WeCom chatbot
     *   `feishu`: Lark chatbot.
     *
     * @example dingding
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'cardTemplate'   => 'CardTemplate',
        'dailyNoc'       => 'DailyNoc',
        'dailyNocTime'   => 'DailyNocTime',
        'dingSignKey'    => 'DingSignKey',
        'enableOutgoing' => 'EnableOutgoing',
        'robotAddress'   => 'RobotAddress',
        'robotId'        => 'RobotId',
        'robotName'      => 'RobotName',
        'token'          => 'Token',
        'type'           => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cardTemplate) {
            $res['CardTemplate'] = $this->cardTemplate;
        }
        if (null !== $this->dailyNoc) {
            $res['DailyNoc'] = $this->dailyNoc;
        }
        if (null !== $this->dailyNocTime) {
            $res['DailyNocTime'] = $this->dailyNocTime;
        }
        if (null !== $this->dingSignKey) {
            $res['DingSignKey'] = $this->dingSignKey;
        }
        if (null !== $this->enableOutgoing) {
            $res['EnableOutgoing'] = $this->enableOutgoing;
        }
        if (null !== $this->robotAddress) {
            $res['RobotAddress'] = $this->robotAddress;
        }
        if (null !== $this->robotId) {
            $res['RobotId'] = $this->robotId;
        }
        if (null !== $this->robotName) {
            $res['RobotName'] = $this->robotName;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrUpdateIMRobotRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CardTemplate'])) {
            $model->cardTemplate = $map['CardTemplate'];
        }
        if (isset($map['DailyNoc'])) {
            $model->dailyNoc = $map['DailyNoc'];
        }
        if (isset($map['DailyNocTime'])) {
            $model->dailyNocTime = $map['DailyNocTime'];
        }
        if (isset($map['DingSignKey'])) {
            $model->dingSignKey = $map['DingSignKey'];
        }
        if (isset($map['EnableOutgoing'])) {
            $model->enableOutgoing = $map['EnableOutgoing'];
        }
        if (isset($map['RobotAddress'])) {
            $model->robotAddress = $map['RobotAddress'];
        }
        if (isset($map['RobotId'])) {
            $model->robotId = $map['RobotId'];
        }
        if (isset($map['RobotName'])) {
            $model->robotName = $map['RobotName'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
