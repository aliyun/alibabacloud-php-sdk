<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DeleteCostCenterRuleRequest\filterExpression;

class DeleteCostCenterRuleRequest extends Model
{
    /**
     * @var int
     */
    public $costCenterId;

    /**
     * @var filterExpression
     */
    public $filterExpression;

    /**
     * @var string
     */
    public $nbid;
    protected $_name = [
        'costCenterId' => 'CostCenterId',
        'filterExpression' => 'FilterExpression',
        'nbid' => 'Nbid',
    ];

    public function validate()
    {
        if (null !== $this->filterExpression) {
            $this->filterExpression->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->costCenterId) {
            $res['CostCenterId'] = $this->costCenterId;
        }

        if (null !== $this->filterExpression) {
            $res['FilterExpression'] = null !== $this->filterExpression ? $this->filterExpression->toArray($noStream) : $this->filterExpression;
        }

        if (null !== $this->nbid) {
            $res['Nbid'] = $this->nbid;
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
