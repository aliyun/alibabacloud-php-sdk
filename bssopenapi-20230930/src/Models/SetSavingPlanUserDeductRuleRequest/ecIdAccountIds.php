<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\SetSavingPlanUserDeductRuleRequest;

use AlibabaCloud\Dara\Model;

class ecIdAccountIds extends Model
{
    /**
     * @var int[]
     */
    public $accountIds;

    /**
     * @var string
     */
    public $ecId;
    protected $_name = [
        'accountIds' => 'AccountIds',
        'ecId' => 'EcId',
    ];

    public function validate()
    {
        if (\is_array($this->accountIds)) {
            Model::validateArray($this->accountIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountIds) {
            if (\is_array($this->accountIds)) {
                $res['AccountIds'] = [];
                $n1 = 0;
                foreach ($this->accountIds as $item1) {
                    $res['AccountIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->ecId) {
            $res['EcId'] = $this->ecId;
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
        if (isset($map['AccountIds'])) {
            if (!empty($map['AccountIds'])) {
                $model->accountIds = [];
                $n1 = 0;
                foreach ($map['AccountIds'] as $item1) {
                    $model->accountIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['EcId'])) {
            $model->ecId = $map['EcId'];
        }

        return $model;
    }
}
