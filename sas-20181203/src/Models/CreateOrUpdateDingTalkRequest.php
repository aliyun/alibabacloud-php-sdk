<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateOrUpdateDingTalkRequest extends Model
{
    /**
     * @description The alerts for which you want the chatbot to send notifications. The value is a JSON array that contains the following fields:
     *
     *   **type**: the types of alerts. The valid values are listed in the "Additional description of parameters" section in this topic.
     *
     *   **configItemList**: the list of check items. The value is a JSON array that contains the following fields:
     *
     *   **key**: the key of the check item.
     *   **valueList**: the values of the check item. The value of valueList is a JSON array.
     *
     * > For more information about the value of this parameter, see the "Addition description of parameters" section in this topic.
     * @example [{"type":"sas_analysis_online-sas-operation-log-sas-event-suspicious","configItemList":[{"key":"item_level","valueList":["all"]},{"key":"event_type","valueList":["all"]}]}]
     *
     * @var string
     */
    public $configList;

    /**
     * @description The language of the notifications. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $dingTalkLang;

    /**
     * @description The IDs of asset groups for which you want the chatbot to send notifications. The value is a JSON array.
     *
     * > You can call the [DescribeGroupStruct](~~DescribeGroupStruct~~) operation to query the IDs of asset groups.
     * @example ["10417151"]
     *
     * @var string
     */
    public $groupIdList;

    /**
     * @description The ID of the chatbot.
     *
     * > You can call the [DescribeDingTalk](~~DescribeDingTalk~~) operation to query the IDs of chatbots.
     * @example 1589
     *
     * @var int
     */
    public $id;

    /**
     * @description The time interval at which the chatbot sends notifications.
     *
     * > The value **0** indicates unlimited.
     * @example 0
     *
     * @var int
     */
    public $intervalTime;

    /**
     * @description The name of the chatbot.
     *
     * > The name of a chatbot must be 2 to 64 characters in length.
     * @example testNotify
     *
     * @var string
     */
    public $ruleActionName;

    /**
     * @description The webhook URL.
     *
     * @example https://oapi.dingtalk.com/robot/send?access_token=XXX
     *
     * @var string
     */
    public $sendUrl;
    protected $_name = [
        'configList'     => 'ConfigList',
        'dingTalkLang'   => 'DingTalkLang',
        'groupIdList'    => 'GroupIdList',
        'id'             => 'Id',
        'intervalTime'   => 'IntervalTime',
        'ruleActionName' => 'RuleActionName',
        'sendUrl'        => 'SendUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configList) {
            $res['ConfigList'] = $this->configList;
        }
        if (null !== $this->dingTalkLang) {
            $res['DingTalkLang'] = $this->dingTalkLang;
        }
        if (null !== $this->groupIdList) {
            $res['GroupIdList'] = $this->groupIdList;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->intervalTime) {
            $res['IntervalTime'] = $this->intervalTime;
        }
        if (null !== $this->ruleActionName) {
            $res['RuleActionName'] = $this->ruleActionName;
        }
        if (null !== $this->sendUrl) {
            $res['SendUrl'] = $this->sendUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrUpdateDingTalkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigList'])) {
            $model->configList = $map['ConfigList'];
        }
        if (isset($map['DingTalkLang'])) {
            $model->dingTalkLang = $map['DingTalkLang'];
        }
        if (isset($map['GroupIdList'])) {
            $model->groupIdList = $map['GroupIdList'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IntervalTime'])) {
            $model->intervalTime = $map['IntervalTime'];
        }
        if (isset($map['RuleActionName'])) {
            $model->ruleActionName = $map['RuleActionName'];
        }
        if (isset($map['SendUrl'])) {
            $model->sendUrl = $map['SendUrl'];
        }

        return $model;
    }
}
