<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterV2ResponseBody\clusterInfo;

use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterV2ResponseBody\clusterInfo\gatewayClusterInfoList\gatewayClusterInfo;
use AlibabaCloud\Tea\Model;

class gatewayClusterInfoList extends Model
{
    /**
     * @var gatewayClusterInfo[]
     */
    public $gatewayClusterInfo;
    protected $_name = [
        'gatewayClusterInfo' => 'GatewayClusterInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayClusterInfo) {
            $res['GatewayClusterInfo'] = [];
            if (null !== $this->gatewayClusterInfo && \is_array($this->gatewayClusterInfo)) {
                $n = 0;
                foreach ($this->gatewayClusterInfo as $item) {
                    $res['GatewayClusterInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return gatewayClusterInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayClusterInfo'])) {
            if (!empty($map['GatewayClusterInfo'])) {
                $model->gatewayClusterInfo = [];
                $n                         = 0;
                foreach ($map['GatewayClusterInfo'] as $item) {
                    $model->gatewayClusterInfo[$n++] = null !== $item ? gatewayClusterInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
