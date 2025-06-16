<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;

class ListFullNatEntriesRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $fullNatEntryId;

    /**
     * @var string[]
     */
    public $fullNatEntryNames;

    /**
     * @var string
     */
    public $fullNatTableId;

    /**
     * @var string
     */
    public $ipProtocol;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $natGatewayId;

    /**
     * @var string
     */
    public $natIp;

    /**
     * @var string
     */
    public $natIpPort;

    /**
     * @var string[]
     */
    public $networkInterfaceIds;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'fullNatEntryId' => 'FullNatEntryId',
        'fullNatEntryNames' => 'FullNatEntryNames',
        'fullNatTableId' => 'FullNatTableId',
        'ipProtocol' => 'IpProtocol',
        'maxResults' => 'MaxResults',
        'natGatewayId' => 'NatGatewayId',
        'natIp' => 'NatIp',
        'natIpPort' => 'NatIpPort',
        'networkInterfaceIds' => 'NetworkInterfaceIds',
        'nextToken' => 'NextToken',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate()
    {
        if (\is_array($this->fullNatEntryNames)) {
            Model::validateArray($this->fullNatEntryNames);
        }
        if (\is_array($this->networkInterfaceIds)) {
            Model::validateArray($this->networkInterfaceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->fullNatEntryId) {
            $res['FullNatEntryId'] = $this->fullNatEntryId;
        }

        if (null !== $this->fullNatEntryNames) {
            if (\is_array($this->fullNatEntryNames)) {
                $res['FullNatEntryNames'] = [];
                $n1 = 0;
                foreach ($this->fullNatEntryNames as $item1) {
                    $res['FullNatEntryNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->fullNatTableId) {
            $res['FullNatTableId'] = $this->fullNatTableId;
        }

        if (null !== $this->ipProtocol) {
            $res['IpProtocol'] = $this->ipProtocol;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }

        if (null !== $this->natIp) {
            $res['NatIp'] = $this->natIp;
        }

        if (null !== $this->natIpPort) {
            $res['NatIpPort'] = $this->natIpPort;
        }

        if (null !== $this->networkInterfaceIds) {
            if (\is_array($this->networkInterfaceIds)) {
                $res['NetworkInterfaceIds'] = [];
                $n1 = 0;
                foreach ($this->networkInterfaceIds as $item1) {
                    $res['NetworkInterfaceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['FullNatEntryId'])) {
            $model->fullNatEntryId = $map['FullNatEntryId'];
        }

        if (isset($map['FullNatEntryNames'])) {
            if (!empty($map['FullNatEntryNames'])) {
                $model->fullNatEntryNames = [];
                $n1 = 0;
                foreach ($map['FullNatEntryNames'] as $item1) {
                    $model->fullNatEntryNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['FullNatTableId'])) {
            $model->fullNatTableId = $map['FullNatTableId'];
        }

        if (isset($map['IpProtocol'])) {
            $model->ipProtocol = $map['IpProtocol'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }

        if (isset($map['NatIp'])) {
            $model->natIp = $map['NatIp'];
        }

        if (isset($map['NatIpPort'])) {
            $model->natIpPort = $map['NatIpPort'];
        }

        if (isset($map['NetworkInterfaceIds'])) {
            if (!empty($map['NetworkInterfaceIds'])) {
                $model->networkInterfaceIds = [];
                $n1 = 0;
                foreach ($map['NetworkInterfaceIds'] as $item1) {
                    $model->networkInterfaceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
