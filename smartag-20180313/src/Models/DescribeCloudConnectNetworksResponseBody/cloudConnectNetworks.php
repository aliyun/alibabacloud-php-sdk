<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeCloudConnectNetworksResponseBody;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeCloudConnectNetworksResponseBody\cloudConnectNetworks\cloudConnectNetwork;
use AlibabaCloud\Tea\Model;

class cloudConnectNetworks extends Model
{
    /**
     * @var cloudConnectNetwork[]
     */
    public $cloudConnectNetwork;
    protected $_name = [
        'cloudConnectNetwork' => 'CloudConnectNetwork',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cloudConnectNetwork) {
            $res['CloudConnectNetwork'] = [];
            if (null !== $this->cloudConnectNetwork && \is_array($this->cloudConnectNetwork)) {
                $n = 0;
                foreach ($this->cloudConnectNetwork as $item) {
                    $res['CloudConnectNetwork'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cloudConnectNetworks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CloudConnectNetwork'])) {
            if (!empty($map['CloudConnectNetwork'])) {
                $model->cloudConnectNetwork = [];
                $n                          = 0;
                foreach ($map['CloudConnectNetwork'] as $item) {
                    $model->cloudConnectNetwork[$n++] = null !== $item ? cloudConnectNetwork::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
