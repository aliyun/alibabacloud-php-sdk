<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class CreateAggregatorShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $aggregatorName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $aggregatorAccountsShrink;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $aggregatorType;
    protected $_name = [
        'aggregatorName'           => 'AggregatorName',
        'description'              => 'Description',
        'aggregatorAccountsShrink' => 'AggregatorAccounts',
        'clientToken'              => 'ClientToken',
        'aggregatorType'           => 'AggregatorType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregatorName) {
            $res['AggregatorName'] = $this->aggregatorName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->aggregatorAccountsShrink) {
            $res['AggregatorAccounts'] = $this->aggregatorAccountsShrink;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->aggregatorType) {
            $res['AggregatorType'] = $this->aggregatorType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAggregatorShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregatorName'])) {
            $model->aggregatorName = $map['AggregatorName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['AggregatorAccounts'])) {
            $model->aggregatorAccountsShrink = $map['AggregatorAccounts'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['AggregatorType'])) {
            $model->aggregatorType = $map['AggregatorType'];
        }

        return $model;
    }
}
