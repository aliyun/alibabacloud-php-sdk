<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DownloadVpnConnectionConfigResponseBody\vpnConnectionConfig;

class DownloadVpnConnectionConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var vpnConnectionConfig
     */
    public $vpnConnectionConfig;
    protected $_name = [
        'requestId'           => 'RequestId',
        'vpnConnectionConfig' => 'VpnConnectionConfig',
    ];

    public function validate()
    {
        if (null !== $this->vpnConnectionConfig) {
            $this->vpnConnectionConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->vpnConnectionConfig) {
            $res['VpnConnectionConfig'] = null !== $this->vpnConnectionConfig ? $this->vpnConnectionConfig->toArray($noStream) : $this->vpnConnectionConfig;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['VpnConnectionConfig'])) {
            $model->vpnConnectionConfig = vpnConnectionConfig::fromMap($map['VpnConnectionConfig']);
        }

        return $model;
    }
}
