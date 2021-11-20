<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\UpdateAggregatorRequest\aggregatorAccounts;
use AlibabaCloud\Tea\Model;

class UpdateAggregatorRequest extends Model
{
    /**
     * @var aggregatorAccounts[]
     */
    public $aggregatorAccounts;

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
