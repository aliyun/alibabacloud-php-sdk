<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DownloadVpnConnectionConfigResponseBody\vpnConnectionConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DownloadVpnConnectionConfigResponseBody\vpnConnectionConfig\bgpConfigs\bgpConfig;

class bgpConfigs extends Model
{
    /**
     * @var bgpConfig[]
     */
    public $bgpConfig;
    protected $_name = [
        'bgpConfig' => 'BgpConfig',
    ];

    public function validate()
    {
        if (\is_array($this->bgpConfig)) {
            Model::validateArray($this->bgpConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bgpConfig) {
            if (\is_array($this->bgpConfig)) {
                $res['BgpConfig'] = [];
                $n1 = 0;
                foreach ($this->bgpConfig as $item1) {
                    $res['BgpConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['BgpConfig'])) {
            if (!empty($map['BgpConfig'])) {
                $model->bgpConfig = [];
                $n1 = 0;
                foreach ($map['BgpConfig'] as $item1) {
                    $model->bgpConfig[$n1] = bgpConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
