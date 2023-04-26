<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class DeleteAggregatorsRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must ensure that it is unique among different requests. ClientToken can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example ca-9190626622af00a9****
     *
     * @var string
     */
    public $aggregatorIds;

    /**
     * @description The ID of the request.
     *
     * @example AAAAAdDWBF2****
     *
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
