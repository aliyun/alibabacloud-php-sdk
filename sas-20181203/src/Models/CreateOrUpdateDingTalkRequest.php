<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class CreateOrUpdateDingTalkRequest extends Model
{
    /**
     * @var string
     */
    public $configList;

    /**
     * @var string
     */
    public $dingTalkLang;

    /**
     * @var string
     */
    public $groupIdList;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $intervalTime;

    /**
     * @var string
     */
    public $ruleActionName;

    /**
     * @var string
     */
    public $sendUrl;
    protected $_name = [
        'configList' => 'ConfigList',
        'dingTalkLang' => 'DingTalkLang',
        'groupIdList' => 'GroupIdList',
        'id' => 'Id',
        'intervalTime' => 'IntervalTime',
        'ruleActionName' => 'RuleActionName',
        'sendUrl' => 'SendUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
