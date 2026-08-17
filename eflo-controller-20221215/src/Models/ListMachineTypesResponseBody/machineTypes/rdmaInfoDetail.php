<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListMachineTypesResponseBody\machineTypes;

use AlibabaCloud\Dara\Model;

class rdmaInfoDetail extends Model
{
    /**
     * @var int
     */
    public $backendRdmaNicBwInGbps;

    /**
     * @var int
     */
    public $backendRdmaNicCount;
    protected $_name = [
        'backendRdmaNicBwInGbps' => 'BackendRdmaNicBwInGbps',
        'backendRdmaNicCount' => 'BackendRdmaNicCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backendRdmaNicBwInGbps) {
            $res['BackendRdmaNicBwInGbps'] = $this->backendRdmaNicBwInGbps;
        }

        if (null !== $this->backendRdmaNicCount) {
            $res['BackendRdmaNicCount'] = $this->backendRdmaNicCount;
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
        if (isset($map['BackendRdmaNicBwInGbps'])) {
            $model->backendRdmaNicBwInGbps = $map['BackendRdmaNicBwInGbps'];
        }

        if (isset($map['BackendRdmaNicCount'])) {
            $model->backendRdmaNicCount = $map['BackendRdmaNicCount'];
        }

        return $model;
    }
}
