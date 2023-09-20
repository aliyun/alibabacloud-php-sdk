<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleHitsTopTuleTypeResponseBody;

use AlibabaCloud\Tea\Model;

class ruleHitsTopTuleType extends Model
{
    /**
     * @description The number of requests that match protection rules.
     *
     * @example 698455
     *
     * @var int
     */
    public $count;

    /**
     * @description The type of rule that is matched. By default, this parameter is not returned. This indicates that all types of rules that are matched are returned.
     *
     *   **waf:** basic protection rules.
     *   **blacklist:** IP address blacklist rules.
     *   **custom:** custom rules.
     *   **antiscan:** scan protection rules.
     *   **cc_system:** HTTP flood protection rules.
     *   **region_block:** region blacklist rules.
     *   **scene:** bot management rules.
     *   **dlp:** data leakage prevention rules.
     *
     * @example major_protection
     *
     * @var string
     */
    public $ruleType;
    protected $_name = [
        'count'    => 'Count',
        'ruleType' => 'RuleType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleHitsTopTuleType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }

        return $model;
    }
}
