<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class ListIpsecServersRequest extends Model
{
    /**
     * @example iss-bp1bo3xuvcxo7ixll****
     *
     * @var string[]
     */
    public $ipsecServerId;

    /**
     * @description The name of the IPsec server.
     *
     * The name must be 1 to 100 characters in length, and cannot start with `http://` or `https://`.
     * @example test
     *
     * @var string
     */
    public $ipsecServerName;

    /**
     * @description The number of entries to return on each page. Valid values: **1** to **20**. Default value: **10**.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that is used for the next query. Valid values:
     *
     *   If this is your first query or no subsequent query is to be sent, ignore this parameter.
     *   If a subsequent query is to be sent, set the value to the value of **NextToken** that is returned from the last call.
     *
     * @example caeba0bbb2be03f84eb48b699f0a****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the region where the IPsec server is created.
     *
     * You can call the [DescribeRegions](~~36063~~) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the VPN gateway.
     *
     * @example vpn-bp1q8bgx4xnkm2ogj****
     *
     * @var string
     */
    public $vpnGatewayId;
    protected $_name = [
        'ipsecServerId'   => 'IpsecServerId',
        'ipsecServerName' => 'IpsecServerName',
        'maxResults'      => 'MaxResults',
        'nextToken'       => 'NextToken',
        'regionId'        => 'RegionId',
        'vpnGatewayId'    => 'VpnGatewayId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipsecServerId) {
            $res['IpsecServerId'] = $this->ipsecServerId;
        }
        if (null !== $this->ipsecServerName) {
            $res['IpsecServerName'] = $this->ipsecServerName;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
     * @return ListIpsecServersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpsecServerId'])) {
            if (!empty($map['IpsecServerId'])) {
                $model->ipsecServerId = $map['IpsecServerId'];
            }
        }
        if (isset($map['IpsecServerName'])) {
            $model->ipsecServerName = $map['IpsecServerName'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
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
