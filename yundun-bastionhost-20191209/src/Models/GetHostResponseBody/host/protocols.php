<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetHostResponseBody\host;

use AlibabaCloud\Tea\Model;

class protocols extends Model
{
    /**
     * @var string
     */
    public $protocolName;

    /**
     * @var string
     */
    public $hostFingerPrint;

    /**
     * @var int
     */
    public $port;
    protected $_name = [
        'protocolName'    => 'ProtocolName',
        'hostFingerPrint' => 'HostFingerPrint',
        'port'            => 'Port',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->protocolName) {
            $res['ProtocolName'] = $this->protocolName;
        }
        if (null !== $this->hostFingerPrint) {
            $res['HostFingerPrint'] = $this->hostFingerPrint;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return protocols
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProtocolName'])) {
            $model->protocolName = $map['ProtocolName'];
        }
        if (isset($map['HostFingerPrint'])) {
            $model->hostFingerPrint = $map['HostFingerPrint'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        return $model;
    }
}
