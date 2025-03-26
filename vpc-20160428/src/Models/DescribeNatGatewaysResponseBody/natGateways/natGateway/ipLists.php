<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponseBody\natGateways\natGateway;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponseBody\natGateways\natGateway\ipLists\ipList;

class ipLists extends Model
{
    /**
     * @var ipList[]
     */
    public $ipList;
    protected $_name = [
        'ipList' => 'IpList',
    ];

    public function validate()
    {
        if (\is_array($this->ipList)) {
            Model::validateArray($this->ipList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipList) {
            if (\is_array($this->ipList)) {
                $res['IpList'] = [];
                $n1 = 0;
                foreach ($this->ipList as $item1) {
                    $res['IpList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['IpList'])) {
            if (!empty($map['IpList'])) {
                $model->ipList = [];
                $n1 = 0;
                foreach ($map['IpList'] as $item1) {
                    $model->ipList[$n1++] = ipList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
