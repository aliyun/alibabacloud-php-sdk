<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\CreateNatGatewayRequest;

use AlibabaCloud\Dara\Model;

class accessMode extends Model
{
    /**
     * @var string
     */
    public $modeValue;

    /**
     * @var string
     */
    public $tunnelType;
    protected $_name = [
        'modeValue' => 'ModeValue',
        'tunnelType' => 'TunnelType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modeValue) {
            $res['ModeValue'] = $this->modeValue;
        }

        if (null !== $this->tunnelType) {
            $res['TunnelType'] = $this->tunnelType;
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
        if (isset($map['ModeValue'])) {
            $model->modeValue = $map['ModeValue'];
        }

        if (isset($map['TunnelType'])) {
            $model->tunnelType = $map['TunnelType'];
        }

        return $model;
    }
}
