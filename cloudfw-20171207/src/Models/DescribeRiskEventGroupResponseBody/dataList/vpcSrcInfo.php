<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeRiskEventGroupResponseBody\dataList;

use AlibabaCloud\Tea\Model;

class vpcSrcInfo extends Model
{
    /**
     * @description The ID of the ECS instance.
     *
     * @example i-wz92jf4scg2zb74p****
     *
     * @var string
     */
    public $ecsInstanceId;

    /**
     * @description The name of the ECS instance.
     *
     * @example LD-shenzhen-zy****
     *
     * @var string
     */
    public $ecsInstanceName;

    /**
     * @description The ID of the VPC.
     *
     * @example vpc-uf6e9a9zyokj2ywuo****
     *
     * @var string
     */
    public $networkInstanceId;

    /**
     * @description The name of the VPC.
     *
     * @example VPC-SH-TX****
     *
     * @var string
     */
    public $networkInstanceName;

    /**
     * @description The ID of the region in which the source VPC resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionNo;
    protected $_name = [
        'ecsInstanceId'       => 'EcsInstanceId',
        'ecsInstanceName'     => 'EcsInstanceName',
        'networkInstanceId'   => 'NetworkInstanceId',
        'networkInstanceName' => 'NetworkInstanceName',
        'regionNo'            => 'RegionNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecsInstanceId) {
            $res['EcsInstanceId'] = $this->ecsInstanceId;
        }
        if (null !== $this->ecsInstanceName) {
            $res['EcsInstanceName'] = $this->ecsInstanceName;
        }
        if (null !== $this->networkInstanceId) {
            $res['NetworkInstanceId'] = $this->networkInstanceId;
        }
        if (null !== $this->networkInstanceName) {
            $res['NetworkInstanceName'] = $this->networkInstanceName;
        }
        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpcSrcInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EcsInstanceId'])) {
            $model->ecsInstanceId = $map['EcsInstanceId'];
        }
        if (isset($map['EcsInstanceName'])) {
            $model->ecsInstanceName = $map['EcsInstanceName'];
        }
        if (isset($map['NetworkInstanceId'])) {
            $model->networkInstanceId = $map['NetworkInstanceId'];
        }
        if (isset($map['NetworkInstanceName'])) {
            $model->networkInstanceName = $map['NetworkInstanceName'];
        }
        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }

        return $model;
    }
}
