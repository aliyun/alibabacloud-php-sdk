<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListSasContainerWebDefenseRuleRequest extends Model
{
    /**
     * @description The search conditions for assets. The value of this parameter is in the JSON format and contains the following fields:
     *
     *   **name**: the name of the search condition.
     *
     *   **value**: the value of the search condition.
     *
     *   **logicalExp**: the logical relation for multiple search conditions. Valid values:
     *
     *   **OR**: The search conditions use a logical **OR**.
     *   **AND**: The search conditions use a logical **AND**.
     *
     * @example [{\\"name\\":\\"ruleName\\",\\"value\\":\\"test-1818\\",\\"logicalExp\\":\\"AND\\"}]
     *
     * @var string
     */
    public $criteria;

    /**
     * @description The page number. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The logical relation for multiple search conditions. Valid values:
     *
     *   **OR**: The search conditions use a logical **OR**.
     *   **AND**: The search conditions use a logical **AND**.
     *
     * @example OR
     *
     * @var string
     */
    public $logicalExp;

    /**
     * @description The number of entries per page. Default value: **20**.
     *
     * @example 50
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'criteria'    => 'Criteria',
        'currentPage' => 'CurrentPage',
        'logicalExp'  => 'LogicalExp',
        'pageSize'    => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->criteria) {
            $res['Criteria'] = $this->criteria;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->logicalExp) {
            $res['LogicalExp'] = $this->logicalExp;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSasContainerWebDefenseRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Criteria'])) {
            $model->criteria = $map['Criteria'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['LogicalExp'])) {
            $model->logicalExp = $map['LogicalExp'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
