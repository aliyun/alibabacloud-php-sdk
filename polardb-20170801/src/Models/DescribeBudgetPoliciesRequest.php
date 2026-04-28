<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class DescribeBudgetPoliciesRequest extends Model
{
    /**
     * @var string
     */
    public $budgetDimensionRefId;

    /**
     * @var string
     */
    public $budgetDimensionType;

    /**
     * @var string
     */
    public $budgetPolicyId;

    /**
     * @var string
     */
    public $gwClusterId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'budgetDimensionRefId' => 'BudgetDimensionRefId',
        'budgetDimensionType' => 'BudgetDimensionType',
        'budgetPolicyId' => 'BudgetPolicyId',
        'gwClusterId' => 'GwClusterId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->budgetDimensionRefId) {
            $res['BudgetDimensionRefId'] = $this->budgetDimensionRefId;
        }

        if (null !== $this->budgetDimensionType) {
            $res['BudgetDimensionType'] = $this->budgetDimensionType;
        }

        if (null !== $this->budgetPolicyId) {
            $res['BudgetPolicyId'] = $this->budgetPolicyId;
        }

        if (null !== $this->gwClusterId) {
            $res['GwClusterId'] = $this->gwClusterId;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['BudgetDimensionRefId'])) {
            $model->budgetDimensionRefId = $map['BudgetDimensionRefId'];
        }

        if (isset($map['BudgetDimensionType'])) {
            $model->budgetDimensionType = $map['BudgetDimensionType'];
        }

        if (isset($map['BudgetPolicyId'])) {
            $model->budgetPolicyId = $map['BudgetPolicyId'];
        }

        if (isset($map['GwClusterId'])) {
            $model->gwClusterId = $map['GwClusterId'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
