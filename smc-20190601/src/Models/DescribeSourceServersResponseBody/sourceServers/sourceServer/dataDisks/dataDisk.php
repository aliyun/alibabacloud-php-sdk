<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models\DescribeSourceServersResponseBody\sourceServers\sourceServer\dataDisks;

use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeSourceServersResponseBody\sourceServers\sourceServer\dataDisks\dataDisk\parts;
use AlibabaCloud\Tea\Model;

class dataDisk extends Model
{
    /**
     * @var int
     */
    public $index;

    /**
     * @var int
     */
    public $size;

    /**
     * @var parts
     */
    public $parts;

    /**
     * @var string
     */
    public $path;
    protected $_name = [
        'index' => 'Index',
        'size'  => 'Size',
        'parts' => 'Parts',
        'path'  => 'Path',
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
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->parts) {
            $res['Parts'] = null !== $this->parts ? $this->parts->toMap() : null;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
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
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Parts'])) {
            $model->parts = parts::fromMap($map['Parts']);
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        return $model;
    }
}
