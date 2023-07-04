<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class EnableNatGatewayEcsMetricRequest extends Model
{
    /**
     * @description Specifies whether to precheck only this request. Valid values:
     *
     **true**: The validity of the request is checked but the traffic monitoring feature is not enabled. The system checks whether your AccessKey pair is valid, whether the Resource Access Management (RAM) user is authorized, and whether the required parameters are specified. If the request fails the precheck, the corresponding error code is returned. If the request passes the precheck, the `DryRunOperation` error code is returned.
     *
     **false** (default): The validity of the request is checked. If the request passes the precheck, a 2XX HTTP status code is returned and the traffic monitoring feature is enabled.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The ID of the NAT gateway for which you want to enable the traffic monitoring feature.
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
     * @return EnableNatGatewayEcsMetricRequest
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
