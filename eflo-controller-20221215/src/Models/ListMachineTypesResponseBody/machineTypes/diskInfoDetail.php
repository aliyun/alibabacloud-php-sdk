<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListMachineTypesResponseBody\machineTypes;

use AlibabaCloud\Dara\Model;

class diskInfoDetail extends Model
{
    /**
     * @var int
     */
    public $localDiskCount;

    /**
     * @var float
     */
    public $localDiskSizeInTB;

    /**
     * @var string
     */
    public $localDiskType;
    protected $_name = [
        'localDiskCount' => 'LocalDiskCount',
        'localDiskSizeInTB' => 'LocalDiskSizeInTB',
        'localDiskType' => 'LocalDiskType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->localDiskCount) {
            $res['LocalDiskCount'] = $this->localDiskCount;
        }

        if (null !== $this->localDiskSizeInTB) {
            $res['LocalDiskSizeInTB'] = $this->localDiskSizeInTB;
        }

        if (null !== $this->localDiskType) {
            $res['LocalDiskType'] = $this->localDiskType;
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
        if (isset($map['LocalDiskCount'])) {
            $model->localDiskCount = $map['LocalDiskCount'];
        }

        if (isset($map['LocalDiskSizeInTB'])) {
            $model->localDiskSizeInTB = $map['LocalDiskSizeInTB'];
        }

        if (isset($map['LocalDiskType'])) {
            $model->localDiskType = $map['LocalDiskType'];
        }

        return $model;
    }
}
