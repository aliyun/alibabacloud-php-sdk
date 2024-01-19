<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models\DescribeSourceServersResponseBody\sourceServers\sourceServer\dataDisks;

use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeSourceServersResponseBody\sourceServers\sourceServer\dataDisks\dataDisk\parts;
use AlibabaCloud\Tea\Model;

class dataDisk extends Model
{
    /**
     * @description The index number of the data disk.
     *
     * @example 1
     *
     * @var int
     */
    public $index;

    /**
     * @description The information about the data disk partition.
     *
     * @var parts
     */
    public $parts;

    /**
     * @description The path of the data disk.
     *
     * @example /home/data
     *
     * @var string
     */
    public $path;

    /**
     * @description The size of the data disk. Unit: GiB.
     *
     * @example 20
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'index' => 'Index',
        'parts' => 'Parts',
        'path'  => 'Path',
        'size'  => 'Size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->parts) {
            $res['Parts'] = null !== $this->parts ? $this->parts->toMap() : null;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataDisk
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['Parts'])) {
            $model->parts = parts::fromMap($map['Parts']);
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
