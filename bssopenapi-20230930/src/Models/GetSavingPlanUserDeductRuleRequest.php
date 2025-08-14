<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetSavingPlanUserDeductRuleRequest\ecIdAccountIds;

class GetSavingPlanUserDeductRuleRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var ecIdAccountIds[]
     */
    public $ecIdAccountIds;

    /**
     * @var string
     */
    public $nbid;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $spnInstanceCode;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'ecIdAccountIds' => 'EcIdAccountIds',
        'nbid' => 'Nbid',
        'pageSize' => 'PageSize',
        'spnInstanceCode' => 'SpnInstanceCode',
    ];

    public function validate()
    {
        if (\is_array($this->ecIdAccountIds)) {
            Model::validateArray($this->ecIdAccountIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

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

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->spnInstanceCode) {
            $res['SpnInstanceCode'] = $this->spnInstanceCode;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

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

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['SpnInstanceCode'])) {
            $model->spnInstanceCode = $map['SpnInstanceCode'];
        }

        return $model;
    }
}
