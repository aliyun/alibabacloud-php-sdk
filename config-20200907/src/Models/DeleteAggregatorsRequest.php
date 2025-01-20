<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;

class DeleteAggregatorsRequest extends Model
{
    /**
     * @var string
     */
    public $aggregatorIds;
    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'aggregatorIds' => 'AggregatorIds',
        'clientToken'   => 'ClientToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aggregatorIds) {
            $res['AggregatorIds'] = $this->aggregatorIds;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
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
        if (isset($map['AggregatorIds'])) {
            $model->aggregatorIds = $map['AggregatorIds'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
