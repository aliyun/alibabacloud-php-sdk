<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListSystemClientRuleTypesResponseBody extends Model
{
    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 79CFF74D-E967-5407-8A78-EE03B925****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description An array that consists of the rule types.
     *
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
