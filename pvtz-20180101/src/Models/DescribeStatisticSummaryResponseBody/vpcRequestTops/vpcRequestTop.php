<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeStatisticSummaryResponseBody\vpcRequestTops;

use AlibabaCloud\Dara\Model;

class vpcRequestTop extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $regionName;

    /**
     * @var int
     */
    public $requestCount;

    /**
     * @var string
     */
    public $tunnelId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vpcType;
    protected $_name = [
        'regionId' => 'RegionId',
        'regionName' => 'RegionName',
        'requestCount' => 'RequestCount',
        'tunnelId' => 'TunnelId',
        'vpcId' => 'VpcId',
        'vpcType' => 'VpcType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
