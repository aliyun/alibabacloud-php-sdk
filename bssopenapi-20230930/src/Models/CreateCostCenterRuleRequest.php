<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\CreateCostCenterRuleRequest\filterExpression;
use AlibabaCloud\Tea\Model;

class CreateCostCenterRuleRequest extends Model
{
    /**
     * @example 485938
     *
     * @var int
     */
    public $costCenterId;

    /**
     * @var filterExpression
     */
    public $filterExpression;

    /**
     * @example 2084210001
     *
     * @var string
     */
    public $nbid;
    protected $_name = [
        'costCenterId' => 'CostCenterId',
        'filterExpression' => 'FilterExpression',
        'nbid' => 'Nbid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->costCenterId) {
            $res['CostCenterId'] = $this->costCenterId;
        }
        if (null !== $this->filterExpression) {
            $res['FilterExpression'] = null !== $this->filterExpression ? $this->filterExpression->toMap() : null;
        }
        if (null !== $this->nbid) {
            $res['Nbid'] = $this->nbid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCostCenterRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CostCenterId'])) {
            $model->costCenterId = $map['CostCenterId'];
        }
        if (isset($map['FilterExpression'])) {
            $model->filterExpression = filterExpression::fromMap($map['FilterExpression']);
        }
        if (isset($map['Nbid'])) {
            $model->nbid = $map['Nbid'];
        }

        return $model;
    }
}
