<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDedicatedBlockStorageClustersResponseBody\dedicatedBlockStorageClusters;
use AlibabaCloud\Tea\Model;

class DescribeDedicatedBlockStorageClustersResponseBody extends Model
{
    /**
     * @var dedicatedBlockStorageClusters[]
     */
    public $dedicatedBlockStorageClusters;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dedicatedBlockStorageClusters' => 'DedicatedBlockStorageClusters',
        'nextToken'                     => 'NextToken',
        'requestId'                     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedBlockStorageClusters) {
            $res['DedicatedBlockStorageClusters'] = [];
            if (null !== $this->dedicatedBlockStorageClusters && \is_array($this->dedicatedBlockStorageClusters)) {
                $n = 0;
                foreach ($this->dedicatedBlockStorageClusters as $item) {
                    $res['DedicatedBlockStorageClusters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DedicatedBlockStorageClusters'])) {
            if (!empty($map['DedicatedBlockStorageClusters'])) {
                $model->dedicatedBlockStorageClusters = [];
                $n                                    = 0;
                foreach ($map['DedicatedBlockStorageClusters'] as $item) {
                    $model->dedicatedBlockStorageClusters[$n++] = null !== $item ? dedicatedBlockStorageClusters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
