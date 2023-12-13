<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\records;

use AlibabaCloud\Tea\Model;

class filesystem extends Model
{
    /**
     * @description The size of the available space.
     *
     * @example 35319836672
     *
     * @var int
     */
    public $available;

    /**
     * @description The total file system space.
     *
     * @example 41610981376
     *
     * @var int
     */
    public $capacity;

    /**
     * @description The name of the partition.
     *
     * @example /dev/root
     *
     * @var string
     */
    public $fsName;

    /**
     * @description The size of used space.
     *
     * @example 4368744448
     *
     * @var int
     */
    public $usage;
    protected $_name = [
        'available' => 'Available',
        'capacity'  => 'Capacity',
        'fsName'    => 'FsName',
        'usage'     => 'Usage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->available) {
            $res['Available'] = $this->available;
        }
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }
        if (null !== $this->fsName) {
            $res['FsName'] = $this->fsName;
        }
        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filesystem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Available'])) {
            $model->available = $map['Available'];
        }
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }
        if (isset($map['FsName'])) {
            $model->fsName = $map['FsName'];
        }
        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }

        return $model;
    }
}
