<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantResponseBody\tenant\readOnlyResource;

use AlibabaCloud\Tea\Model;

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
        'unitLogDisk'  => 'UnitLogDisk',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return logDiskSize
     */
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
