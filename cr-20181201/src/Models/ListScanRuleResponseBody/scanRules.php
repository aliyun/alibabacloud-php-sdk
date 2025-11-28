<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListScanRuleResponseBody;

use AlibabaCloud\Dara\Model;

class scanRules extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string[]
     */
    public $namespaces;

    /**
     * @var string[]
     */
    public $repoNames;

    /**
     * @var string
     */
    public $repoTagFilterPattern;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $scanRuleId;

    /**
     * @var string
     */
    public $scanScope;

    /**
     * @var string
     */
    public $scanType;

    /**
     * @var string
     */
    public $triggerType;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'namespaces' => 'Namespaces',
        'repoNames' => 'RepoNames',
        'repoTagFilterPattern' => 'RepoTagFilterPattern',
        'ruleName' => 'RuleName',
        'scanRuleId' => 'ScanRuleId',
        'scanScope' => 'ScanScope',
        'scanType' => 'ScanType',
        'triggerType' => 'TriggerType',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->namespaces)) {
            Model::validateArray($this->namespaces);
        }
        if (\is_array($this->repoNames)) {
            Model::validateArray($this->repoNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->namespaces) {
            if (\is_array($this->namespaces)) {
                $res['Namespaces'] = [];
                $n1 = 0;
                foreach ($this->namespaces as $item1) {
                    $res['Namespaces'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->repoNames) {
            if (\is_array($this->repoNames)) {
                $res['RepoNames'] = [];
                $n1 = 0;
                foreach ($this->repoNames as $item1) {
                    $res['RepoNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->repoTagFilterPattern) {
            $res['RepoTagFilterPattern'] = $this->repoTagFilterPattern;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        if (null !== $this->scanRuleId) {
            $res['ScanRuleId'] = $this->scanRuleId;
        }

        if (null !== $this->scanScope) {
            $res['ScanScope'] = $this->scanScope;
        }

        if (null !== $this->scanType) {
            $res['ScanType'] = $this->scanType;
        }

        if (null !== $this->triggerType) {
            $res['TriggerType'] = $this->triggerType;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Namespaces'])) {
            if (!empty($map['Namespaces'])) {
                $model->namespaces = [];
                $n1 = 0;
                foreach ($map['Namespaces'] as $item1) {
                    $model->namespaces[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RepoNames'])) {
            if (!empty($map['RepoNames'])) {
                $model->repoNames = [];
                $n1 = 0;
                foreach ($map['RepoNames'] as $item1) {
                    $model->repoNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RepoTagFilterPattern'])) {
            $model->repoTagFilterPattern = $map['RepoTagFilterPattern'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['ScanRuleId'])) {
            $model->scanRuleId = $map['ScanRuleId'];
        }

        if (isset($map['ScanScope'])) {
            $model->scanScope = $map['ScanScope'];
        }

        if (isset($map['ScanType'])) {
            $model->scanType = $map['ScanType'];
        }

        if (isset($map['TriggerType'])) {
            $model->triggerType = $map['TriggerType'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
