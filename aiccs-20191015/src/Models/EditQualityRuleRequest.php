<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;

class EditQualityRuleRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $keyWords;

    /**
     * @var int
     */
    public $matchType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $qualityRuleId;

    /**
     * @var int
     */
    public $ruleTag;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'keyWords' => 'KeyWords',
        'matchType' => 'MatchType',
        'name' => 'Name',
        'qualityRuleId' => 'QualityRuleId',
        'ruleTag' => 'RuleTag',
    ];

    public function validate()
    {
        if (\is_array($this->keyWords)) {
            Model::validateArray($this->keyWords);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->keyWords) {
            if (\is_array($this->keyWords)) {
                $res['KeyWords'] = [];
                $n1 = 0;
                foreach ($this->keyWords as $item1) {
                    $res['KeyWords'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->matchType) {
            $res['MatchType'] = $this->matchType;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->qualityRuleId) {
            $res['QualityRuleId'] = $this->qualityRuleId;
        }

        if (null !== $this->ruleTag) {
            $res['RuleTag'] = $this->ruleTag;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['KeyWords'])) {
            if (!empty($map['KeyWords'])) {
                $model->keyWords = [];
                $n1 = 0;
                foreach ($map['KeyWords'] as $item1) {
                    $model->keyWords[$n1++] = $item1;
                }
            }
        }

        if (isset($map['MatchType'])) {
            $model->matchType = $map['MatchType'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['QualityRuleId'])) {
            $model->qualityRuleId = $map['QualityRuleId'];
        }

        if (isset($map['RuleTag'])) {
            $model->ruleTag = $map['RuleTag'];
        }

        return $model;
    }
}
