<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeShardingNetworkAddressResponseBody;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeShardingNetworkAddressResponseBody\compatibleConnections\compatibleConnection;
use AlibabaCloud\Tea\Model;

class compatibleConnections extends Model
{
    /**
     * @var compatibleConnection[]
     */
    public $compatibleConnection;
    protected $_name = [
        'compatibleConnection' => 'CompatibleConnection',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compatibleConnection) {
            $res['CompatibleConnection'] = [];
            if (null !== $this->compatibleConnection && \is_array($this->compatibleConnection)) {
                $n = 0;
                foreach ($this->compatibleConnection as $item) {
                    $res['CompatibleConnection'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return compatibleConnections
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompatibleConnection'])) {
            if (!empty($map['CompatibleConnection'])) {
                $model->compatibleConnection = [];
                $n                           = 0;
                foreach ($map['CompatibleConnection'] as $item) {
                    $model->compatibleConnection[$n++] = null !== $item ? compatibleConnection::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
