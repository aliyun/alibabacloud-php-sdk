<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\QueryDedicatedBlockStorageClusterInventoryDataResponseBody\data;

use AlibabaCloud\Tea\Model;

class monitorItems extends Model
{
    /**
     * @description Available capacity size of the dedicated block storage cluster.
     *
     * @example 61360
     *
     * @var int
     */
    public $availableSize;

    /**
     * @description Total capacity size of the dedicated block storage cluster.
     *
     * @example 61440
     *
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'availableSize' => 'AvailableSize',
        'totalSize'     => 'TotalSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableSize) {
            $res['AvailableSize'] = $this->availableSize;
        }
        if (null !== $this->totalSize) {
            $res['TotalSize'] = $this->totalSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return monitorItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableSize'])) {
            $model->availableSize = $map['AvailableSize'];
        }
        if (isset($map['TotalSize'])) {
            $model->totalSize = $map['TotalSize'];
        }

        return $model;
    }
}
