<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;

class UpdateAggregatorShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $aggregatorAccountsShrink;
    /**
     * @var string
     */
    public $aggregatorId;
    /**
     * @var string
     */
    public $aggregatorName;
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var string
     */
    public $description;
    protected $_name = [
        'aggregatorAccountsShrink' => 'AggregatorAccounts',
        'aggregatorId'             => 'AggregatorId',
        'aggregatorName'           => 'AggregatorName',
        'clientToken'              => 'ClientToken',
        'description'              => 'Description',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aggregatorAccountsShrink) {
            $res['AggregatorAccounts'] = $this->aggregatorAccountsShrink;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregatorAccounts'])) {
            $model->aggregatorAccountsShrink = $map['AggregatorAccounts'];
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
