<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Tea\Model;

class ModifyCostCenterRuleShrinkRequest extends Model
{
    /**
     * @example 485938
     *
     * @var int
     */
    public $costCenterId;

    /**
     * @var string
     */
    public $filterExpressionShrink;

    /**
     * @example 2684201000001
     *
     * @var string
     */
    public $nbid;

    /**
     * @example 1234567812345678
     *
     * @var int
     */
    public $ownerAccountId;
    protected $_name = [
        'costCenterId' => 'CostCenterId',
        'filterExpressionShrink' => 'FilterExpression',
        'nbid' => 'Nbid',
        'ownerAccountId' => 'OwnerAccountId',
    ];

    public function validate() {}

    public function toMap()
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
        if (null !== $this->ownerAccountId) {
            $res['OwnerAccountId'] = $this->ownerAccountId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyCostCenterRuleShrinkRequest
     */
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
        if (isset($map['OwnerAccountId'])) {
            $model->ownerAccountId = $map['OwnerAccountId'];
        }

        return $model;
    }
}
