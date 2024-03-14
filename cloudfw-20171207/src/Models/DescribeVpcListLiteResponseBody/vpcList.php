<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcListLiteResponseBody;

use AlibabaCloud\Tea\Model;

class vpcList extends Model
{
    /**
     * @description The region ID of the VPC.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionNo;

    /**
     * @description The ID of the VPC.
     *
     * @example vpc-wz9dqhljd10fk0b4eh885
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The name of the VPC.
     *
     * @example Cloud_Firewall_VPC
     *
     * @var string
     */
    public $vpcName;
    protected $_name = [
        'regionNo' => 'RegionNo',
        'vpcId'    => 'VpcId',
        'vpcName'  => 'VpcName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
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
     * @return vpcList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
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
