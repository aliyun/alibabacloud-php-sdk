<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListMachineTypesResponseBody\machineTypes;

use AlibabaCloud\Dara\Model;

class frontendNetworkDetail extends Model
{
    /**
     * @var string
     */
    public $frontendNetworkType;

    /**
     * @var bool
     */
    public $jumboFrameSupported;
    protected $_name = [
        'frontendNetworkType' => 'FrontendNetworkType',
        'jumboFrameSupported' => 'JumboFrameSupported',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->frontendNetworkType) {
            $res['FrontendNetworkType'] = $this->frontendNetworkType;
        }

        if (null !== $this->jumboFrameSupported) {
            $res['JumboFrameSupported'] = $this->jumboFrameSupported;
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
        if (isset($map['FrontendNetworkType'])) {
            $model->frontendNetworkType = $map['FrontendNetworkType'];
        }

        if (isset($map['JumboFrameSupported'])) {
            $model->jumboFrameSupported = $map['JumboFrameSupported'];
        }

        return $model;
    }
}
