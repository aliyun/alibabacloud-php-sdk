<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;

class CreateCostCenterRuleShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $costCenterId;

    /**
     * @var string
     */
    public $filterExpressionShrink;

    /**
     * @var string
     */
    public $nbid;
    protected $_name = [
        'costCenterId' => 'CostCenterId',
        'filterExpressionShrink' => 'FilterExpression',
        'nbid' => 'Nbid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->costCenterId) {
            $res['CostCenterId'] = $this->costCenterId;
        }

        if (null !== $this->filterExpressionShrink) {
            $res['FilterExpression'] = $this->filterExpressionShrink;
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
            $model->filterExpressionShrink = $map['FilterExpression'];
        }

        if (isset($map['Nbid'])) {
            $model->nbid = $map['Nbid'];
        }

        return $model;
    }
}
