<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\UpdateAggregatorRequest\aggregatorAccounts;
use AlibabaCloud\Tea\Model;

class UpdateAggregatorRequest extends Model
{
    /**
     * @description The information about the member accounts in the account group.
     *
     * >  When you modify the configurations of an account group, this parameter can be left empty. In this case, the member account list is not updated. If you want to update the member account list, you must set the `AccountId`, `AccountName` and `AccountType` parameters.
     * @var aggregatorAccounts[]
     */
    public $aggregatorAccounts;

    /**
     * @description The ID of the account group.
     *
     * For more information about how to obtain the ID of an account group, see [ListAggregators](~~255797~~).
     * @example ca-dacf86d8314e00eb****
     *
     * @var string
     */
    public $aggregatorId;

    /**
     * @description The name of the account group.
     *
     * For more information about how to obtain the name of an account group, see [ListAggregators](~~255797~~).
     * @example Test_Group
     *
     * @var string
     */
    public $aggregatorName;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must ensure that it is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example 1594295238-f9361358-5843-4294-8d30-b5183fac****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the account group.
     *
     * For more information about how to obtain the description of an account group, see [ListAggregators](~~255797~~).
     * @var string
     */
    public $description;
    protected $_name = [
        'aggregatorAccounts' => 'AggregatorAccounts',
        'aggregatorId'       => 'AggregatorId',
        'aggregatorName'     => 'AggregatorName',
        'clientToken'        => 'ClientToken',
        'description'        => 'Description',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregatorAccounts) {
            $res['AggregatorAccounts'] = [];
            if (null !== $this->aggregatorAccounts && \is_array($this->aggregatorAccounts)) {
                $n = 0;
                foreach ($this->aggregatorAccounts as $item) {
                    $res['AggregatorAccounts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->aggregatorId) {
            $res['AggregatorId'] = $this->aggregatorId;
        }
        if (null !== $this->aggregatorName) {
            $res['AggregatorName'] = $this->aggregatorName;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAggregatorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregatorAccounts'])) {
            if (!empty($map['AggregatorAccounts'])) {
                $model->aggregatorAccounts = [];
                $n                         = 0;
                foreach ($map['AggregatorAccounts'] as $item) {
                    $model->aggregatorAccounts[$n++] = null !== $item ? aggregatorAccounts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AggregatorId'])) {
            $model->aggregatorId = $map['AggregatorId'];
        }
        if (isset($map['AggregatorName'])) {
            $model->aggregatorName = $map['AggregatorName'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
