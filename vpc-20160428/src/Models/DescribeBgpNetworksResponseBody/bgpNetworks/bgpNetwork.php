<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeBgpNetworksResponseBody\bgpNetworks;

use AlibabaCloud\Tea\Model;

class bgpNetwork extends Model
{
    /**
     * @description The CIDR block of the advertised BGP network.
     *
     * @example 10.1.XX.XX/24
     *
     * @var string
     */
    public $dstCidrBlock;

    /**
     * @description The ID of the VBR.
     *
     * @example vrt-bp1lhl0taikrteen8****
     *
     * @var string
     */
    public $routerId;

    /**
     * @description The status of the advertised BGP network.
     *
     * @example Enabled
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the virtual private cloud (VPC) in which the master instance resides.
     *
     * @example vpc-bp1qpo0kug3a2*****
     *
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
