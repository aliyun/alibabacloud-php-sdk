<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregatorResponseBody\aggregator;
use AlibabaCloud\Tea\Model;

class GetAggregatorResponseBody extends Model
{
    /**
     * @var aggregator
     */
    public $aggregator;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'aggregator' => 'Aggregator',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregator) {
            $res['Aggregator'] = null !== $this->aggregator ? $this->aggregator->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Aggregator'])) {
            $model->aggregator = aggregator::fromMap($map['Aggregator']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
