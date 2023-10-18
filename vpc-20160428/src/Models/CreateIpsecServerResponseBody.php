<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateIpsecServerResponseBody extends Model
{
    /**
     * @description The time when the IPsec server was created.
     *
     * T is used as a delimiter. Z indicates that the time is in UTC.
     * @example 2021-02-22T03:24:28Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The IPsec server ID.
     *
     * @example iss-bp1jougp8cfsbo8y9****
     *
     * @var string
     */
    public $ipsecServerId;

    /**
     * @description The IPsec server name.
     *
     * @example test
     *
     * @var string
     */
    public $ipsecServerName;

    /**
     * @description The ID of the region where the VPN gateway is deployed.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The request ID.
     *
     * @example 690A967E-D4CD-4B69-8C78-94FE828BA10B
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the VPN gateway.
     *
     * @example vpn-bp17lofy9fd0dnvzv****
     *
     * @var string
     */
    public $vpnGatewayId;
    protected $_name = [
        'creationTime'    => 'CreationTime',
        'ipsecServerId'   => 'IpsecServerId',
        'ipsecServerName' => 'IpsecServerName',
        'regionId'        => 'RegionId',
        'requestId'       => 'RequestId',
        'vpnGatewayId'    => 'VpnGatewayId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->ipsecServerId) {
            $res['IpsecServerId'] = $this->ipsecServerId;
        }
        if (null !== $this->ipsecServerName) {
            $res['IpsecServerName'] = $this->ipsecServerName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->vpnGatewayId) {
            $res['VpnGatewayId'] = $this->vpnGatewayId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIpsecServerResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['IpsecServerId'])) {
            $model->ipsecServerId = $map['IpsecServerId'];
        }
        if (isset($map['IpsecServerName'])) {
            $model->ipsecServerName = $map['IpsecServerName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VpnGatewayId'])) {
            $model->vpnGatewayId = $map['VpnGatewayId'];
        }

        return $model;
    }
}
