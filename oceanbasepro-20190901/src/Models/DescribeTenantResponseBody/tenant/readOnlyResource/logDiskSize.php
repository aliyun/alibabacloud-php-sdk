<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantResponseBody\tenant\readOnlyResource;

use AlibabaCloud\Dara\Model;

class logDiskSize extends Model
{
    /**
     * @var int
     */
    public $totalLogDisk;

    /**
     * @var int
     */
    public $unitLogDisk;
    protected $_name = [
        'totalLogDisk' => 'TotalLogDisk',
        'unitLogDisk' => 'UnitLogDisk',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->totalLogDisk) {
            $res['TotalLogDisk'] = $this->totalLogDisk;
        }

        if (null !== $this->unitLogDisk) {
            $res['UnitLogDisk'] = $this->unitLogDisk;
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
        if (isset($map['TotalLogDisk'])) {
            $model->totalLogDisk = $map['TotalLogDisk'];
        }

        if (isset($map['UnitLogDisk'])) {
            $model->unitLogDisk = $map['UnitLogDisk'];
        }

        return $model;
    }
}
