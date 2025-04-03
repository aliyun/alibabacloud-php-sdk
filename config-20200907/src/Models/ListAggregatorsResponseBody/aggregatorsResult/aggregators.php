<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListAggregatorsResponseBody\aggregatorsResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregatorsResponseBody\aggregatorsResult\aggregators\tags;

class aggregators extends Model
{
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var int
     */
    public $aggregatorAccountCount;

    /**
     * @var int
     */
    public $aggregatorCreateTimestamp;

    /**
     * @var string
     */
    public $aggregatorId;

    /**
     * @var string
     */
    public $aggregatorName;

    /**
     * @var int
     */
    public $aggregatorStatus;

    /**
     * @var string
     */
    public $aggregatorType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $folderId;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'accountId' => 'AccountId',
        'aggregatorAccountCount' => 'AggregatorAccountCount',
        'aggregatorCreateTimestamp' => 'AggregatorCreateTimestamp',
        'aggregatorId' => 'AggregatorId',
        'aggregatorName' => 'AggregatorName',
        'aggregatorStatus' => 'AggregatorStatus',
        'aggregatorType' => 'AggregatorType',
        'description' => 'Description',
        'folderId' => 'FolderId',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->folderId) {
            $res['FolderId'] = $this->folderId;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        if (isset($map['FolderId'])) {
            $model->folderId = $map['FolderId'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
