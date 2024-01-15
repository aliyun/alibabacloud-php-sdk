<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSkillGroupConfigResponseBody\data\ruleList;

use AlibabaCloud\Tea\Model;

class ruleNameInfo extends Model
{
    /**
     * @example 222
     *
     * @var int
     */
    public $rid;

    /**
     * @example test
     *
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'rid'      => 'Rid',
        'ruleName' => 'RuleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rid) {
            $res['Rid'] = $this->rid;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
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
        if (isset($map['Rid'])) {
            $model->rid = $map['Rid'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        return $model;
    }
}
