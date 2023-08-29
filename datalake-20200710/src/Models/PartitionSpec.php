<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\SDK\DataLake\V20200710\Models\PartitionSpec\sharedStorageDescriptor;
use AlibabaCloud\Tea\Model;

class PartitionSpec extends Model
{
    /**
     * @var Partition[]
     */
    public $sharedSDPartitions;

    /**
     * @var sharedStorageDescriptor
     */
    public $sharedStorageDescriptor;
    protected $_name = [
        'sharedSDPartitions'      => 'SharedSDPartitions',
        'sharedStorageDescriptor' => 'SharedStorageDescriptor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sharedSDPartitions) {
            $res['SharedSDPartitions'] = [];
            if (null !== $this->sharedSDPartitions && \is_array($this->sharedSDPartitions)) {
                $n = 0;
                foreach ($this->sharedSDPartitions as $item) {
                    $res['SharedSDPartitions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sharedStorageDescriptor) {
            $res['SharedStorageDescriptor'] = null !== $this->sharedStorageDescriptor ? $this->sharedStorageDescriptor->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PartitionSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SharedSDPartitions'])) {
            if (!empty($map['SharedSDPartitions'])) {
                $model->sharedSDPartitions = [];
                $n                         = 0;
                foreach ($map['SharedSDPartitions'] as $item) {
                    $model->sharedSDPartitions[$n++] = null !== $item ? Partition::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SharedStorageDescriptor'])) {
            $model->sharedStorageDescriptor = sharedStorageDescriptor::fromMap($map['SharedStorageDescriptor']);
        }

        return $model;
    }
}
