<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DownloadVpnConnectionConfigResponseBody\vpnConnectionConfig;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DownloadVpnConnectionConfigResponseBody\vpnConnectionConfig\tunnelsConfig\tunnelConfig;
use AlibabaCloud\Tea\Model;

class tunnelsConfig extends Model
{
    /**
     * @var tunnelConfig[]
     */
    public $tunnelConfig;
    protected $_name = [
        'tunnelConfig' => 'TunnelConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tunnelConfig) {
            $res['TunnelConfig'] = [];
            if (null !== $this->tunnelConfig && \is_array($this->tunnelConfig)) {
                $n = 0;
                foreach ($this->tunnelConfig as $item) {
                    $res['TunnelConfig'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tunnelsConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TunnelConfig'])) {
            if (!empty($map['TunnelConfig'])) {
                $model->tunnelConfig = [];
                $n                   = 0;
                foreach ($map['TunnelConfig'] as $item) {
                    $model->tunnelConfig[$n++] = null !== $item ? tunnelConfig::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
