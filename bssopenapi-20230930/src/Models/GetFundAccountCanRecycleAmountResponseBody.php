<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetFundAccountCanRecycleAmountResponseBody\recycleToFundAccountList;

class GetFundAccountCanRecycleAmountResponseBody extends Model
{
    /**
     * @var string
     */
    public $availableAmount;
    /**
     * @var string
     */
    public $currency;
    /**
     * @var mixed
     */
    public $metadata;
    /**
     * @var string
     */
    public $recycleFromFundAccountId;
    /**
     * @var recycleToFundAccountList[]
     */
    public $recycleToFundAccountList;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $transferAmount;
    protected $_name = [
        'availableAmount'          => 'AvailableAmount',
        'currency'                 => 'Currency',
        'metadata'                 => 'Metadata',
        'recycleFromFundAccountId' => 'RecycleFromFundAccountId',
        'recycleToFundAccountList' => 'RecycleToFundAccountList',
        'requestId'                => 'RequestId',
        'transferAmount'           => 'TransferAmount',
    ];

    public function validate()
    {
        if (\is_array($this->recycleToFundAccountList)) {
            Model::validateArray($this->recycleToFundAccountList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableAmount) {
            $res['AvailableAmount'] = $this->availableAmount;
        }

        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }

        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
        }

        if (null !== $this->recycleFromFundAccountId) {
            $res['RecycleFromFundAccountId'] = $this->recycleFromFundAccountId;
        }

        if (null !== $this->recycleToFundAccountList) {
            if (\is_array($this->recycleToFundAccountList)) {
                $res['RecycleToFundAccountList'] = [];
                $n1                              = 0;
                foreach ($this->recycleToFundAccountList as $item1) {
                    $res['RecycleToFundAccountList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->transferAmount) {
            $res['TransferAmount'] = $this->transferAmount;
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
        if (isset($map['AvailableAmount'])) {
            $model->availableAmount = $map['AvailableAmount'];
        }

        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }

        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }

        if (isset($map['RecycleFromFundAccountId'])) {
            $model->recycleFromFundAccountId = $map['RecycleFromFundAccountId'];
        }

        if (isset($map['RecycleToFundAccountList'])) {
            if (!empty($map['RecycleToFundAccountList'])) {
                $model->recycleToFundAccountList = [];
                $n1                              = 0;
                foreach ($map['RecycleToFundAccountList'] as $item1) {
                    $model->recycleToFundAccountList[$n1++] = recycleToFundAccountList::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TransferAmount'])) {
            $model->transferAmount = $map['TransferAmount'];
        }

        return $model;
    }
}
