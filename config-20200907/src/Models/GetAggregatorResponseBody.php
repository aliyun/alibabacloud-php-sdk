<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregatorResponseBody\aggregator;

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
        if (null !== $this->aggregator) {
            $this->aggregator->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aggregator) {
            $res['Aggregator'] = null !== $this->aggregator ? $this->aggregator->toArray($noStream) : $this->aggregator;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Aggregator'])) {
            $model->aggregator = aggregator::fromMap($map['Aggregator']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
