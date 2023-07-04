<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class DisableNatGatewayEcsMetricRequest extends Model
{
    /**
     * @description Specifies whether to precheck this request only. Valid values:
     *
     **true**: The validity of the request is checked but ECS traffic monitoring is not disabled. Check items include whether your AccessKey pair is valid, whether Resource Access Management (RAM) users are authorized, and whether the required parameters are set. If the request fails the precheck, the corresponding error code is returned. If the request passes the precheck, the `DryRunOperation` error code is returned.
     *
     **false** (default): The validity of the request is checked. If the request passes the precheck, a 2XX HTTP status code is returned and ECS traffic monitoring is disabled.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The ID of the NAT gateway for which you want to disable Elastic Compute Service (ECS) traffic monitoring.
     *
     * @example ngw-2vc53wynunp35lw1y****
     *
     * @var string
     */
    public $natGatewayId;

    /**
     * @description The ID of the region where the NAT gateway is deployed. You can call the [DescribeRegions](~~36063~~) operation to query region IDs.
     *
     * @example cn-chengdu
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'dryRun'       => 'DryRun',
        'natGatewayId' => 'NatGatewayId',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DisableNatGatewayEcsMetricRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
