<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetHostResponseBody\host;

use AlibabaCloud\Dara\Model;

class protocols extends Model
{
    /**
     * @var string
     */
    public $hostFingerPrint;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $protocolName;
    protected $_name = [
        'hostFingerPrint' => 'HostFingerPrint',
        'port' => 'Port',
        'protocolName' => 'ProtocolName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
