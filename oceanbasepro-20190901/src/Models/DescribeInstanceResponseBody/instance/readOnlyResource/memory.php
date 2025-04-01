<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceResponseBody\instance\readOnlyResource;

use AlibabaCloud\Dara\Model;

class memory extends Model
{
    /**
     * @var int
     */
    public $originalTotalMemory;

    /**
     * @var int
     */
    public $totalMemory;

    /**
     * @var int
     */
    public $unitMemory;

    /**
     * @var int
     */
    public $usedMemory;
    protected $_name = [
        'originalTotalMemory' => 'OriginalTotalMemory',
        'totalMemory' => 'TotalMemory',
        'unitMemory' => 'UnitMemory',
        'usedMemory' => 'UsedMemory',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->originalTotalMemory) {
            $res['OriginalTotalMemory'] = $this->originalTotalMemory;
        }

        if (null !== $this->totalMemory) {
            $res['TotalMemory'] = $this->totalMemory;
        }

        if (null !== $this->unitMemory) {
            $res['UnitMemory'] = $this->unitMemory;
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
        if (isset($map['OriginalTotalMemory'])) {
            $model->originalTotalMemory = $map['OriginalTotalMemory'];
        }

        if (isset($map['TotalMemory'])) {
            $model->totalMemory = $map['TotalMemory'];
        }

        if (isset($map['UnitMemory'])) {
            $model->unitMemory = $map['UnitMemory'];
        }

        if (isset($map['UsedMemory'])) {
            $model->usedMemory = $map['UsedMemory'];
        }

        return $model;
    }
}
