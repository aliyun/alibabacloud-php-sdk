<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Dara\Model;

class DescribeCostBudgetsSummaryRequest extends Model
{
    /**
     * @var string
     */
    public $budgetName;

    /**
     * @var string
     */
    public $budgetStatus;

    /**
     * @var string
     */
    public $budgetType;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'budgetName' => 'BudgetName',
        'budgetStatus' => 'BudgetStatus',
        'budgetType' => 'BudgetType',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->budgetName) {
            $res['BudgetName'] = $this->budgetName;
        }

        if (null !== $this->budgetStatus) {
            $res['BudgetStatus'] = $this->budgetStatus;
        }

        if (null !== $this->budgetType) {
            $res['BudgetType'] = $this->budgetType;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
        if (isset($map['BudgetName'])) {
            $model->budgetName = $map['BudgetName'];
        }

        if (isset($map['BudgetStatus'])) {
            $model->budgetStatus = $map['BudgetStatus'];
        }

        if (isset($map['BudgetType'])) {
            $model->budgetType = $map['BudgetType'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}
