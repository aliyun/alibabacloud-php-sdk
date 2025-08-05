<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeNatGatewaysResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeNatGatewaysResponseBody\natGateways\ipLists;

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

    public function validate()
    {
        if (\is_array($this->forwardTableIds)) {
            Model::validateArray($this->forwardTableIds);
        }
        if (\is_array($this->ipLists)) {
            Model::validateArray($this->ipLists);
        }
        if (\is_array($this->snatTableIds)) {
            Model::validateArray($this->snatTableIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->forwardTableIds) {
            if (\is_array($this->forwardTableIds)) {
                $res['ForwardTableIds'] = [];
                $n1 = 0;
                foreach ($this->forwardTableIds as $item1) {
                    $res['ForwardTableIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ipLists) {
            if (\is_array($this->ipLists)) {
                $res['IpLists'] = [];
                $n1 = 0;
                foreach ($this->ipLists as $item1) {
                    $res['IpLists'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->snatTableIds)) {
                $res['SnatTableIds'] = [];
                $n1 = 0;
                foreach ($this->snatTableIds as $item1) {
                    $res['SnatTableIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['ForwardTableIds'])) {
            if (!empty($map['ForwardTableIds'])) {
                $model->forwardTableIds = [];
                $n1 = 0;
                foreach ($map['ForwardTableIds'] as $item1) {
                    $model->forwardTableIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['IpLists'])) {
            if (!empty($map['IpLists'])) {
                $model->ipLists = [];
                $n1 = 0;
                foreach ($map['IpLists'] as $item1) {
                    $model->ipLists[$n1] = ipLists::fromMap($item1);
                    ++$n1;
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
                $model->snatTableIds = [];
                $n1 = 0;
                foreach ($map['SnatTableIds'] as $item1) {
                    $model->snatTableIds[$n1] = $item1;
                    ++$n1;
                }
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
