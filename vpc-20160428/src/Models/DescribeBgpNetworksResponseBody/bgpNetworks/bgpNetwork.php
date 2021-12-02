<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeBgpNetworksResponseBody\bgpNetworks;

use AlibabaCloud\Tea\Model;

class bgpNetwork extends Model
{
    /**
     * @var string
     */
    public $dstCidrBlock;

    /**
     * @var string
     */
    public $routerId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'dstCidrBlock' => 'DstCidrBlock',
        'routerId'     => 'RouterId',
        'status'       => 'Status',
        'vpcId'        => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dstCidrBlock) {
            $res['DstCidrBlock'] = $this->dstCidrBlock;
        }
        if (null !== $this->routerId) {
            $res['RouterId'] = $this->routerId;
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
     * @return bgpNetwork
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DstCidrBlock'])) {
            $model->dstCidrBlock = $map['DstCidrBlock'];
        }
        if (isset($map['RouterId'])) {
            $model->routerId = $map['RouterId'];
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
