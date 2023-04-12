<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class UpdateAggregatorResponseBody extends Model
{
    /**
     * @description The ID of the account group.
     *
     * @example ca-dacf86d8314e00eb****
     *
     * @var string
     */
    public $aggregatorId;

    /**
     * @description The ID of the request.
     *
     * @example 8195B664-9565-4685-89AC-8B5F04B44B92
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'aggregatorId' => 'AggregatorId',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregatorId) {
            $res['AggregatorId'] = $this->aggregatorId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAggregatorResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregatorId'])) {
            $model->aggregatorId = $map['AggregatorId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
