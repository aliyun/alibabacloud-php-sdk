<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListMachineTypesResponseBody\machineTypes;

use AlibabaCloud\Dara\Model;

class memoryInfoDetail extends Model
{
    /**
     * @var int
     */
    public $memorySizeInGB;
    protected $_name = [
        'memorySizeInGB' => 'MemorySizeInGB',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->memorySizeInGB) {
            $res['MemorySizeInGB'] = $this->memorySizeInGB;
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
        if (isset($map['MemorySizeInGB'])) {
            $model->memorySizeInGB = $map['MemorySizeInGB'];
        }

        return $model;
    }
}
