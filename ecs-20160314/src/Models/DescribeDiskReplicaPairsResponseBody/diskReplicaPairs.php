<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDiskReplicaPairsResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDiskReplicaPairsResponseBody\diskReplicaPairs\diskReplicaPair;
use AlibabaCloud\Tea\Model;

class diskReplicaPairs extends Model
{
    /**
     * @var diskReplicaPair[]
     */
    public $diskReplicaPair;
    protected $_name = [
        'diskReplicaPair' => 'DiskReplicaPair',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskReplicaPair) {
            $res['DiskReplicaPair'] = [];
            if (null !== $this->diskReplicaPair && \is_array($this->diskReplicaPair)) {
                $n = 0;
                foreach ($this->diskReplicaPair as $item) {
                    $res['DiskReplicaPair'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diskReplicaPairs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskReplicaPair'])) {
            if (!empty($map['DiskReplicaPair'])) {
                $model->diskReplicaPair = [];
                $n                      = 0;
                foreach ($map['DiskReplicaPair'] as $item) {
                    $model->diskReplicaPair[$n++] = null !== $item ? diskReplicaPair::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
