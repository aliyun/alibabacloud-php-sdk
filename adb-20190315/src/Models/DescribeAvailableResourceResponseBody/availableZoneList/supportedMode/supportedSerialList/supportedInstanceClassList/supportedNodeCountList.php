<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableResourceResponseBody\availableZoneList\supportedMode\supportedSerialList\supportedInstanceClassList;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableResourceResponseBody\availableZoneList\supportedMode\supportedSerialList\supportedInstanceClassList\supportedNodeCountList\nodeCount;
use AlibabaCloud\Tea\Model;

class supportedNodeCountList extends Model
{
    /**
     * @description The number of the supported compute nodes.
     *
     * @var nodeCount
     */
    public $nodeCount;

    /**
     * @description The support storage capacity. Unit: GB.
     *
     * @var string[]
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
            $res['StorageSize'] = $this->storageSize;
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
        if (isset($map['NodeCount'])) {
            $model->nodeCount = nodeCount::fromMap($map['NodeCount']);
        }
        if (isset($map['StorageSize'])) {
            if (!empty($map['StorageSize'])) {
                $model->storageSize = $map['StorageSize'];
            }
        }

        return $model;
    }
}
