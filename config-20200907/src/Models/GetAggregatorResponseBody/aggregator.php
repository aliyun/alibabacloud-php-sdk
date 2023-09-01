<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetAggregatorResponseBody;

use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregatorResponseBody\aggregator\aggregatorAccounts;
use AlibabaCloud\Tea\Model;

class aggregator extends Model
{
    /**
     * @description The ID of the management account used to create the account group.
     *
     * @example 100931896542****
     *
     * @var int
     */
    public $accountId;

    /**
     * @description The number of member accounts in the account group.
     *
     * @example 2
     *
     * @var int
     */
    public $aggregatorAccountCount;

    /**
     * @description The information about the member accounts in the account group.
     *
     * @var aggregatorAccounts[]
     */
    public $aggregatorAccounts;

    /**
     * @description The timestamp when the account group was created.
     *
     * @example 1623034091000
     *
     * @var string
     */
    public $aggregatorCreateTimestamp;

    /**
     * @description The ID of the account group.
     *
     * @example ca-88ea626622af0055****
     *
     * @var string
     */
    public $aggregatorId;

    /**
     * @description The name of the account group.
     *
     * @example Test-Group
     *
     * @var string
     */
    public $aggregatorName;

    /**
     * @description The status of the account group. Valid values:
     *
     *   0: The account group is being created.
     *   1: The account group has been created.
     *
     * @example 1
     *
     * @var int
     */
    public $aggregatorStatus;

    /**
     * @description The type of the account group. Valid values:
     *
     *   RD: global account group
     *   CUSTOM: custom account group
     *
     * @example CUSTOM
     *
     * @var string
     */
    public $aggregatorType;

    /**
     * @description The description of the account group.
     *
     * @example The description of the test account group.
     *
     * @var string
     */
    public $description;
    protected $_name = [
        'accountId'                 => 'AccountId',
        'aggregatorAccountCount'    => 'AggregatorAccountCount',
        'aggregatorAccounts'        => 'AggregatorAccounts',
        'aggregatorCreateTimestamp' => 'AggregatorCreateTimestamp',
        'aggregatorId'              => 'AggregatorId',
        'aggregatorName'            => 'AggregatorName',
        'aggregatorStatus'          => 'AggregatorStatus',
        'aggregatorType'            => 'AggregatorType',
        'description'               => 'Description',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->aggregatorAccountCount) {
            $res['AggregatorAccountCount'] = $this->aggregatorAccountCount;
        }
        if (null !== $this->aggregatorAccounts) {
            $res['AggregatorAccounts'] = [];
            if (null !== $this->aggregatorAccounts && \is_array($this->aggregatorAccounts)) {
                $n = 0;
                foreach ($this->aggregatorAccounts as $item) {
                    $res['AggregatorAccounts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->aggregatorCreateTimestamp) {
            $res['AggregatorCreateTimestamp'] = $this->aggregatorCreateTimestamp;
        }
        if (null !== $this->aggregatorId) {
            $res['AggregatorId'] = $this->aggregatorId;
        }
        if (null !== $this->aggregatorName) {
            $res['AggregatorName'] = $this->aggregatorName;
        }
        if (null !== $this->aggregatorStatus) {
            $res['AggregatorStatus'] = $this->aggregatorStatus;
        }
        if (null !== $this->aggregatorType) {
            $res['AggregatorType'] = $this->aggregatorType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aggregator
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['AggregatorAccountCount'])) {
            $model->aggregatorAccountCount = $map['AggregatorAccountCount'];
        }
        if (isset($map['AggregatorAccounts'])) {
            if (!empty($map['AggregatorAccounts'])) {
                $model->aggregatorAccounts = [];
                $n                         = 0;
                foreach ($map['AggregatorAccounts'] as $item) {
                    $model->aggregatorAccounts[$n++] = null !== $item ? aggregatorAccounts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AggregatorCreateTimestamp'])) {
            $model->aggregatorCreateTimestamp = $map['AggregatorCreateTimestamp'];
        }
        if (isset($map['AggregatorId'])) {
            $model->aggregatorId = $map['AggregatorId'];
        }
        if (isset($map['AggregatorName'])) {
            $model->aggregatorName = $map['AggregatorName'];
        }
        if (isset($map['AggregatorStatus'])) {
            $model->aggregatorStatus = $map['AggregatorStatus'];
        }
        if (isset($map['AggregatorType'])) {
            $model->aggregatorType = $map['AggregatorType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
