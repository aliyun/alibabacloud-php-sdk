<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetHostResponseBody\host;

use AlibabaCloud\Tea\Model;

class protocols extends Model
{
    /**
     * @description WB662865
     *
     * @example ssh-ed25519|3e:46:5a:e1:1f:0d:39:7e:61:35:d5:fa:7b:2b:**:**
     *
     * @var string
     */
    public $hostFingerPrint;

    /**
     * @description GetHost
     *
     * @example 22
     *
     * @var int
     */
    public $port;

    /**
     * @example SSH
     *
     * @var string
     */
    public $protocolName;
    protected $_name = [
        'hostFingerPrint' => 'HostFingerPrint',
        'port'            => 'Port',
        'protocolName'    => 'ProtocolName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostFingerPrint) {
            $res['HostFingerPrint'] = $this->hostFingerPrint;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->protocolName) {
            $res['ProtocolName'] = $this->protocolName;
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
        if (isset($map['HostFingerPrint'])) {
            $model->hostFingerPrint = $map['HostFingerPrint'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['ProtocolName'])) {
            $model->protocolName = $map['ProtocolName'];
        }

        return $model;
    }
}
