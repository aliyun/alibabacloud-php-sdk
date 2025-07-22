<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetSavingPlanUserDeductRuleRequest\ecIdAccountIds;
use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
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
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->spnInstanceCode) {
            $res['SpnInstanceCode'] = $this->spnInstanceCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSavingPlanUserDeductRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
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
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SpnInstanceCode'])) {
            $model->spnInstanceCode = $map['SpnInstanceCode'];
        }

        return $model;
    }
}
