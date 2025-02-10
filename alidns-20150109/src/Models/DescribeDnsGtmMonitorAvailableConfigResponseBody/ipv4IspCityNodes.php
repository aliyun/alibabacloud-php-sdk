<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmMonitorAvailableConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmMonitorAvailableConfigResponseBody\ipv4IspCityNodes\ipv4IspCityNode;

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
        if (\is_array($this->ipv4IspCityNode)) {
            Model::validateArray($this->ipv4IspCityNode);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipv4IspCityNode) {
            if (\is_array($this->ipv4IspCityNode)) {
                $res['Ipv4IspCityNode'] = [];
                $n1                     = 0;
                foreach ($this->ipv4IspCityNode as $item1) {
                    $res['Ipv4IspCityNode'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Ipv4IspCityNode'])) {
            if (!empty($map['Ipv4IspCityNode'])) {
                $model->ipv4IspCityNode = [];
                $n1                     = 0;
                foreach ($map['Ipv4IspCityNode'] as $item1) {
                    $model->ipv4IspCityNode[$n1++] = ipv4IspCityNode::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
