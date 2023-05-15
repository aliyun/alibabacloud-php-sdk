<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateOrUpdateDingTalkRequest extends Model
{
    /**
     * @example [{"type":"sas_analysis_online-sas-operation-log-sas-event-suspicious","configItemList":[{"key":"item_level","valueList":["all"]},{"key":"event_type","valueList":["all"]}]}]
     *
     * @var string
     */
    public $configList;

    /**
     * @example zh
     *
     * @var string
     */
    public $dingTalkLang;

    /**
     * @example ["10417151"]
     *
     * @var string
     */
    public $groupIdList;

    /**
     * @example 1589
     *
     * @var int
     */
    public $id;

    /**
     * @example 0
     *
     * @var int
     */
    public $intervalTime;

    /**
     * @example testNotify
     *
     * @var string
     */
    public $ruleActionName;

    /**
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
