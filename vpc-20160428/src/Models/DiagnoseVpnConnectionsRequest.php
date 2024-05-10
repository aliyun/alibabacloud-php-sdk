<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class DiagnoseVpnConnectionsRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description This parameter is required.
     *
     * @example cn-qingdao
     *
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string[]
     */
    public $tunnelIds;

    /**
     * @var string[]
     */
    public $vpnConnectionIds;

    /**
     * @example vpn-bp10hz6b0mbp39flt****
     *
     * @var string
     */
    public $vpnGatewayId;
    protected $_name = [
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'regionId'         => 'RegionId',
        'resourceOwnerId'  => 'ResourceOwnerId',
        'tunnelIds'        => 'TunnelIds',
        'vpnConnectionIds' => 'VpnConnectionIds',
        'vpnGatewayId'     => 'VpnGatewayId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->tunnelIds) {
            $res['TunnelIds'] = $this->tunnelIds;
        }
        if (null !== $this->vpnConnectionIds) {
            $res['VpnConnectionIds'] = $this->vpnConnectionIds;
        }
        if (null !== $this->vpnGatewayId) {
            $res['VpnGatewayId'] = $this->vpnGatewayId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DiagnoseVpnConnectionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['TunnelIds'])) {
            if (!empty($map['TunnelIds'])) {
                $model->tunnelIds = $map['TunnelIds'];
            }
        }
        if (isset($map['VpnConnectionIds'])) {
            if (!empty($map['VpnConnectionIds'])) {
                $model->vpnConnectionIds = $map['VpnConnectionIds'];
            }
        }
        if (isset($map['VpnGatewayId'])) {
            $model->vpnGatewayId = $map['VpnGatewayId'];
        }

        return $model;
    }
}
