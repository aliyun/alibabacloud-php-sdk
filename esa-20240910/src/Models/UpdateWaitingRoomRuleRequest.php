<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class UpdateWaitingRoomRuleRequest extends Model
{
    /**
     * @description Rule content, using conditional expressions to match user requests. This parameter is not required when adding global configuration. There are two usage scenarios:
     * - Match all incoming requests: Set the value to true
     * - Match specific requests: Set the value to a custom expression, for example: (http.host eq "video.example.com")
     *
     * This parameter is required.
     *
     * @example (http.request.uri.path.file_name eq \\"jpg\\")
     *
     * @var string
     */
    public $rule;

    /**
     * @description Rule switch. This parameter is not required when adding global configuration. Value range:
     * - on: Enable.
     * - off: Disable.
     *
     * This parameter is required.
     *
     * @example on
     *
     * @var string
     */
    public $ruleEnable;

    /**
     * @description Rule name. This parameter is not required when adding global configuration.
     *
     * This parameter is required.
     *
     * @example test1
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description Site ID, which can be obtained by calling the [ListSites](https://help.aliyun.com/document_detail/2850189.html) interface.
     *
     * This parameter is required.
     *
     * @example 123456****
     *
     * @var int
     */
    public $siteId;

    /**
     * @description The ID of the waiting room bypass rule to be updated, which can be obtained by calling the [ListWaitingRoomRules](https://help.aliyun.com/document_detail/2850279.html) interface.
     *
     * This parameter is required.
     *
     * @example 8987739839****
     *
     * @var int
     */
    public $waitingRoomRuleId;
    protected $_name = [
        'rule' => 'Rule',
        'ruleEnable' => 'RuleEnable',
        'ruleName' => 'RuleName',
        'siteId' => 'SiteId',
        'waitingRoomRuleId' => 'WaitingRoomRuleId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->rule) {
            $res['Rule'] = $this->rule;
        }
        if (null !== $this->ruleEnable) {
            $res['RuleEnable'] = $this->ruleEnable;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->waitingRoomRuleId) {
            $res['WaitingRoomRuleId'] = $this->waitingRoomRuleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateWaitingRoomRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Rule'])) {
            $model->rule = $map['Rule'];
        }
        if (isset($map['RuleEnable'])) {
            $model->ruleEnable = $map['RuleEnable'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['WaitingRoomRuleId'])) {
            $model->waitingRoomRuleId = $map['WaitingRoomRuleId'];
        }

        return $model;
    }
}
