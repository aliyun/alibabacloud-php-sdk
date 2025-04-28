<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableResourceResponseBody\availableZoneList\supportedMode\supportedSerialList\supportedInstanceClassList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableResourceResponseBody\availableZoneList\supportedMode\supportedSerialList\supportedInstanceClassList\supportedNodeCountList\nodeCount;

class supportedNodeCountList extends Model
{
    /**
     * @var nodeCount
     */
    public $nodeCount;

    /**
     * @var string[]
     */
    public $storageSize;
    protected $_name = [
        'nodeCount' => 'NodeCount',
        'storageSize' => 'StorageSize',
    ];

    public function validate()
    {
        if (null !== $this->nodeCount) {
            $this->nodeCount->validate();
        }
        if (\is_array($this->storageSize)) {
            Model::validateArray($this->storageSize);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeCount) {
            $res['NodeCount'] = null !== $this->nodeCount ? $this->nodeCount->toArray($noStream) : $this->nodeCount;
        }

        if (null !== $this->storageSize) {
            if (\is_array($this->storageSize)) {
                $res['StorageSize'] = [];
                $n1 = 0;
                foreach ($this->storageSize as $item1) {
                    $res['StorageSize'][$n1++] = $item1;
                }
            }
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
        if (isset($map['NodeCount'])) {
            $model->nodeCount = nodeCount::fromMap($map['NodeCount']);
        }

        if (isset($map['StorageSize'])) {
            if (!empty($map['StorageSize'])) {
                $model->storageSize = [];
                $n1 = 0;
                foreach ($map['StorageSize'] as $item1) {
                    $model->storageSize[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
