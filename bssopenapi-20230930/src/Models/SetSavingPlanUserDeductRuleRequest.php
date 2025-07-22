<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\SetSavingPlanUserDeductRuleRequest\ecIdAccountIds;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\SetSavingPlanUserDeductRuleRequest\userDeductRules;
use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecIdAccountIds) {
            $res['EcIdAccountIds'] = [];
            if (null !== $this->ecIdAccountIds && \is_array($this->ecIdAccountIds)) {
                $n = 0;
                foreach ($this->ecIdAccountIds as $item) {
                    $res['EcIdAccountIds'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['UserDeductRules'] = [];
            if (null !== $this->userDeductRules && \is_array($this->userDeductRules)) {
                $n = 0;
                foreach ($this->userDeductRules as $item) {
                    $res['UserDeductRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetSavingPlanUserDeductRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EcIdAccountIds'])) {
            if (!empty($map['EcIdAccountIds'])) {
                $model->ecIdAccountIds = [];
                $n = 0;
                foreach ($map['EcIdAccountIds'] as $item) {
                    $model->ecIdAccountIds[$n++] = null !== $item ? ecIdAccountIds::fromMap($item) : $item;
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
                $n = 0;
                foreach ($map['UserDeductRules'] as $item) {
                    $model->userDeductRules[$n++] = null !== $item ? userDeductRules::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
