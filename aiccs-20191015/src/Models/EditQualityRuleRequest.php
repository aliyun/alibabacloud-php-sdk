<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class EditQualityRuleRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $ruleTag;

    /**
     * @var int
     */
    public $matchType;

    /**
     * @var int
     */
    public $qualityRuleId;

    /**
     * @var string[]
     */
    public $keyWords;
    protected $_name = [
        'instanceId'    => 'InstanceId',
        'name'          => 'Name',
        'ruleTag'       => 'RuleTag',
        'matchType'     => 'MatchType',
        'qualityRuleId' => 'QualityRuleId',
        'keyWords'      => 'KeyWords',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ruleTag) {
            $res['RuleTag'] = $this->ruleTag;
        }
        if (null !== $this->matchType) {
            $res['MatchType'] = $this->matchType;
        }
        if (null !== $this->qualityRuleId) {
            $res['QualityRuleId'] = $this->qualityRuleId;
        }
        if (null !== $this->keyWords) {
            $res['KeyWords'] = $this->keyWords;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EditQualityRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RuleTag'])) {
            $model->ruleTag = $map['RuleTag'];
        }
        if (isset($map['MatchType'])) {
            $model->matchType = $map['MatchType'];
        }
        if (isset($map['QualityRuleId'])) {
            $model->qualityRuleId = $map['QualityRuleId'];
        }
        if (isset($map['KeyWords'])) {
            if (!empty($map['KeyWords'])) {
                $model->keyWords = $map['KeyWords'];
            }
        }

        return $model;
    }
}
