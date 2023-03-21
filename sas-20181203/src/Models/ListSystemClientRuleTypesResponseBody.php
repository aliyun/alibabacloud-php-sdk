<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListSystemClientRuleTypesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $ruleTypes;
    protected $_name = [
        'requestId' => 'RequestId',
        'ruleTypes' => 'RuleTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ruleTypes) {
            $res['RuleTypes'] = $this->ruleTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSystemClientRuleTypesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RuleTypes'])) {
            if (!empty($map['RuleTypes'])) {
                $model->ruleTypes = $map['RuleTypes'];
            }
        }

        return $model;
    }
}
