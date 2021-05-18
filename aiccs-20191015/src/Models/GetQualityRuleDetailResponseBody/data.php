<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetQualityRuleDetailResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $ruleTag;

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
     * @var string
     */
    public $ruleCreateTime;

    /**
     * @var int
     */
    public $ruleId;
    protected $_name = [
        'ruleTag'        => 'RuleTag',
        'keyWords'       => 'KeyWords',
        'matchType'      => 'MatchType',
        'name'           => 'Name',
        'ruleCreateTime' => 'RuleCreateTime',
        'ruleId'         => 'RuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleTag) {
            $res['RuleTag'] = $this->ruleTag;
        }
        if (null !== $this->keyWords) {
            $res['KeyWords'] = $this->keyWords;
        }
        if (null !== $this->matchType) {
            $res['MatchType'] = $this->matchType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ruleCreateTime) {
            $res['RuleCreateTime'] = $this->ruleCreateTime;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
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
        if (isset($map['RuleTag'])) {
            $model->ruleTag = $map['RuleTag'];
        }
        if (isset($map['KeyWords'])) {
            if (!empty($map['KeyWords'])) {
                $model->keyWords = $map['KeyWords'];
            }
        }
        if (isset($map['MatchType'])) {
            $model->matchType = $map['MatchType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RuleCreateTime'])) {
            $model->ruleCreateTime = $map['RuleCreateTime'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
