<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmMonitorAvailableConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmMonitorAvailableConfigResponseBody\domainIpv4IspCityNodes\domainIpv4IspCityNode;

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
        if (\is_array($this->domainIpv4IspCityNode)) {
            Model::validateArray($this->domainIpv4IspCityNode);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainIpv4IspCityNode) {
            if (\is_array($this->domainIpv4IspCityNode)) {
                $res['DomainIpv4IspCityNode'] = [];
                $n1 = 0;
                foreach ($this->domainIpv4IspCityNode as $item1) {
                    $res['DomainIpv4IspCityNode'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DomainIpv4IspCityNode'])) {
            if (!empty($map['DomainIpv4IspCityNode'])) {
                $model->domainIpv4IspCityNode = [];
                $n1 = 0;
                foreach ($map['DomainIpv4IspCityNode'] as $item1) {
                    $model->domainIpv4IspCityNode[$n1++] = domainIpv4IspCityNode::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
