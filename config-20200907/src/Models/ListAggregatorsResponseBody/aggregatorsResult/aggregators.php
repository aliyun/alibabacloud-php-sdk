<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListAggregatorsResponseBody\aggregatorsResult;

use AlibabaCloud\Tea\Model;

class aggregators extends Model
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
     * @description The timestamp when the account group was created.
     *
     * @example 1623036305000
     *
     * @var int
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
     * @example Test_Group
     *
     * @var string
     */
    public $aggregatorName;

    /**
     * @description The status of the account group. Valid values:
     *
     *   0: being created.
     *   1: created.
     *
     * @example 1
     *
     * @var int
     */
    public $aggregatorStatus;

    /**
     * @description The type of the account group. Valid values:
     *
     *   RD: global account group.
     *   CUSTOM: custom account group.
     *
     * @example CUSTOM
     *
     * @var string
     */
    public $aggregatorType;

    /**
     * @description The description of the account group.
     *
     * @var string
     */
    public $description;
    protected $_name = [
        'accountId'                 => 'AccountId',
        'aggregatorAccountCount'    => 'AggregatorAccountCount',
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
     * @return aggregators
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
