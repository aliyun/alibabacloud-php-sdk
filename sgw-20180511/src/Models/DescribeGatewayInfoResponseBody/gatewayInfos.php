<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayInfoResponseBody;

use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayInfoResponseBody\gatewayInfos\gatewayInfo;
use AlibabaCloud\Tea\Model;

class gatewayInfos extends Model
{
    /**
     * @var gatewayInfo[]
     */
    public $gatewayInfo;
    protected $_name = [
        'gatewayInfo' => 'GatewayInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayInfo) {
            $res['GatewayInfo'] = [];
            if (null !== $this->gatewayInfo && \is_array($this->gatewayInfo)) {
                $n = 0;
                foreach ($this->gatewayInfo as $item) {
                    $res['GatewayInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return gatewayInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayInfo'])) {
            if (!empty($map['GatewayInfo'])) {
                $model->gatewayInfo = [];
                $n                  = 0;
                foreach ($map['GatewayInfo'] as $item) {
                    $model->gatewayInfo[$n++] = null !== $item ? gatewayInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
