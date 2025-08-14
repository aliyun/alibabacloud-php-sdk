<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ModifyCostCenterRuleRequest\filterExpression;

class ModifyCostCenterRuleRequest extends Model
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

    /**
     * @var int
     */
    public $ownerAccountId;
    protected $_name = [
        'costCenterId' => 'CostCenterId',
        'filterExpression' => 'FilterExpression',
        'nbid' => 'Nbid',
        'ownerAccountId' => 'OwnerAccountId',
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

        if (null !== $this->ownerAccountId) {
            $res['OwnerAccountId'] = $this->ownerAccountId;
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

        if (isset($map['OwnerAccountId'])) {
            $model->ownerAccountId = $map['OwnerAccountId'];
        }

        return $model;
    }
}
