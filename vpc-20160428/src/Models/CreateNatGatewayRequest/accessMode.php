<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\CreateNatGatewayRequest;

use AlibabaCloud\Tea\Model;

class accessMode extends Model
{
    /**
     * @description Access mode. Valid values:
     *
     * - **route**: route mode
     *
     * - **tunnel**: tunnel mode
     *
     * > If this parameter is specified, you must set **PrivateLinkEnabled** to **true**.
     *
     * @example route
     *
     * @var string
     */
    public $modeValue;

    /**
     * @description Tunnel mode type:
     *
     * - **geneve**: Geneve type
     *
     * > This value takes effect if the access mode is the tunnel mode.
     *
     * @var string
     */
    public $tunnelType;
    protected $_name = [
        'modeValue' => 'ModeValue',
        'tunnelType' => 'TunnelType',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return accessMode
     */
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
