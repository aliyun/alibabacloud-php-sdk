<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Tea\Model;

class SetSavingPlanUserDeductRuleShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $ecIdAccountIdsShrink;

    /**
     * @var string
     */
    public $nbid;

    /**
     * @var string
     */
    public $spnInstanceCode;

    /**
     * @var string
     */
    public $userDeductRulesShrink;
    protected $_name = [
        'ecIdAccountIdsShrink' => 'EcIdAccountIds',
        'nbid' => 'Nbid',
        'spnInstanceCode' => 'SpnInstanceCode',
        'userDeductRulesShrink' => 'UserDeductRules',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecIdAccountIdsShrink) {
            $res['EcIdAccountIds'] = $this->ecIdAccountIdsShrink;
        }
        if (null !== $this->nbid) {
            $res['Nbid'] = $this->nbid;
        }
        if (null !== $this->spnInstanceCode) {
            $res['SpnInstanceCode'] = $this->spnInstanceCode;
        }
        if (null !== $this->userDeductRulesShrink) {
            $res['UserDeductRules'] = $this->userDeductRulesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetSavingPlanUserDeductRuleShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EcIdAccountIds'])) {
            $model->ecIdAccountIdsShrink = $map['EcIdAccountIds'];
        }
        if (isset($map['Nbid'])) {
            $model->nbid = $map['Nbid'];
        }
        if (isset($map['SpnInstanceCode'])) {
            $model->spnInstanceCode = $map['SpnInstanceCode'];
        }
        if (isset($map['UserDeductRules'])) {
            $model->userDeductRulesShrink = $map['UserDeductRules'];
        }

        return $model;
    }
}
