<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmMonitorAvailableConfigResponseBody;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmMonitorAvailableConfigResponseBody\domainIpv6IspCityNodes\domainIpv6IspCityNode;
use AlibabaCloud\Tea\Model;

class domainIpv6IspCityNodes extends Model
{
    /**
     * @var domainIpv6IspCityNode[]
     */
    public $domainIpv6IspCityNode;
    protected $_name = [
        'domainIpv6IspCityNode' => 'DomainIpv6IspCityNode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainIpv6IspCityNode) {
            $res['DomainIpv6IspCityNode'] = [];
            if (null !== $this->domainIpv6IspCityNode && \is_array($this->domainIpv6IspCityNode)) {
                $n = 0;
                foreach ($this->domainIpv6IspCityNode as $item) {
                    $res['DomainIpv6IspCityNode'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainIpv6IspCityNodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainIpv6IspCityNode'])) {
            if (!empty($map['DomainIpv6IspCityNode'])) {
                $model->domainIpv6IspCityNode = [];
                $n                            = 0;
                foreach ($map['DomainIpv6IspCityNode'] as $item) {
                    $model->domainIpv6IspCityNode[$n++] = null !== $item ? domainIpv6IspCityNode::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
