<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregatorResponseBody\aggregator;
use AlibabaCloud\Tea\Model;

class GetAggregatorResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var aggregator
     */
    public $aggregator;
    protected $_name = [
        'requestId'  => 'RequestId',
        'aggregator' => 'Aggregator',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->aggregator) {
            $res['Aggregator'] = null !== $this->aggregator ? $this->aggregator->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAggregatorResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Aggregator'])) {
            $model->aggregator = aggregator::fromMap($map['Aggregator']);
        }

        return $model;
    }
}
