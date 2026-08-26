<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Dara\Model;

class DescribePoliciesV2ShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $accountScope;

    /**
     * @var string
     */
    public $accountsShrink;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $policyId;

    /**
     * @var string
     */
    public $ruleScope;
    protected $_name = [
        'accountScope' => 'AccountScope',
        'accountsShrink' => 'Accounts',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'policyId' => 'PolicyId',
        'ruleScope' => 'RuleScope',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountScope) {
            $res['AccountScope'] = $this->accountScope;
        }

        if (null !== $this->accountsShrink) {
            $res['Accounts'] = $this->accountsShrink;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }

        if (null !== $this->ruleScope) {
            $res['RuleScope'] = $this->ruleScope;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountScope'])) {
            $model->accountScope = $map['AccountScope'];
        }

        if (isset($map['Accounts'])) {
            $model->accountsShrink = $map['Accounts'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        if (isset($map['RuleScope'])) {
            $model->ruleScope = $map['RuleScope'];
        }

        return $model;
    }
}
