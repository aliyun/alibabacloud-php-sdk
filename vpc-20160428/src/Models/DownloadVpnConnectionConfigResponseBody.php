<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DownloadVpnConnectionConfigResponseBody\vpnConnectionConfig;
use AlibabaCloud\Tea\Model;

class DownloadVpnConnectionConfigResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 0C68048B-0F70-40DA-B8AE-1B79B5CF62E3
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The configurations of the peer gateway device.
     *
     * @var vpnConnectionConfig
     */
    public $vpnConnectionConfig;
    protected $_name = [
        'requestId' => 'RequestId',
        'vpnConnectionConfig' => 'VpnConnectionConfig',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->vpnConnectionConfig) {
            $res['VpnConnectionConfig'] = null !== $this->vpnConnectionConfig ? $this->vpnConnectionConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DownloadVpnConnectionConfigResponseBody
     */
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
