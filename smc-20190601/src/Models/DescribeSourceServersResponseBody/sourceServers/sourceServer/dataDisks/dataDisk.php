<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models\DescribeSourceServersResponseBody\sourceServers\sourceServer\dataDisks;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeSourceServersResponseBody\sourceServers\sourceServer\dataDisks\dataDisk\parts;

class dataDisk extends Model
{
    /**
     * @var int
     */
    public $index;

    /**
     * @var parts
     */
    public $parts;

    /**
     * @var string
     */
    public $path;

    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'index' => 'Index',
        'parts' => 'Parts',
        'path' => 'Path',
        'size' => 'Size',
    ];

    public function validate()
    {
        if (null !== $this->parts) {
            $this->parts->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }

        if (null !== $this->parts) {
            $res['Parts'] = null !== $this->parts ? $this->parts->toArray($noStream) : $this->parts;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
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
