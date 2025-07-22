<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetFundAccountCanRecycleAmountResponseBody\recycleToFundAccountList;
use AlibabaCloud\Tea\Model;

class GetFundAccountCanRecycleAmountResponseBody extends Model
{
    /**
     * @example 300
     *
     * @var string
     */
    public $availableAmount;

    /**
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @example {}
     *
     * @var mixed
     */
    public $metadata;

    /**
     * @example 1232122132
     *
     * @var string
     */
    public $recycleFromFundAccountId;

    /**
     * @var recycleToFundAccountList[]
     */
    public $recycleToFundAccountList;

    /**
     * @example 6000EE23-274B-4E07-A697-FF2E999520A4
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 200
     *
     * @var string
     */
    public $transferAmount;
    protected $_name = [
        'availableAmount' => 'AvailableAmount',
        'currency' => 'Currency',
        'metadata' => 'Metadata',
        'recycleFromFundAccountId' => 'RecycleFromFundAccountId',
        'recycleToFundAccountList' => 'RecycleToFundAccountList',
        'requestId' => 'RequestId',
        'transferAmount' => 'TransferAmount',
    ];

    public function validate() {}

    public function toMap()
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
            $res['RecycleToFundAccountList'] = [];
            if (null !== $this->recycleToFundAccountList && \is_array($this->recycleToFundAccountList)) {
                $n = 0;
                foreach ($this->recycleToFundAccountList as $item) {
                    $res['RecycleToFundAccountList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return GetFundAccountCanRecycleAmountResponseBody
     */
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
                $n = 0;
                foreach ($map['RecycleToFundAccountList'] as $item) {
                    $model->recycleToFundAccountList[$n++] = null !== $item ? recycleToFundAccountList::fromMap($item) : $item;
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
