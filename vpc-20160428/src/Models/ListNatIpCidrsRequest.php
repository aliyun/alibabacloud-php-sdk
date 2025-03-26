<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;

class ListNatIpCidrsRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $maxResults;

    /**
     * @var string
     */
    public $natGatewayId;

    /**
     * @var string
     */
    public $natIpCidr;

    /**
     * @var string[]
     */
    public $natIpCidrName;

    /**
     * @var string
     */
    public $natIpCidrStatus;

    /**
     * @var string[]
     */
    public $natIpCidrs;

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
        'dryRun' => 'DryRun',
        'maxResults' => 'MaxResults',
        'natGatewayId' => 'NatGatewayId',
        'natIpCidr' => 'NatIpCidr',
        'natIpCidrName' => 'NatIpCidrName',
        'natIpCidrStatus' => 'NatIpCidrStatus',
        'natIpCidrs' => 'NatIpCidrs',
        'nextToken' => 'NextToken',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate()
    {
        if (\is_array($this->natIpCidrName)) {
            Model::validateArray($this->natIpCidrName);
        }
        if (\is_array($this->natIpCidrs)) {
            Model::validateArray($this->natIpCidrs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }

        if (null !== $this->natIpCidr) {
            $res['NatIpCidr'] = $this->natIpCidr;
        }

        if (null !== $this->natIpCidrName) {
            if (\is_array($this->natIpCidrName)) {
                $res['NatIpCidrName'] = [];
                $n1 = 0;
                foreach ($this->natIpCidrName as $item1) {
                    $res['NatIpCidrName'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->natIpCidrStatus) {
            $res['NatIpCidrStatus'] = $this->natIpCidrStatus;
        }

        if (null !== $this->natIpCidrs) {
            if (\is_array($this->natIpCidrs)) {
                $res['NatIpCidrs'] = [];
                $n1 = 0;
                foreach ($this->natIpCidrs as $item1) {
                    $res['NatIpCidrs'][$n1++] = $item1;
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

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }

        if (isset($map['NatIpCidr'])) {
            $model->natIpCidr = $map['NatIpCidr'];
        }

        if (isset($map['NatIpCidrName'])) {
            if (!empty($map['NatIpCidrName'])) {
                $model->natIpCidrName = [];
                $n1 = 0;
                foreach ($map['NatIpCidrName'] as $item1) {
                    $model->natIpCidrName[$n1++] = $item1;
                }
            }
        }

        if (isset($map['NatIpCidrStatus'])) {
            $model->natIpCidrStatus = $map['NatIpCidrStatus'];
        }

        if (isset($map['NatIpCidrs'])) {
            if (!empty($map['NatIpCidrs'])) {
                $model->natIpCidrs = [];
                $n1 = 0;
                foreach ($map['NatIpCidrs'] as $item1) {
                    $model->natIpCidrs[$n1++] = $item1;
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
