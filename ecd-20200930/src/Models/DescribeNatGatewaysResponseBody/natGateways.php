<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeNatGatewaysResponseBody;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeNatGatewaysResponseBody\natGateways\ipLists;
use AlibabaCloud\Tea\Model;

class natGateways extends Model
{
    /**
     * @var string[]
     */
    public $forwardTableIds;

    /**
     * @var ipLists[]
     */
    public $ipLists;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $natGatewayId;

    /**
     * @var string[]
     */
    public $snatTableIds;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'forwardTableIds' => 'ForwardTableIds',
        'ipLists' => 'IpLists',
        'name' => 'Name',
        'natGatewayId' => 'NatGatewayId',
        'snatTableIds' => 'SnatTableIds',
        'status' => 'Status',
        'vpcId' => 'VpcId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->forwardTableIds) {
            $res['ForwardTableIds'] = $this->forwardTableIds;
        }
        if (null !== $this->ipLists) {
            $res['IpLists'] = [];
            if (null !== $this->ipLists && \is_array($this->ipLists)) {
                $n = 0;
                foreach ($this->ipLists as $item) {
                    $res['IpLists'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }
        if (null !== $this->snatTableIds) {
            $res['SnatTableIds'] = $this->snatTableIds;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return natGateways
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ForwardTableIds'])) {
            if (!empty($map['ForwardTableIds'])) {
                $model->forwardTableIds = $map['ForwardTableIds'];
            }
        }
        if (isset($map['IpLists'])) {
            if (!empty($map['IpLists'])) {
                $model->ipLists = [];
                $n = 0;
                foreach ($map['IpLists'] as $item) {
                    $model->ipLists[$n++] = null !== $item ? ipLists::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }
        if (isset($map['SnatTableIds'])) {
            if (!empty($map['SnatTableIds'])) {
                $model->snatTableIds = $map['SnatTableIds'];
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
