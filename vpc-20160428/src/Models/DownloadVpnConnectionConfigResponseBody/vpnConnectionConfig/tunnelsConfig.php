<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DownloadVpnConnectionConfigResponseBody\vpnConnectionConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DownloadVpnConnectionConfigResponseBody\vpnConnectionConfig\tunnelsConfig\tunnelConfig;

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
        if (\is_array($this->tunnelConfig)) {
            Model::validateArray($this->tunnelConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tunnelConfig) {
            if (\is_array($this->tunnelConfig)) {
                $res['TunnelConfig'] = [];
                $n1                  = 0;
                foreach ($this->tunnelConfig as $item1) {
                    $res['TunnelConfig'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['TunnelConfig'])) {
            if (!empty($map['TunnelConfig'])) {
                $model->tunnelConfig = [];
                $n1                  = 0;
                foreach ($map['TunnelConfig'] as $item1) {
                    $model->tunnelConfig[$n1++] = tunnelConfig::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
