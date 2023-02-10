<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetSceneRuleResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1584085921000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 1579493552000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @example {\"action\":[{\"params\":{\"productKey\":\"a19luLB****\",\"propertyItems\":{\"LightAdjustLevel\":10},\"deviceName\":\"test01\"},\"uri\":\"action/device/setProperty\"}],\"trigger\":{\"params\":{\"cron\":\"22 13 20 1 *\",\"cronType\":\"linux\"},\"uri\":\"trigger/timer\"},\"type\":\"IFTTT\",\"sid\":\"9df954b33c854d469a507ef8d6******\"}
     *
     * @var string
     */
    public $ruleContent;

    /**
     * @var string
     */
    public $ruleDescription;

    /**
     * @example test
     *
     * @var string
     */
    public $ruleName;

    /**
     * @example 0
     *
     * @var int
     */
    public $ruleStatus;
    protected $_name = [
        'gmtCreate'       => 'GmtCreate',
        'gmtModified'     => 'GmtModified',
        'ruleContent'     => 'RuleContent',
        'ruleDescription' => 'RuleDescription',
        'ruleName'        => 'RuleName',
        'ruleStatus'      => 'RuleStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->ruleContent) {
            $res['RuleContent'] = $this->ruleContent;
        }
        if (null !== $this->ruleDescription) {
            $res['RuleDescription'] = $this->ruleDescription;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->ruleStatus) {
            $res['RuleStatus'] = $this->ruleStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['RuleContent'])) {
            $model->ruleContent = $map['RuleContent'];
        }
        if (isset($map['RuleDescription'])) {
            $model->ruleDescription = $map['RuleDescription'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['RuleStatus'])) {
            $model->ruleStatus = $map['RuleStatus'];
        }

        return $model;
    }
}
