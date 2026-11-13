<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class ListWebFilterRulesRequest extends Model
{
    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $ruleAction;

    /**
     * @var string
     */
    public $webFilterRuleId;

    /**
     * @var string
     */
    public $webFilterTemplateId;
    protected $_name = [
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'ruleAction' => 'RuleAction',
        'webFilterRuleId' => 'WebFilterRuleId',
        'webFilterTemplateId' => 'WebFilterTemplateId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->ruleAction) {
            $res['RuleAction'] = $this->ruleAction;
        }

        if (null !== $this->webFilterRuleId) {
            $res['WebFilterRuleId'] = $this->webFilterRuleId;
        }

        if (null !== $this->webFilterTemplateId) {
            $res['WebFilterTemplateId'] = $this->webFilterTemplateId;
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
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RuleAction'])) {
            $model->ruleAction = $map['RuleAction'];
        }

        if (isset($map['WebFilterRuleId'])) {
            $model->webFilterRuleId = $map['WebFilterRuleId'];
        }

        if (isset($map['WebFilterTemplateId'])) {
            $model->webFilterTemplateId = $map['WebFilterTemplateId'];
        }

        return $model;
    }
}
