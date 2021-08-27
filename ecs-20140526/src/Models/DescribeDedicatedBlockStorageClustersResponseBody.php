<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedBlockStorageClustersResponseBody\dedicatedBlockStorageClusters;
use AlibabaCloud\Tea\Model;

class DescribeDedicatedBlockStorageClustersResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var dedicatedBlockStorageClusters
     */
    public $dedicatedBlockStorageClusters;
    protected $_name = [
        'nextToken'                     => 'NextToken',
        'requestId'                     => 'RequestId',
        'dedicatedBlockStorageClusters' => 'DedicatedBlockStorageClusters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->dedicatedBlockStorageClusters) {
            $res['DedicatedBlockStorageClusters'] = null !== $this->dedicatedBlockStorageClusters ? $this->dedicatedBlockStorageClusters->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDedicatedBlockStorageClustersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DedicatedBlockStorageClusters'])) {
            $model->dedicatedBlockStorageClusters = dedicatedBlockStorageClusters::fromMap($map['DedicatedBlockStorageClusters']);
        }

        return $model;
    }
}
