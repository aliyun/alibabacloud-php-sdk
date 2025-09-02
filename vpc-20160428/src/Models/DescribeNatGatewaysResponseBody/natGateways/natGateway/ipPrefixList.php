<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponseBody\natGateways\natGateway;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponseBody\natGateways\natGateway\ipPrefixList\ipPrefixList;

class ipPrefixList extends Model
{
    /**
     * @var ipPrefixList[]
     */
    public $ipPrefixList;
    protected $_name = [
        'ipPrefixList' => 'IpPrefixList',
    ];

    public function validate()
    {
        if (\is_array($this->ipPrefixList)) {
            Model::validateArray($this->ipPrefixList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipPrefixList) {
            if (\is_array($this->ipPrefixList)) {
                $res['IpPrefixList'] = [];
                $n1 = 0;
                foreach ($this->ipPrefixList as $item1) {
                    $res['IpPrefixList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['IpPrefixList'])) {
            if (!empty($map['IpPrefixList'])) {
                $model->ipPrefixList = [];
                $n1 = 0;
                foreach ($map['IpPrefixList'] as $item1) {
                    $model->ipPrefixList[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
