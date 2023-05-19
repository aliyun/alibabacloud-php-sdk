<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class DescribeCostBudgetsSummaryRequest extends Model
{
    /**
     * @description The name of the budget. Fuzzy match is supported.
     *
     * @example Annual budget
     *
     * @var string
     */
    public $budgetName;

    /**
     * @description The status of the budget. Valid values: overdue and notOverdue. A value of overdue specifies to filter expired budgets. A value of notOverdue specifies to filter budgets that do not expire. By default, if you do not specify this parameter, information about all budgets is to be returned.
     *
     * @example notOverdue
     *
     * @var string
     */
    public $budgetStatus;

    /**
     * @description The type of the budget. Valid values: cost, byquantity, and asset. A value of cost specifies to filter expense budgets. A value of byquantity specifies to filter budgets calculated based on the resource usage. A value of asset specifies to filter usage or coverage budgets. By default, information about all budgets is returned if you do not specify this parameter.
     *
     * @example cost
     *
     * @var string
     */
    public $budgetType;

    /**
     * @description The number of entries to return on each page. Default value: 10. Maximum value: 10. Minimum value: 1.
     *
     * @example 5
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The position in which the query starts. You must set this parameter to null or the token that is obtained from the previous query. Otherwise, an error is returned. If you set the NextToken parameter to null, the query starts from the beginning. The default value is null.
     *
     * @example eyJwYWdlTnVtIjoyLCJwYWdlU2l6ZSI6NH0=
     *
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'budgetName'   => 'BudgetName',
        'budgetStatus' => 'BudgetStatus',
        'budgetType'   => 'BudgetType',
        'maxResults'   => 'MaxResults',
        'nextToken'    => 'NextToken',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DescribeCostBudgetsSummaryRequest
     */
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
