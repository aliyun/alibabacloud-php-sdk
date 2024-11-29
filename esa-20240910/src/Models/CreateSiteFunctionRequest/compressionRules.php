<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteFunctionRequest;

use AlibabaCloud\Tea\Model;

class compressionRules extends Model
{
    /**
     * @description Specifies whether to enable Brotli compression. Valid values:
     *
     *   on
     *   off
     *
     * @example on
     *
     * @var string
     */
    public $brotli;

    /**
     * @description Specifies whether to enable Gzip compression. Valid values:
     *
     *   on
     *   off
     *
     * @example on
     *
     * @var string
     */
    public $gzip;

    /**
     * @description The rule content.
     *
     * @example [{"MatchType":"http.request.method","MatchOperator":"eq","MatchValue":"GET","Negate":false}]
     *
     * @var string
     */
    public $rule;

    /**
     * @description Specifies whether to enable the rule. Valid values:
     *
     *   on
     *   off
     *
     * @example on
     *
     * @var string
     */
    public $ruleEnable;

    /**
     * @description The rule name.
     *
     * @example rule_example
     *
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'brotli'     => 'Brotli',
        'gzip'       => 'Gzip',
        'rule'       => 'Rule',
        'ruleEnable' => 'RuleEnable',
        'ruleName'   => 'RuleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->brotli) {
            $res['Brotli'] = $this->brotli;
        }
        if (null !== $this->gzip) {
            $res['Gzip'] = $this->gzip;
        }
        if (null !== $this->rule) {
            $res['Rule'] = $this->rule;
        }
        if (null !== $this->ruleEnable) {
            $res['RuleEnable'] = $this->ruleEnable;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return compressionRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Brotli'])) {
            $model->brotli = $map['Brotli'];
        }
        if (isset($map['Gzip'])) {
            $model->gzip = $map['Gzip'];
        }
        if (isset($map['Rule'])) {
            $model->rule = $map['Rule'];
        }
        if (isset($map['RuleEnable'])) {
            $model->ruleEnable = $map['RuleEnable'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        return $model;
    }
}
