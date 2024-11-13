<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\GetXDefaultConfigResponseBody\data;

use AlibabaCloud\Tea\Model;

class reachJson extends Model
{
    /**
     * @description 呼叫方向 1:员工B呼叫客户A 2:客户A呼叫员工B
     *
     * @example 1
     *
     * @var string
     */
    public $callDir;

    /**
     * @description 通话状态 1:通话振铃 2:接通前 3:接通后 4:通话结束 5:已接通6:未接通
     *
     * @example 1
     *
     * @var string
     */
    public $callStatus;

    /**
     * @description 接收方向 1:主叫 2:被叫
     *
     * @example 1
     *
     * @var string
     */
    public $receiveDir;

    /**
     * @description 规则ID
     *
     * @example 345
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description 规则名称
     *
     * @example 企业名片-短信规则
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description 规则类型： 1：企业名片-短信 2：企业名片-闪信 3：企业名片-视频 4：企业名片-音频
     *
     * @example 1
     *
     * @var string
     */
    public $ruleType;

    /**
     * @description 模板ID
     *
     * @example 12345
     *
     * @var string
     */
    public $tempId;
    protected $_name = [
        'callDir'    => 'CallDir',
        'callStatus' => 'CallStatus',
        'receiveDir' => 'ReceiveDir',
        'ruleId'     => 'RuleId',
        'ruleName'   => 'RuleName',
        'ruleType'   => 'RuleType',
        'tempId'     => 'TempId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callDir) {
            $res['CallDir'] = $this->callDir;
        }
        if (null !== $this->callStatus) {
            $res['CallStatus'] = $this->callStatus;
        }
        if (null !== $this->receiveDir) {
            $res['ReceiveDir'] = $this->receiveDir;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->tempId) {
            $res['TempId'] = $this->tempId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reachJson
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallDir'])) {
            $model->callDir = $map['CallDir'];
        }
        if (isset($map['CallStatus'])) {
            $model->callStatus = $map['CallStatus'];
        }
        if (isset($map['ReceiveDir'])) {
            $model->receiveDir = $map['ReceiveDir'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['TempId'])) {
            $model->tempId = $map['TempId'];
        }

        return $model;
    }
}
