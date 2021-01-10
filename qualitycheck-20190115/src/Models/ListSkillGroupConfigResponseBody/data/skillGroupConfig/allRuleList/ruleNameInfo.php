<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSkillGroupConfigResponseBody\data\skillGroupConfig\allRuleList;

use AlibabaCloud\Tea\Model;

class ruleNameInfo extends Model
{
    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var int
     */
    public $rid;
    protected $_name = [
        'ruleName' => 'RuleName',
        'rid'      => 'Rid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->rid) {
            $res['Rid'] = $this->rid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleNameInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['Rid'])) {
            $model->rid = $map['Rid'];
        }

        return $model;
    }
}
