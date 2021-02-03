<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmMonitorAvailableConfigResponseBody;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmMonitorAvailableConfigResponseBody\ipv6IspCityNodes\ipv6IspCityNode;
use AlibabaCloud\Tea\Model;

class ipv6IspCityNodes extends Model
{
    /**
     * @var ipv6IspCityNode[]
     */
    public $ipv6IspCityNode;
    protected $_name = [
        'ipv6IspCityNode' => 'Ipv6IspCityNode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipv6IspCityNode) {
            $res['Ipv6IspCityNode'] = [];
            if (null !== $this->ipv6IspCityNode && \is_array($this->ipv6IspCityNode)) {
                $n = 0;
                foreach ($this->ipv6IspCityNode as $item) {
                    $res['Ipv6IspCityNode'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipv6IspCityNodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ipv6IspCityNode'])) {
            if (!empty($map['Ipv6IspCityNode'])) {
                $model->ipv6IspCityNode = [];
                $n                      = 0;
                foreach ($map['Ipv6IspCityNode'] as $item) {
                    $model->ipv6IspCityNode[$n++] = null !== $item ? ipv6IspCityNode::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
