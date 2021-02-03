<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmMonitorAvailableConfigResponse;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmMonitorAvailableConfigResponse\domainIpv4IspCityNodes\domainIpv4IspCityNode;
use AlibabaCloud\Tea\Model;

class domainIpv4IspCityNodes extends Model
{
    /**
     * @var domainIpv4IspCityNode[]
     */
    public $domainIpv4IspCityNode;
    protected $_name = [
        'domainIpv4IspCityNode' => 'DomainIpv4IspCityNode',
    ];

    public function validate()
    {
        Model::validateRequired('domainIpv4IspCityNode', $this->domainIpv4IspCityNode, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainIpv4IspCityNode) {
            $res['DomainIpv4IspCityNode'] = [];
            if (null !== $this->domainIpv4IspCityNode && \is_array($this->domainIpv4IspCityNode)) {
                $n = 0;
                foreach ($this->domainIpv4IspCityNode as $item) {
                    $res['DomainIpv4IspCityNode'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainIpv4IspCityNodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainIpv4IspCityNode'])) {
            if (!empty($map['DomainIpv4IspCityNode'])) {
                $model->domainIpv4IspCityNode = [];
                $n                            = 0;
                foreach ($map['DomainIpv4IspCityNode'] as $item) {
                    $model->domainIpv4IspCityNode[$n++] = null !== $item ? domainIpv4IspCityNode::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
