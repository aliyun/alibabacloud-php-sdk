<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class GetVpnGatewayDiagnoseResultRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     **
     *
     **Description** If you do not specify this parameter, the system automatically uses the request ID as the client token. The request ID may be different for each request.
     *
     * @example 02fb3da4-130e-11e9-8e44-001****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of the diagnostic operation.
     *
     * When you call the [DiagnoseVpnGateway](~~469751~~) operation, the system returns a corresponding ID.
     * @example vpndgn-uf6kuxbe3iv028k3s****
     *
     * @var string
     */
    public $diagnoseId;

    /**
     * @description The region ID of the VPN gateway.
     *
     * You can call the [DescribeRegions](~~36063~~) operation to query the most recent region list.
     * @example cn-qingdao
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the VPN gateway.
     *
     * @example vpn-uf6fzwp0ck3frwtbk****
     *
     * @var string
     */
    public $vpnGatewayId;
    protected $_name = [
        'clientToken'  => 'ClientToken',
        'diagnoseId'   => 'DiagnoseId',
        'regionId'     => 'RegionId',
        'vpnGatewayId' => 'VpnGatewayId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->diagnoseId) {
            $res['DiagnoseId'] = $this->diagnoseId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->vpnGatewayId) {
            $res['VpnGatewayId'] = $this->vpnGatewayId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVpnGatewayDiagnoseResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DiagnoseId'])) {
            $model->diagnoseId = $map['DiagnoseId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VpnGatewayId'])) {
            $model->vpnGatewayId = $map['VpnGatewayId'];
        }

        return $model;
    }
}
