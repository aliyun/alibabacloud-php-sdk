<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class ListApplicationCustomRulesRequest extends Model
{
    /**
     * @var string
     */
    public $applicationCustomRuleId;

    /**
     * @var string
     */
    public $applicationCustomRuleName;

    /**
     * @var int
     */
    public $applicationId;

    /**
     * @var string
     */
    public $applicationTemplateId;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $ruleAction;
    protected $_name = [
        'applicationCustomRuleId' => 'ApplicationCustomRuleId',
        'applicationCustomRuleName' => 'ApplicationCustomRuleName',
        'applicationId' => 'ApplicationId',
        'applicationTemplateId' => 'ApplicationTemplateId',
        'lang' => 'Lang',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'priority' => 'Priority',
        'ruleAction' => 'RuleAction',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationCustomRuleId) {
            $res['ApplicationCustomRuleId'] = $this->applicationCustomRuleId;
        }

        if (null !== $this->applicationCustomRuleName) {
            $res['ApplicationCustomRuleName'] = $this->applicationCustomRuleName;
        }

        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->applicationTemplateId) {
            $res['ApplicationTemplateId'] = $this->applicationTemplateId;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->ruleAction) {
            $res['RuleAction'] = $this->ruleAction;
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
        if (isset($map['ApplicationCustomRuleId'])) {
            $model->applicationCustomRuleId = $map['ApplicationCustomRuleId'];
        }

        if (isset($map['ApplicationCustomRuleName'])) {
            $model->applicationCustomRuleName = $map['ApplicationCustomRuleName'];
        }

        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['ApplicationTemplateId'])) {
            $model->applicationTemplateId = $map['ApplicationTemplateId'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['RuleAction'])) {
            $model->ruleAction = $map['RuleAction'];
        }

        return $model;
    }
}
