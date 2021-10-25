<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableResourceResponseBody\availableZoneList\supportedMode\supportedSerialList\supportedInstanceClassList;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableResourceResponseBody\availableZoneList\supportedMode\supportedSerialList\supportedInstanceClassList\supportedNodeCountList\nodeCount;
use AlibabaCloud\Tea\Model;

class supportedNodeCountList extends Model
{
    /**
     * @var string[]
     */
    public $storageSize;

    /**
     * @var nodeCount
     */
    public $nodeCount;
    protected $_name = [
        'storageSize' => 'StorageSize',
        'nodeCount'   => 'NodeCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->storageSize) {
            $res['StorageSize'] = $this->storageSize;
        }
        if (null !== $this->nodeCount) {
            $res['NodeCount'] = null !== $this->nodeCount ? $this->nodeCount->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedNodeCountList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StorageSize'])) {
            if (!empty($map['StorageSize'])) {
                $model->storageSize = $map['StorageSize'];
            }
        }
        if (isset($map['NodeCount'])) {
            $model->nodeCount = nodeCount::fromMap($map['NodeCount']);
        }

        return $model;
    }
}
