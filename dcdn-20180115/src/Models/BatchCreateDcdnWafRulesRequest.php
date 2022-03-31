<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class BatchCreateDcdnWafRulesRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $policyId;

    /**
     * @var string
     */
    public $ruleConfigs;
    protected $_name = [
        'ownerId'     => 'OwnerId',
        'policyId'    => 'PolicyId',
        'ruleConfigs' => 'RuleConfigs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->ruleConfigs) {
            $res['RuleConfigs'] = $this->ruleConfigs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchCreateDcdnWafRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['RuleConfigs'])) {
            $model->ruleConfigs = $map['RuleConfigs'];
        }

        return $model;
    }
}
