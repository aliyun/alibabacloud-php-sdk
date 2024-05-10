<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class DiagnoseVpnGatewayRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * >  If you do not specify this parameter, the system automatically uses the request ID as the client token. The request ID may be different for each request.
     * @example 02fb3da4-130e-11e9-8e44-001****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The configuration when you check the connectivity of the IPsec-VPN connection. Valid values:
     *
     *   **PrivateSourceIp**: the source IP address used when you check the connectivity of the IPsec-VPN connection. The source IP address must be on the VPC side.
     *   **PrivateDestinationIp**: the destination IP address used when you check the connectivity of the IPsec-VPN connection. The destination IP address must be on the data center side.
     *
     * @example {"PrivateSourceIp":"192.168.1.1","PrivateDestinationIp":"192.168.0.1"}
     *
     * @var string
     */
    public $IPsecExtendInfo;

    /**
     * @description The region ID of the VPN gateway.
     *
     * This parameter is required.
     * @example cn-qingdao
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource to be diagnosed.
     *
     * This parameter is required.
     * @example vco-uf66xniofskqtuoz1****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The type of the resource.
     *
     * Set the value to **Ipsec**, which specifies an IPsec-VPN connection.
     *
     * This parameter is required.
     * @example IPsec
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The ID of the VPN gateway.
     *
     * This parameter is required.
     * @example vpn-m5efhj0k1p47ctuhl****
     *
     * @var string
     */
    public $vpnGatewayId;
    protected $_name = [
        'clientToken'     => 'ClientToken',
        'IPsecExtendInfo' => 'IPsecExtendInfo',
        'regionId'        => 'RegionId',
        'resourceId'      => 'ResourceId',
        'resourceType'    => 'ResourceType',
        'vpnGatewayId'    => 'VpnGatewayId',
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
        if (null !== $this->IPsecExtendInfo) {
            $res['IPsecExtendInfo'] = $this->IPsecExtendInfo;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->vpnGatewayId) {
            $res['VpnGatewayId'] = $this->vpnGatewayId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DiagnoseVpnGatewayRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['IPsecExtendInfo'])) {
            $model->IPsecExtendInfo = $map['IPsecExtendInfo'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['VpnGatewayId'])) {
            $model->vpnGatewayId = $map['VpnGatewayId'];
        }

        return $model;
    }
}
