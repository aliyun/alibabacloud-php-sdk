<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models;

use AlibabaCloud\Tea\Model;

class GetRuleV4StrRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $isSchemeData;

    /**
     * @example 1
     *
     * @var int
     */
    public $ruleId;
    protected $_name = [
        'isSchemeData' => 'IsSchemeData',
        'ruleId'       => 'RuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isSchemeData) {
            $res['IsSchemeData'] = $this->isSchemeData;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRuleV4StrRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsSchemeData'])) {
            $model->isSchemeData = $map['IsSchemeData'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
