<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\ListCloudGtmMonitorNodesResponseBody;

use AlibabaCloud\SDK\Alidns\V20150109\Models\ListCloudGtmMonitorNodesResponseBody\ipv4IspCityNodes\ipv4IspCityNode;
use AlibabaCloud\Tea\Model;

class ipv4IspCityNodes extends Model
{
    /**
     * @var ipv4IspCityNode[]
     */
    public $ipv4IspCityNode;
    protected $_name = [
        'ipv4IspCityNode' => 'Ipv4IspCityNode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipv4IspCityNode) {
            $res['Ipv4IspCityNode'] = [];
            if (null !== $this->ipv4IspCityNode && \is_array($this->ipv4IspCityNode)) {
                $n = 0;
                foreach ($this->ipv4IspCityNode as $item) {
                    $res['Ipv4IspCityNode'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipv4IspCityNodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ipv4IspCityNode'])) {
            if (!empty($map['Ipv4IspCityNode'])) {
                $model->ipv4IspCityNode = [];
                $n                      = 0;
                foreach ($map['Ipv4IspCityNode'] as $item) {
                    $model->ipv4IspCityNode[$n++] = null !== $item ? ipv4IspCityNode::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
