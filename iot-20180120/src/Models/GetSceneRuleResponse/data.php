<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetSceneRuleResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $ruleContent;

    /**
     * @var string
     */
    public $ruleDescription;

    /**
     * @var string
     */
    public $ruleName;

    /**
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
        Model::validateRequired('gmtCreate', $this->gmtCreate, true);
        Model::validateRequired('gmtModified', $this->gmtModified, true);
        Model::validateRequired('ruleContent', $this->ruleContent, true);
        Model::validateRequired('ruleDescription', $this->ruleDescription, true);
        Model::validateRequired('ruleName', $this->ruleName, true);
        Model::validateRequired('ruleStatus', $this->ruleStatus, true);
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
