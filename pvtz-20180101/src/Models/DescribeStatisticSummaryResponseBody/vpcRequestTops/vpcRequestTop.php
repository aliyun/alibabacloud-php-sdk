<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeStatisticSummaryResponseBody\vpcRequestTops;

use AlibabaCloud\Tea\Model;

class vpcRequestTop extends Model
{
    /**
     * @description The region ID.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the region.
     *
     * @example China (Beijing)
     *
     * @var string
     */
    public $regionName;

    /**
     * @description The number of DNS requests.
     *
     * @example 2254
     *
     * @var int
     */
    public $requestCount;

    /**
     * @description The tunnel ID.
     *
     * @example 46574
     *
     * @var string
     */
    public $tunnelId;

    /**
     * @description The VPC ID.
     *
     * @example vpc-2zeisd8c0j6wk1451jr6o
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The type of the VPC. Valid values:
     *
     *   STANDARD: standard VPC
     *   EDS: Elastic Desktop Service (EDS) workspace VPC
     *
     * @example STANDARD
     *
     * @var string
     */
    public $vpcType;
    protected $_name = [
        'regionId'     => 'RegionId',
        'regionName'   => 'RegionName',
        'requestCount' => 'RequestCount',
        'tunnelId'     => 'TunnelId',
        'vpcId'        => 'VpcId',
        'vpcType'      => 'VpcType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }
        if (null !== $this->requestCount) {
            $res['RequestCount'] = $this->requestCount;
        }
        if (null !== $this->tunnelId) {
            $res['TunnelId'] = $this->tunnelId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpcType) {
            $res['VpcType'] = $this->vpcType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpcRequestTop
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }
        if (isset($map['RequestCount'])) {
            $model->requestCount = $map['RequestCount'];
        }
        if (isset($map['TunnelId'])) {
            $model->tunnelId = $map['TunnelId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpcType'])) {
            $model->vpcType = $map['VpcType'];
        }

        return $model;
    }
}
