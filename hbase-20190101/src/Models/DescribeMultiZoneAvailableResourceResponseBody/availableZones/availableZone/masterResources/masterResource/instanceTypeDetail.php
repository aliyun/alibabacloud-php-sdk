<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeMultiZoneAvailableResourceResponseBody\availableZones\availableZone\masterResources\masterResource;

use AlibabaCloud\Dara\Model;

class instanceTypeDetail extends Model
{
    /**
     * @var int
     */
    public $cpu;

    /**
     * @var int
     */
    public $mem;
    protected $_name = [
        'cpu' => 'Cpu',
        'mem' => 'Mem',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->mem) {
            $res['Mem'] = $this->mem;
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
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['Mem'])) {
            $model->mem = $map['Mem'];
        }

        return $model;
    }
}
