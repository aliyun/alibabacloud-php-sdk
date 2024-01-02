<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeMaskingRulesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Details about the masking rules.
     *
     * @var string[]
     */
    public $ruleList;

    /**
     * @var string
     */
    public $ruleVersion;
    protected $_name = [
        'ruleList'    => 'RuleList',
        'ruleVersion' => 'RuleVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleList) {
            $res['RuleList'] = $this->ruleList;
        }
        if (null !== $this->ruleVersion) {
            $res['RuleVersion'] = $this->ruleVersion;
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
        if (isset($map['RuleList'])) {
            if (!empty($map['RuleList'])) {
                $model->ruleList = $map['RuleList'];
            }
        }
        if (isset($map['RuleVersion'])) {
            $model->ruleVersion = $map['RuleVersion'];
        }

        return $model;
    }
}
