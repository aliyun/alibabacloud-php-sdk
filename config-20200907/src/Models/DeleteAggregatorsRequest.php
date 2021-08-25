<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DeleteAggregatorsRequest
     */
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
