<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Uis\V20180821\Models\DescribeDnatEntriesResponseBody\uisDnatEntries;

use AlibabaCloud\Tea\Model;

class uisDnatEntry extends Model
{
    /**
     * @var int
     */
    public $originalPort;

    /**
     * @var int
     */
    public $destinationPort;

    /**
     * @var string
     */
    public $originalIp;

    /**
     * @var string
     */
    public $ipProtocol;

    /**
     * @var string
     */
    public $uisDnatId;

    /**
     * @var string
     */
    public $destinationIp;
    protected $_name = [
        'originalPort'    => 'OriginalPort',
        'destinationPort' => 'DestinationPort',
        'originalIp'      => 'OriginalIp',
        'ipProtocol'      => 'IpProtocol',
        'uisDnatId'       => 'UisDnatId',
        'destinationIp'   => 'DestinationIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->originalPort) {
            $res['OriginalPort'] = $this->originalPort;
        }
        if (null !== $this->destinationPort) {
            $res['DestinationPort'] = $this->destinationPort;
        }
        if (null !== $this->originalIp) {
            $res['OriginalIp'] = $this->originalIp;
        }
        if (null !== $this->ipProtocol) {
            $res['IpProtocol'] = $this->ipProtocol;
        }
        if (null !== $this->uisDnatId) {
            $res['UisDnatId'] = $this->uisDnatId;
        }
        if (null !== $this->destinationIp) {
            $res['DestinationIp'] = $this->destinationIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return uisDnatEntry
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OriginalPort'])) {
            $model->originalPort = $map['OriginalPort'];
        }
        if (isset($map['DestinationPort'])) {
            $model->destinationPort = $map['DestinationPort'];
        }
        if (isset($map['OriginalIp'])) {
            $model->originalIp = $map['OriginalIp'];
        }
        if (isset($map['IpProtocol'])) {
            $model->ipProtocol = $map['IpProtocol'];
        }
        if (isset($map['UisDnatId'])) {
            $model->uisDnatId = $map['UisDnatId'];
        }
        if (isset($map['DestinationIp'])) {
            $model->destinationIp = $map['DestinationIp'];
        }

        return $model;
    }
}
