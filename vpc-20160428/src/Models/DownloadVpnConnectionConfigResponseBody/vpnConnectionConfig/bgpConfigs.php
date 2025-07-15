<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DownloadVpnConnectionConfigResponseBody\vpnConnectionConfig;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DownloadVpnConnectionConfigResponseBody\vpnConnectionConfig\bgpConfigs\bgpConfig;
use AlibabaCloud\Tea\Model;

class bgpConfigs extends Model
{
    /**
     * @var bgpConfig[]
     */
    public $bgpConfig;
    protected $_name = [
        'bgpConfig' => 'BgpConfig',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bgpConfig) {
            $res['BgpConfig'] = [];
            if (null !== $this->bgpConfig && \is_array($this->bgpConfig)) {
                $n = 0;
                foreach ($this->bgpConfig as $item) {
                    $res['BgpConfig'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bgpConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BgpConfig'])) {
            if (!empty($map['BgpConfig'])) {
                $model->bgpConfig = [];
                $n = 0;
                foreach ($map['BgpConfig'] as $item) {
                    $model->bgpConfig[$n++] = null !== $item ? bgpConfig::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
