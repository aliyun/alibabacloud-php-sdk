<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeVpcsResponseBody;

use AlibabaCloud\Tea\Model;

class vpcs extends Model
{
    /**
     * @description Indicates whether the VPC is the default VPC in the specified region. Valid values:
     *
     *   `true`: yes
     *   `false`: no
     *
     * @example false
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @description The status of the VPC. Valid values:
     *
     *   `Pending`: The VPC is being configured.
     *   `Available`: The VPC is available for use.
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of a VPC.
     *
     * @example vpc-bp1qkf2o3xmqc2519****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The name of the VPC.
     *
     * @example vpc-test
     *
     * @var string
     */
    public $vpcName;
    protected $_name = [
        'isDefault' => 'IsDefault',
        'status'    => 'Status',
        'vpcId'     => 'VpcId',
        'vpcName'   => 'VpcName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpcName) {
            $res['VpcName'] = $this->vpcName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpcs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpcName'])) {
            $model->vpcName = $map['VpcName'];
        }

        return $model;
    }
}
