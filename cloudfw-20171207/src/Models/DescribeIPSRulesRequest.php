<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeIPSRulesRequest extends Model
{
    /**
     * @var string
     */
    public $attackApp;

    /**
     * @var string[]
     */
    public $attackAppCategory;

    /**
     * @var string[]
     */
    public $attackApps;

    /**
     * @var string
     */
    public $attackType;

    /**
     * @var string
     */
    public $cve;

    /**
     * @var string
     */
    public $defaultAction;

    /**
     * @var string
     */
    public $firewallType;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $order;

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
    public $queryModify;

    /**
     * @var string
     */
    public $ruleAction;

    /**
     * @var string
     */
    public $ruleClass;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var int
     */
    public $ruleLevel;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $ruleType;

    /**
     * @var string
     */
    public $sort;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $vpcFirewallId;
    protected $_name = [
        'attackApp' => 'AttackApp',
        'attackAppCategory' => 'AttackAppCategory',
        'attackApps' => 'AttackApps',
        'attackType' => 'AttackType',
        'cve' => 'Cve',
        'defaultAction' => 'DefaultAction',
        'firewallType' => 'FirewallType',
        'lang' => 'Lang',
        'order' => 'Order',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'queryModify' => 'QueryModify',
        'ruleAction' => 'RuleAction',
        'ruleClass' => 'RuleClass',
        'ruleId' => 'RuleId',
        'ruleLevel' => 'RuleLevel',
        'ruleName' => 'RuleName',
        'ruleType' => 'RuleType',
        'sort' => 'Sort',
        'sourceIp' => 'SourceIp',
        'vpcFirewallId' => 'VpcFirewallId',
    ];

    public function validate()
    {
        if (\is_array($this->attackAppCategory)) {
            Model::validateArray($this->attackAppCategory);
        }
        if (\is_array($this->attackApps)) {
            Model::validateArray($this->attackApps);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attackApp) {
            $res['AttackApp'] = $this->attackApp;
        }

        if (null !== $this->attackAppCategory) {
            if (\is_array($this->attackAppCategory)) {
                $res['AttackAppCategory'] = [];
                $n1 = 0;
                foreach ($this->attackAppCategory as $item1) {
                    $res['AttackAppCategory'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->attackApps) {
            if (\is_array($this->attackApps)) {
                $res['AttackApps'] = [];
                $n1 = 0;
                foreach ($this->attackApps as $item1) {
                    $res['AttackApps'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->attackType) {
            $res['AttackType'] = $this->attackType;
        }

        if (null !== $this->cve) {
            $res['Cve'] = $this->cve;
        }

        if (null !== $this->defaultAction) {
            $res['DefaultAction'] = $this->defaultAction;
        }

        if (null !== $this->firewallType) {
            $res['FirewallType'] = $this->firewallType;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }

        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->queryModify) {
            $res['QueryModify'] = $this->queryModify;
        }

        if (null !== $this->ruleAction) {
            $res['RuleAction'] = $this->ruleAction;
        }

        if (null !== $this->ruleClass) {
            $res['RuleClass'] = $this->ruleClass;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->ruleLevel) {
            $res['RuleLevel'] = $this->ruleLevel;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }

        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        if (null !== $this->vpcFirewallId) {
            $res['VpcFirewallId'] = $this->vpcFirewallId;
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
        if (isset($map['AttackApp'])) {
            $model->attackApp = $map['AttackApp'];
        }

        if (isset($map['AttackAppCategory'])) {
            if (!empty($map['AttackAppCategory'])) {
                $model->attackAppCategory = [];
                $n1 = 0;
                foreach ($map['AttackAppCategory'] as $item1) {
                    $model->attackAppCategory[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AttackApps'])) {
            if (!empty($map['AttackApps'])) {
                $model->attackApps = [];
                $n1 = 0;
                foreach ($map['AttackApps'] as $item1) {
                    $model->attackApps[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AttackType'])) {
            $model->attackType = $map['AttackType'];
        }

        if (isset($map['Cve'])) {
            $model->cve = $map['Cve'];
        }

        if (isset($map['DefaultAction'])) {
            $model->defaultAction = $map['DefaultAction'];
        }

        if (isset($map['FirewallType'])) {
            $model->firewallType = $map['FirewallType'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }

        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['QueryModify'])) {
            $model->queryModify = $map['QueryModify'];
        }

        if (isset($map['RuleAction'])) {
            $model->ruleAction = $map['RuleAction'];
        }

        if (isset($map['RuleClass'])) {
            $model->ruleClass = $map['RuleClass'];
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['RuleLevel'])) {
            $model->ruleLevel = $map['RuleLevel'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }

        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        if (isset($map['VpcFirewallId'])) {
            $model->vpcFirewallId = $map['VpcFirewallId'];
        }

        return $model;
    }
}
