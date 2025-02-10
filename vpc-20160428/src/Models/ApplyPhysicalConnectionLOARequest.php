<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ApplyPhysicalConnectionLOARequest\PMInfo;

class ApplyPhysicalConnectionLOARequest extends Model
{
    /**
     * @var int
     */
    public $bandwidth;
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var string
     */
    public $companyName;
    /**
     * @var string
     */
    public $constructionTime;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $lineType;
    /**
     * @var string
     */
    public $ownerAccount;
    /**
     * @var int
     */
    public $ownerId;
    /**
     * @var PMInfo[]
     */
    public $PMInfo;
    /**
     * @var string
     */
    public $peerLocation;
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
    /**
     * @var string
     */
    public $si;
    protected $_name = [
        'bandwidth'            => 'Bandwidth',
        'clientToken'          => 'ClientToken',
        'companyName'          => 'CompanyName',
        'constructionTime'     => 'ConstructionTime',
        'instanceId'           => 'InstanceId',
        'lineType'             => 'LineType',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'PMInfo'               => 'PMInfo',
        'peerLocation'         => 'PeerLocation',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'si'                   => 'Si',
    ];

    public function validate()
    {
        if (\is_array($this->PMInfo)) {
            Model::validateArray($this->PMInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->companyName) {
            $res['CompanyName'] = $this->companyName;
        }

        if (null !== $this->constructionTime) {
            $res['ConstructionTime'] = $this->constructionTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->lineType) {
            $res['LineType'] = $this->lineType;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->PMInfo) {
            if (\is_array($this->PMInfo)) {
                $res['PMInfo'] = [];
                $n1            = 0;
                foreach ($this->PMInfo as $item1) {
                    $res['PMInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->peerLocation) {
            $res['PeerLocation'] = $this->peerLocation;
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

        if (null !== $this->si) {
            $res['Si'] = $this->si;
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
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['CompanyName'])) {
            $model->companyName = $map['CompanyName'];
        }

        if (isset($map['ConstructionTime'])) {
            $model->constructionTime = $map['ConstructionTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LineType'])) {
            $model->lineType = $map['LineType'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PMInfo'])) {
            if (!empty($map['PMInfo'])) {
                $model->PMInfo = [];
                $n1            = 0;
                foreach ($map['PMInfo'] as $item1) {
                    $model->PMInfo[$n1++] = PMInfo::fromMap($item1);
                }
            }
        }

        if (isset($map['PeerLocation'])) {
            $model->peerLocation = $map['PeerLocation'];
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

        if (isset($map['Si'])) {
            $model->si = $map['Si'];
        }

        return $model;
    }
}
