<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallCenListResponseBody\vpcFirewalls\localVpc;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallCenListResponseBody\vpcFirewalls\localVpc\vpcCidrTableList\routeEntryList;
use AlibabaCloud\Tea\Model;

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
        'routeTableId'   => 'RouteTableId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->routeEntryList) {
            $res['RouteEntryList'] = [];
            if (null !== $this->routeEntryList && \is_array($this->routeEntryList)) {
                $n = 0;
                foreach ($this->routeEntryList as $item) {
                    $res['RouteEntryList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->routeTableId) {
            $res['RouteTableId'] = $this->routeTableId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpcCidrTableList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RouteEntryList'])) {
            if (!empty($map['RouteEntryList'])) {
                $model->routeEntryList = [];
                $n                     = 0;
                foreach ($map['RouteEntryList'] as $item) {
                    $model->routeEntryList[$n++] = null !== $item ? routeEntryList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }

        return $model;
    }
}
