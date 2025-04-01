<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantResponseBody\tenant\readOnlyResource;

use AlibabaCloud\Dara\Model;

class cpu extends Model
{
    /**
     * @var float
     */
    public $totalCpu;

    /**
     * @var float
     */
    public $unitCpu;

    /**
     * @var float
     */
    public $usedCpu;
    protected $_name = [
        'totalCpu' => 'TotalCpu',
        'unitCpu' => 'UnitCpu',
        'usedCpu' => 'UsedCpu',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->totalCpu) {
            $res['TotalCpu'] = $this->totalCpu;
        }

        if (null !== $this->unitCpu) {
            $res['UnitCpu'] = $this->unitCpu;
        }

        if (null !== $this->usedCpu) {
            $res['UsedCpu'] = $this->usedCpu;
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
        if (isset($map['TotalCpu'])) {
            $model->totalCpu = $map['TotalCpu'];
        }

        if (isset($map['UnitCpu'])) {
            $model->unitCpu = $map['UnitCpu'];
        }

        if (isset($map['UsedCpu'])) {
            $model->usedCpu = $map['UsedCpu'];
        }

        return $model;
    }
}
