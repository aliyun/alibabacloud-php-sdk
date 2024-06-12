<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class DeleteAggregatorsRequest extends Model
{
    /**
     * @description The ID of the account group. Separate multiple IDs with commas (,).
     *
     * This parameter is required.
     * @example ca-9190626622af00a9****
     *
     * @var string
     */
    public $aggregatorIds;

    /**
     * @description The client token that you want to use to ensure the idempotency of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
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
