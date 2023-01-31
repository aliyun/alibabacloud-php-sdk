<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class EnableNatGatewayEcsMetricRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @example ngw-2vc53wynunp35lw1y****
     *
     * @var string
     */
    public $natGatewayId;

    /**
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
