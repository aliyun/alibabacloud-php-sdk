<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class EnableNatGatewayEcsMetricRequest extends Model
{
    /**
     * @description Specifies whether to perform only a dry run, without performing the actual request. Valid values:
     *
     **true**: performs only a dry run. The system checks the request for potential issues, including missing parameter values, incorrect request syntax, and service limits. If the request fails the dry run, an error message is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
     *
     **false** (default): performs a dry run and performs the actual request. If the request passes the dry run, a 2xx HTTP status code is returned and the operation is performed.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The ID of the NAT gateway for which you want to enable ECS traffic monitoring.
     *
     * This parameter is required.
     * @example ngw-2vc53wynunp35lw1y****
     *
     * @var string
     */
    public $natGatewayId;

    /**
     * @description The region ID of the NAT gateway. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/36063.html) operation to query the most recent region list.
     *
     * This parameter is required.
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
