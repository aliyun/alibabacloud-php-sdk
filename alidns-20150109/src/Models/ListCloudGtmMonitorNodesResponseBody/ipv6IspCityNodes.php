<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\ListCloudGtmMonitorNodesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ListCloudGtmMonitorNodesResponseBody\ipv6IspCityNodes\ipv6IspCityNode;

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
        if (\is_array($this->ipv6IspCityNode)) {
            Model::validateArray($this->ipv6IspCityNode);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipv6IspCityNode) {
            if (\is_array($this->ipv6IspCityNode)) {
                $res['Ipv6IspCityNode'] = [];
                $n1                     = 0;
                foreach ($this->ipv6IspCityNode as $item1) {
                    $res['Ipv6IspCityNode'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Ipv6IspCityNode'])) {
            if (!empty($map['Ipv6IspCityNode'])) {
                $model->ipv6IspCityNode = [];
                $n1                     = 0;
                foreach ($map['Ipv6IspCityNode'] as $item1) {
                    $model->ipv6IspCityNode[$n1++] = ipv6IspCityNode::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
