<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeSecurityProxyResourcesResponseBody\resourceList\vpcList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeSecurityProxyResourcesResponseBody\resourceList\vpcList\natGateways\natRouteEntryList;

class natGateways extends Model
{
    /**
     * @var string
     */
    public $detail;

    /**
     * @var string
     */
    public $natGatewayId;

    /**
     * @var string
     */
    public $natGatewayName;

    /**
     * @var natRouteEntryList[]
     */
    public $natRouteEntryList;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'detail' => 'Detail',
        'natGatewayId' => 'NatGatewayId',
        'natGatewayName' => 'NatGatewayName',
        'natRouteEntryList' => 'NatRouteEntryList',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->natRouteEntryList)) {
            Model::validateArray($this->natRouteEntryList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }

        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }

        if (null !== $this->natGatewayName) {
            $res['NatGatewayName'] = $this->natGatewayName;
        }

        if (null !== $this->natRouteEntryList) {
            if (\is_array($this->natRouteEntryList)) {
                $res['NatRouteEntryList'] = [];
                $n1 = 0;
                foreach ($this->natRouteEntryList as $item1) {
                    $res['NatRouteEntryList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }

        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }

        if (isset($map['NatGatewayName'])) {
            $model->natGatewayName = $map['NatGatewayName'];
        }

        if (isset($map['NatRouteEntryList'])) {
            if (!empty($map['NatRouteEntryList'])) {
                $model->natRouteEntryList = [];
                $n1 = 0;
                foreach ($map['NatRouteEntryList'] as $item1) {
                    $model->natRouteEntryList[$n1] = natRouteEntryList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
