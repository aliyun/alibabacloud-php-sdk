<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology\replicas\replicaResource;

use AlibabaCloud\Dara\Model;

class memory extends Model
{
    /**
     * @var int
     */
    public $totalMemory;

    /**
     * @var int
     */
    public $usedMemory;
    protected $_name = [
        'totalMemory' => 'TotalMemory',
        'usedMemory' => 'UsedMemory',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->totalMemory) {
            $res['TotalMemory'] = $this->totalMemory;
        }

        if (null !== $this->usedMemory) {
            $res['UsedMemory'] = $this->usedMemory;
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
        if (isset($map['TotalMemory'])) {
            $model->totalMemory = $map['TotalMemory'];
        }

        if (isset($map['UsedMemory'])) {
            $model->usedMemory = $map['UsedMemory'];
        }

        return $model;
    }
}
