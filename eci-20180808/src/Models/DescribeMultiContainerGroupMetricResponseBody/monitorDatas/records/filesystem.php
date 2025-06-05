<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\records;

use AlibabaCloud\Dara\Model;

class filesystem extends Model
{
    /**
     * @var int
     */
    public $available;

    /**
     * @var int
     */
    public $capacity;

    /**
     * @var string
     */
    public $fsName;

    /**
     * @var int
     */
    public $usage;
    protected $_name = [
        'available' => 'Available',
        'capacity' => 'Capacity',
        'fsName' => 'FsName',
        'usage' => 'Usage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
