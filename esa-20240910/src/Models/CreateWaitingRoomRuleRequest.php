<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class CreateWaitingRoomRuleRequest extends Model
{
    /**
     * @description Rule content, using conditional expressions to match user requests. This parameter is not required when adding a global configuration. There are two usage scenarios:
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
     * @description Rule switch. This parameter is not required when adding a global configuration. Value range:
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
     * @description Rule name. This parameter is not required when adding a global configuration.
     *
     * This parameter is required.
     *
     * @example waitingroom_example
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description Site ID, which can be obtained by calling the [ListSites](https://help.aliyun.com/document_detail/2850189.html) API.
     *
     * This parameter is required.
     *
     * @example 123456****
     *
     * @var int
     */
    public $siteId;

    /**
     * @description The ID of the waiting room to bypass.
     *
     * This parameter is required.
     *
     * @example 25133f536f1b1f6b6091f6a92c614dd4
     *
     * @var string
     */
    public $waitingRoomId;
    protected $_name = [
        'rule' => 'Rule',
        'ruleEnable' => 'RuleEnable',
        'ruleName' => 'RuleName',
        'siteId' => 'SiteId',
        'waitingRoomId' => 'WaitingRoomId',
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
        if (null !== $this->waitingRoomId) {
            $res['WaitingRoomId'] = $this->waitingRoomId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateWaitingRoomRuleRequest
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
        if (isset($map['WaitingRoomId'])) {
            $model->waitingRoomId = $map['WaitingRoomId'];
        }

        return $model;
    }
}
