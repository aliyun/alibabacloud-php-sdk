<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;

class DiagnoseVpnConnectionsRequest extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
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
     * @var string
     */
    public $vpnGatewayId;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'resourceOwnerId' => 'ResourceOwnerId',
        'tunnelIds' => 'TunnelIds',
        'vpnConnectionIds' => 'VpnConnectionIds',
        'vpnGatewayId' => 'VpnGatewayId',
    ];

    public function validate()
    {
        if (\is_array($this->tunnelIds)) {
            Model::validateArray($this->tunnelIds);
        }
        if (\is_array($this->vpnConnectionIds)) {
            Model::validateArray($this->vpnConnectionIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->tunnelIds)) {
                $res['TunnelIds'] = [];
                $n1 = 0;
                foreach ($this->tunnelIds as $item1) {
                    $res['TunnelIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->vpnConnectionIds) {
            if (\is_array($this->vpnConnectionIds)) {
                $res['VpnConnectionIds'] = [];
                $n1 = 0;
                foreach ($this->vpnConnectionIds as $item1) {
                    $res['VpnConnectionIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->vpnGatewayId) {
            $res['VpnGatewayId'] = $this->vpnGatewayId;
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
                $model->tunnelIds = [];
                $n1 = 0;
                foreach ($map['TunnelIds'] as $item1) {
                    $model->tunnelIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['VpnConnectionIds'])) {
            if (!empty($map['VpnConnectionIds'])) {
                $model->vpnConnectionIds = [];
                $n1 = 0;
                foreach ($map['VpnConnectionIds'] as $item1) {
                    $model->vpnConnectionIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['VpnGatewayId'])) {
            $model->vpnGatewayId = $map['VpnGatewayId'];
        }

        return $model;
    }
}
