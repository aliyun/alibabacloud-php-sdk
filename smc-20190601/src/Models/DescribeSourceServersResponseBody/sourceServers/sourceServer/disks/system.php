<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models\DescribeSourceServersResponseBody\sourceServers\sourceServer\disks;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeSourceServersResponseBody\sourceServers\sourceServer\disks\system\parts;

class system extends Model
{
    /**
     * @var int
     */
    public $offset;

    /**
     * @var parts
     */
    public $parts;

    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'offset' => 'Offset',
        'parts' => 'Parts',
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
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }

        if (null !== $this->parts) {
            $res['Parts'] = null !== $this->parts ? $this->parts->toArray($noStream) : $this->parts;
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
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }

        if (isset($map['Parts'])) {
            $model->parts = parts::fromMap($map['Parts']);
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
