<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\CreateAggregatorRequest\aggregatorAccounts;
use AlibabaCloud\Tea\Model;

class CreateAggregatorRequest extends Model
{
    /**
     * @var aggregatorAccounts[]
     */
    public $aggregatorAccounts;

    /**
     * @var string
     */
    public $aggregatorName;

    /**
     * @var string
     */
    public $aggregatorType;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $description;
    protected $_name = [
        'aggregatorAccounts' => 'AggregatorAccounts',
        'aggregatorName'     => 'AggregatorName',
        'aggregatorType'     => 'AggregatorType',
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
        if (null !== $this->aggregatorName) {
            $res['AggregatorName'] = $this->aggregatorName;
        }
        if (null !== $this->aggregatorType) {
            $res['AggregatorType'] = $this->aggregatorType;
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
     * @return CreateAggregatorRequest
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
        if (isset($map['AggregatorName'])) {
            $model->aggregatorName = $map['AggregatorName'];
        }
        if (isset($map['AggregatorType'])) {
            $model->aggregatorType = $map['AggregatorType'];
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
