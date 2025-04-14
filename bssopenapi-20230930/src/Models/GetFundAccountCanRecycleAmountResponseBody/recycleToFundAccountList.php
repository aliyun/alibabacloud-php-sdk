<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetFundAccountCanRecycleAmountResponseBody;

use AlibabaCloud\Dara\Model;

class recycleToFundAccountList extends Model
{
    /**
     * @var string
     */
    public $fundAccountId;

    /**
     * @var string
     */
    public $fundAccountName;

    /**
     * @var string
     */
    public $fundAccountOwnerAccountId;

    /**
     * @var string
     */
    public $maxRecyclableAmount;

    /**
     * @var string
     */
    public $originalTransferRemainAmount;
    protected $_name = [
        'fundAccountId' => 'FundAccountId',
        'fundAccountName' => 'FundAccountName',
        'fundAccountOwnerAccountId' => 'FundAccountOwnerAccountId',
        'maxRecyclableAmount' => 'MaxRecyclableAmount',
        'originalTransferRemainAmount' => 'OriginalTransferRemainAmount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fundAccountId) {
            $res['FundAccountId'] = $this->fundAccountId;
        }

        if (null !== $this->fundAccountName) {
            $res['FundAccountName'] = $this->fundAccountName;
        }

        if (null !== $this->fundAccountOwnerAccountId) {
            $res['FundAccountOwnerAccountId'] = $this->fundAccountOwnerAccountId;
        }

        if (null !== $this->maxRecyclableAmount) {
            $res['MaxRecyclableAmount'] = $this->maxRecyclableAmount;
        }

        if (null !== $this->originalTransferRemainAmount) {
            $res['OriginalTransferRemainAmount'] = $this->originalTransferRemainAmount;
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
        if (isset($map['FundAccountId'])) {
            $model->fundAccountId = $map['FundAccountId'];
        }

        if (isset($map['FundAccountName'])) {
            $model->fundAccountName = $map['FundAccountName'];
        }

        if (isset($map['FundAccountOwnerAccountId'])) {
            $model->fundAccountOwnerAccountId = $map['FundAccountOwnerAccountId'];
        }

        if (isset($map['MaxRecyclableAmount'])) {
            $model->maxRecyclableAmount = $map['MaxRecyclableAmount'];
        }

        if (isset($map['OriginalTransferRemainAmount'])) {
            $model->originalTransferRemainAmount = $map['OriginalTransferRemainAmount'];
        }

        return $model;
    }
}
