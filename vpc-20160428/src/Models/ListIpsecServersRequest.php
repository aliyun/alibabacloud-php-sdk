<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;

class ListIpsecServersRequest extends Model
{
    /**
     * @var string[]
     */
    public $ipsecServerId;
    /**
     * @var string
     */
    public $ipsecServerName;
    /**
     * @var int
     */
    public $maxResults;
    /**
     * @var string
     */
    public $nextToken;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string
     */
    public $vpnGatewayId;
    protected $_name = [
        'ipsecServerId'   => 'IpsecServerId',
        'ipsecServerName' => 'IpsecServerName',
        'maxResults'      => 'MaxResults',
        'nextToken'       => 'NextToken',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'vpnGatewayId'    => 'VpnGatewayId',
    ];

    public function validate()
    {
        if (\is_array($this->ipsecServerId)) {
            Model::validateArray($this->ipsecServerId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipsecServerId) {
            if (\is_array($this->ipsecServerId)) {
                $res['IpsecServerId'] = [];
                $n1                   = 0;
                foreach ($this->ipsecServerId as $item1) {
                    $res['IpsecServerId'][$n1++] = $item1;
                }
            }
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

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
        if (isset($map['IpsecServerId'])) {
            if (!empty($map['IpsecServerId'])) {
                $model->ipsecServerId = [];
                $n1                   = 0;
                foreach ($map['IpsecServerId'] as $item1) {
                    $model->ipsecServerId[$n1++] = $item1;
                }
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

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['VpnGatewayId'])) {
            $model->vpnGatewayId = $map['VpnGatewayId'];
        }

        return $model;
    }
}
