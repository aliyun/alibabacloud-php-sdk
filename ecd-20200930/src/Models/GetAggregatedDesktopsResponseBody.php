<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\GetAggregatedDesktopsResponseBody\aggregations;

class GetAggregatedDesktopsResponseBody extends Model
{
    /**
     * @var aggregations
     */
    public $aggregations;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'aggregations' => 'Aggregations',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->aggregations) {
            $this->aggregations->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aggregations) {
            $res['Aggregations'] = null !== $this->aggregations ? $this->aggregations->toArray($noStream) : $this->aggregations;
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
        if (isset($map['Aggregations'])) {
            $model->aggregations = aggregations::fromMap($map['Aggregations']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
