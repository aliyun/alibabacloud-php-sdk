<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmMonitorAvailableConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmMonitorAvailableConfigResponseBody\domainIpv6IspCityNodes\domainIpv6IspCityNode;

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
        if (\is_array($this->domainIpv6IspCityNode)) {
            Model::validateArray($this->domainIpv6IspCityNode);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainIpv6IspCityNode) {
            if (\is_array($this->domainIpv6IspCityNode)) {
                $res['DomainIpv6IspCityNode'] = [];
                $n1 = 0;
                foreach ($this->domainIpv6IspCityNode as $item1) {
                    $res['DomainIpv6IspCityNode'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DomainIpv6IspCityNode'])) {
            if (!empty($map['DomainIpv6IspCityNode'])) {
                $model->domainIpv6IspCityNode = [];
                $n1 = 0;
                foreach ($map['DomainIpv6IspCityNode'] as $item1) {
                    $model->domainIpv6IspCityNode[$n1++] = domainIpv6IspCityNode::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
