<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallDetailResponseBody\localVpc;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallDetailResponseBody\localVpc\vpcCidrTableList\routeEntryList;

class vpcCidrTableList extends Model
{
    /**
     * @var routeEntryList[]
     */
    public $routeEntryList;

    /**
     * @var string
     */
    public $routeTableId;
    protected $_name = [
        'routeEntryList' => 'RouteEntryList',
        'routeTableId' => 'RouteTableId',
    ];

    public function validate()
    {
        if (\is_array($this->routeEntryList)) {
            Model::validateArray($this->routeEntryList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->routeEntryList) {
            if (\is_array($this->routeEntryList)) {
                $res['RouteEntryList'] = [];
                $n1 = 0;
                foreach ($this->routeEntryList as $item1) {
                    $res['RouteEntryList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->routeTableId) {
            $res['RouteTableId'] = $this->routeTableId;
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
        if (isset($map['RouteEntryList'])) {
            if (!empty($map['RouteEntryList'])) {
                $model->routeEntryList = [];
                $n1 = 0;
                foreach ($map['RouteEntryList'] as $item1) {
                    $model->routeEntryList[$n1++] = routeEntryList::fromMap($item1);
                }
            }
        }

        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }

        return $model;
    }
}
