<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeAvailableResourceResponseBody\availableZoneList\availableZone\supportedSerialList\supportedSerial\supportedInstanceClassList\supportedInstanceClass\supportedNodeCountList;

use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeAvailableResourceResponseBody\availableZoneList\availableZone\supportedSerialList\supportedSerial\supportedInstanceClassList\supportedInstanceClass\supportedNodeCountList\supportedNodeCount\nodeCount;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeAvailableResourceResponseBody\availableZoneList\availableZone\supportedSerialList\supportedSerial\supportedInstanceClassList\supportedInstanceClass\supportedNodeCountList\supportedNodeCount\storageSize;
use AlibabaCloud\Tea\Model;

class supportedNodeCount extends Model
{
    /**
     * @var nodeCount
     */
    public $nodeCount;

    /**
     * @var storageSize
     */
    public $storageSize;
    protected $_name = [
        'nodeCount'   => 'NodeCount',
        'storageSize' => 'StorageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeCount) {
            $res['NodeCount'] = null !== $this->nodeCount ? $this->nodeCount->toMap() : null;
        }
        if (null !== $this->storageSize) {
            $res['StorageSize'] = null !== $this->storageSize ? $this->storageSize->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedNodeCount
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeCount'])) {
            $model->nodeCount = nodeCount::fromMap($map['NodeCount']);
        }
        if (isset($map['StorageSize'])) {
            $model->storageSize = storageSize::fromMap($map['StorageSize']);
        }

        return $model;
    }
}
