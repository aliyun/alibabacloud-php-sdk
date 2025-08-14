<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\SetSavingPlanUserDeductRuleRequest\ecIdAccountIds;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\SetSavingPlanUserDeductRuleRequest\userDeductRules;

class SetSavingPlanUserDeductRuleRequest extends Model
{
    /**
     * @var ecIdAccountIds[]
     */
    public $ecIdAccountIds;

    /**
     * @var string
     */
    public $nbid;

    /**
     * @var string
     */
    public $spnInstanceCode;

    /**
     * @var userDeductRules[]
     */
    public $userDeductRules;
    protected $_name = [
        'ecIdAccountIds' => 'EcIdAccountIds',
        'nbid' => 'Nbid',
        'spnInstanceCode' => 'SpnInstanceCode',
        'userDeductRules' => 'UserDeductRules',
    ];

    public function validate()
    {
        if (\is_array($this->ecIdAccountIds)) {
            Model::validateArray($this->ecIdAccountIds);
        }
        if (\is_array($this->userDeductRules)) {
            Model::validateArray($this->userDeductRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ecIdAccountIds) {
            if (\is_array($this->ecIdAccountIds)) {
                $res['EcIdAccountIds'] = [];
                $n1 = 0;
                foreach ($this->ecIdAccountIds as $item1) {
                    $res['EcIdAccountIds'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nbid) {
            $res['Nbid'] = $this->nbid;
        }

        if (null !== $this->spnInstanceCode) {
            $res['SpnInstanceCode'] = $this->spnInstanceCode;
        }

        if (null !== $this->userDeductRules) {
            if (\is_array($this->userDeductRules)) {
                $res['UserDeductRules'] = [];
                $n1 = 0;
                foreach ($this->userDeductRules as $item1) {
                    $res['UserDeductRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['EcIdAccountIds'])) {
            if (!empty($map['EcIdAccountIds'])) {
                $model->ecIdAccountIds = [];
                $n1 = 0;
                foreach ($map['EcIdAccountIds'] as $item1) {
                    $model->ecIdAccountIds[$n1] = ecIdAccountIds::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Nbid'])) {
            $model->nbid = $map['Nbid'];
        }

        if (isset($map['SpnInstanceCode'])) {
            $model->spnInstanceCode = $map['SpnInstanceCode'];
        }

        if (isset($map['UserDeductRules'])) {
            if (!empty($map['UserDeductRules'])) {
                $model->userDeductRules = [];
                $n1 = 0;
                foreach ($map['UserDeductRules'] as $item1) {
                    $model->userDeductRules[$n1] = userDeductRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
